<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class ConsultationController extends Controller
{
    public function __construct()
    {
        // Temporarily comment out permissions for testing 
        $this->middleware('permission:view-consultations|create-consultations|edit-consultations|delete-consultations', ['only' => ['index','show']]);
        $this->middleware('permission:create-consultations', ['only' => ['create','store']]);
        $this->middleware('permission:edit-consultations', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-consultations', ['only' => ['destroy']]);

    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Consultation::query();

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by date range
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        // Search by name, phone, or email
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere(DB::raw("CONCAT(first_name, ' ', last_name)"), 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $consultations = $query->orderBy('created_at', 'desc')->paginate(15);

        // Get statistics
        $stats = [
            'total' => Consultation::count(),
            'new' => Consultation::where('status', 'new')->count(),
            'contacted' => Consultation::where('status', 'contacted')->count(),
            'consulted' => Consultation::where('status', 'consulted')->count(),
            'cancelled' => Consultation::where('status', 'cancelled')->count(),
            'today' => Consultation::whereDate('created_at', today())->count(),
            'this_week' => Consultation::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count(),
            'this_month' => Consultation::whereMonth('created_at', now()->month)->count(),
        ];

        // Get treatment statistics
        $treatmentStats = Consultation::select('treatment', DB::raw('count(*) as count'))
            ->groupBy('treatment')
            ->orderBy('count', 'desc')
            ->get();
        Cache::forget('consultation_stats');

        return view('admin.consultation.index', compact('consultations', 'stats', 'treatmentStats'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $consultation = Consultation::findOrFail($id);
        return view('admin.consultation.show', compact('consultation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $consultation = Consultation::findOrFail($id);
            return view('admin.consultation.edit', compact('consultation'));
        } catch (\Exception $e) {
            return redirect()->route('admin.consultations.index')->with('error', 'Consultation not found: ' . $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $consultation = Consultation::findOrFail($id);
            
            $validated = $request->validate([
                'status' => 'required|in:new,contacted,consulted,cancelled',
                'notes' => 'nullable|string|max:1000',
            ]);

            // Update the consultation
            $consultation->status = $validated['status'];
            if (isset($validated['notes'])) {
                $consultation->notes = $validated['notes'];
            }
            $consultation->save();

            // Return JSON response for AJAX requests
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Consultation updated successfully.',
                    'consultation' => $consultation
                ]);
            }

            return redirect()->route('admin.consultations.index')->with('success', 'Consultation updated successfully.');
        } catch (\Exception $e) {
            \Log::error('Consultation update error: ' . $e->getMessage());
            
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error updating consultation: ' . $e->getMessage()
                ], 422);
            }
            Cache::forget('consultation_stats');
            return redirect()->back()->with('error', 'Error updating consultation: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->delete();

        return redirect()->route('admin.consultations.index')->with('success', 'Consultation deleted successfully.');
    }

    /**
     * Update consultation status via AJAX
     */
    public function updateStatus(Request $request, string $id)
    {
        try {
            \Log::info('Update status request received', [
                'id' => $id,
                'data' => $request->all(),
                'method' => $request->method()
            ]);

            $consultation = Consultation::findOrFail($id);
            
            $validated = $request->validate([
                'status' => 'required|in:new,contacted,consulted,cancelled',
            ]);

            $consultation->status = $validated['status'];
            $consultation->save();

            \Log::info('Status updated successfully', [
                'consultation_id' => $consultation->id,
                'new_status' => $consultation->status
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Status updated successfully.',
                'consultation' => $consultation
            ]);
        } catch (\Exception $e) {
            \Log::error('Status update error: ' . $e->getMessage(), [
                'id' => $id,
                'data' => $request->all(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Error updating status: ' . $e->getMessage()
            ], 422);
        }
    }

    /**
     * Export consultations to CSV
     */
    public function export(Request $request)
    {
        \Log::info('Export request received', [
            'url' => $request->fullUrl(),
            'query' => $request->query(),
            'method' => $request->method()
        ]);
        
        try {
            $query = Consultation::query();

            // Apply filters (same as index method)
            if ($request->filled('status')) {
                $query->where('status', $request->status);
            }

            // Filter by date range
            if ($request->filled('date_from')) {
                $query->whereDate('created_at', '>=', $request->date_from);
            }
            if ($request->filled('date_to')) {
                $query->whereDate('created_at', '<=', $request->date_to);
            }

            // Search by name, phone, or email
            if ($request->filled('search')) {
                $search = $request->search;
                $query->where(function($q) use ($search) {
                    $q->where('first_name', 'like', "%{$search}%")
                      ->orWhere('last_name', 'like', "%{$search}%")
                      ->orWhere(DB::raw("CONCAT(first_name, ' ', last_name)"), 'like', "%{$search}%")
                      ->orWhere('phone', 'like', "%{$search}%")
                      ->orWhere('email', 'like', "%{$search}%");
                });
            }

            $consultations = $query->orderBy('created_at', 'desc')->get();

            $filename = 'consultations_' . date('Y-m-d_H-i-s') . '.csv';
            
            $headers = [
                'Content-Type' => 'text/csv; charset=UTF-8',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
                'Pragma' => 'no-cache',
                'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
                'Expires' => '0'
            ];

            $callback = function() use ($consultations) {
                $file = fopen('php://output', 'w');
                
                // Add BOM for UTF-8
                fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
                
                // Add headers
                fputcsv($file, [
                    'ID', 'First Name', 'Last Name', 'Phone', 'Email', 'Age', 
                    'Treatment', 'Message', 'Status', 'Notes', 'IP Address', 'Created At'
                ]);

                // Add data
                foreach ($consultations as $consultation) {
                    fputcsv($file, [
                        $consultation->id,
                        $consultation->first_name,
                        $consultation->last_name,
                        $consultation->phone,
                        $consultation->email,
                        $consultation->age,
                        $consultation->treatment,
                        $consultation->message,
                        $consultation->status,
                        $consultation->notes,
                        $consultation->ip_address,
                        $consultation->created_at->format('Y-m-d H:i:s')
                    ]);
                }

                fclose($file);
            };

            return response()->stream($callback, 200, $headers);
        } catch (\Exception $e) {
            \Log::error('Export error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error exporting consultations: ' . $e->getMessage()
                ], 500);
            }
            
            return redirect()->back()->with('error', 'Error exporting consultations: ' . $e->getMessage());
        }
    }
} 