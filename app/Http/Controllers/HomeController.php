<?php

    namespace App\Http\Controllers;

    use App\Models\User;
use App\Models\SiteSetting;
use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index()
    {
        $siteSettings = SiteSetting::first();
        
        // Get dynamic schemas for home page
        $schemaService = app(\App\Services\SchemaService::class);
        $dynamicSchemas = $schemaService->getSchemasForContent('home', null);
        
        return view('index', compact('siteSettings', 'dynamicSchemas'));
    }

    public function submitConsultation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'age' => 'required|string|max:50',
            'treatment' => 'required|string|max:100',
            'message' => 'nullable|string|max:1000',
            'privacy' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please check your input and try again.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Store consultation data in database
            $consultation = Consultation::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'age' => $request->age,
                'treatment' => $request->treatment,
                'message' => $request->message,
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'status' => 'new',
            ]);

            // Send email notification (optional)
            $siteSettings = SiteSetting::first();
            if ($siteSettings && $siteSettings->site_email) {
                $this->sendConsultationEmail($consultation->toArray(), $siteSettings->site_email);
            }

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your consultation request has been submitted successfully. We will contact you soon.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }

    private function sendConsultationEmail($consultationData, $adminEmail)
    {
        try {
            Mail::send('emails.consultation', ['consultation' => $consultationData], function ($message) use ($adminEmail, $consultationData) {
                $message->to($adminEmail)
                        ->subject('New Consultation Request - ' . $consultationData['first_name'] . ' ' . $consultationData['last_name']);
            });
        } catch (\Exception $e) {
            // Log email error but don't fail the form submission
            \Log::error('Consultation email failed: ' . $e->getMessage());
        }
    }
}
