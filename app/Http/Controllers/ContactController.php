<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class ContactController extends Controller
{
    public function __construct()
    {
        // Temporarily comment out permissions for testing 
        $this->middleware('permission:view-contacts|create-contacts|edit-contacts|delete-contacts', ['only' => ['index','show']]);
        $this->middleware('permission:create-contacts', ['only' => ['create','store']]);
        $this->middleware('permission:edit-contacts', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-contacts', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Contact::query();

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

        // Search by name, phone, email, or company
        if ($request->filled('search')) {
            $query->search($request->search);
        }

        $contacts = $query->orderBy('created_at', 'desc')->paginate(15);

        // Get statistics
        $stats = [
            'total' => Contact::count(),
            'active' => Contact::where('status', 'active')->count(),
            'inactive' => Contact::where('status', 'inactive')->count(),
            'lead' => Contact::where('status', 'lead')->count(),
            'customer' => Contact::where('status', 'customer')->count(),
            'vendor' => Contact::where('status', 'vendor')->count(),
            'today' => Contact::whereDate('created_at', today())->count(),
            'this_week' => Contact::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count(),
            'this_month' => Contact::whereMonth('created_at', now()->month)->count(),
        ];

        // Get source statistics
        $sourceStats = Contact::select('source', DB::raw('count(*) as count'))
            ->whereNotNull('source')
            ->groupBy('source')
            ->orderBy('count', 'desc')
            ->get();

        return view('admin.contact.index', compact('contacts', 'stats', 'sourceStats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'company' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
            'status' => 'required|in:active,inactive,lead,customer,vendor',
            'source' => 'nullable|string|max:255',
            'birth_date' => 'nullable|date',
            'website' => 'nullable|url|max:255',
            'social_media' => 'nullable|string|max:255',
        ]);

        try {
            Contact::create($request->all());
            return redirect()->route('admin.contacts.index')->with('success', 'Contact created successfully!');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Error creating contact: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $contact = Contact::findOrFail($id);
            return view('admin.contact.edit', compact('contact'));
        } catch (\Exception $e) {
            return redirect()->route('admin.contacts.index')->with('error', 'Contact not found: ' . $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'company' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
            'status' => 'required|in:active,inactive,lead,customer,vendor',
            'source' => 'nullable|string|max:255',
            'birth_date' => 'nullable|date',
            'website' => 'nullable|url|max:255',
            'social_media' => 'nullable|string|max:255',
        ]);

        try {
            $contact = Contact::findOrFail($id);
            $contact->update($request->all());
            return redirect()->route('admin.contacts.index')->with('success', 'Contact updated successfully!');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Error updating contact: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();
            return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('admin.contacts.index')->with('error', 'Error deleting contact: ' . $e->getMessage());
        }
    }

    /**
     * Update contact status
     */
    public function updateStatus(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required|in:active,inactive,lead,customer,vendor'
        ]);

        try {
            $contact = Contact::findOrFail($id);
            $contact->update(['status' => $request->status]);
            
            return response()->json([
                'success' => true,
                'message' => 'Status updated successfully',
                'new_status' => $request->status,
                'status_badge' => $contact->status_badge
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating status: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Export contacts
     */
    public function export(Request $request)
    {
        $query = Contact::query();

        // Apply filters
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        if ($request->filled('search')) {
            $query->search($request->search);
        }

        $contacts = $query->orderBy('created_at', 'desc')->get();

        $filename = 'contacts_' . date('Y-m-d_H-i-s') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $callback = function() use ($contacts) {
            $file = fopen('php://output', 'w');
            
            // Add headers
            fputcsv($file, [
                'ID', 'First Name', 'Last Name', 'Phone', 'Email', 'Company', 'Position',
                'Address', 'City', 'State', 'Country', 'Postal Code', 'Status', 'Source',
                'Birth Date', 'Website', 'Social Media', 'Notes', 'Created At', 'Updated At'
            ]);

            // Add data
            foreach ($contacts as $contact) {
                fputcsv($file, [
                    $contact->id,
                    $contact->first_name,
                    $contact->last_name,
                    $contact->phone,
                    $contact->email,
                    $contact->company,
                    $contact->position,
                    $contact->address,
                    $contact->city,
                    $contact->state,
                    $contact->country,
                    $contact->postal_code,
                    $contact->status,
                    $contact->source,
                    $contact->birth_date,
                    $contact->website,
                    $contact->social_media,
                    $contact->notes,
                    $contact->created_at,
                    $contact->updated_at
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
} 