<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        // Log incoming data for debugging (check Laravel logs)
        \Log::info('EnquiryController@store - Received data:', $request->all());

        // Update validation rules to match form field names
        $validator = Validator::make($request->all(), [
            // Map CF7 field names to validation rules
            'your_name' => 'required|string|max:255',
            'your_email' => 'required|email|max:255',
            'your_phone' => 'required|string|max:20', // Adjust max as needed
            'your_subject' => 'required|string|max:255',
            'your_message' => 'required|string|max:2000', // Match textarea maxlength
            // Add any other CF7 fields if present (e.g., '_wpcf7', '_wpcf7_version' etc. - these are usually ignored)
        ]);

        if ($validator->fails()) {
            \Log::warning('EnquiryController@store - Validation failed:', $validator->errors()->toArray());
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Validation failed.',
                    'errors' => $validator->errors()
                ], 422); // 422 Unprocessable Entity
            } else {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }

        try {
            // Create the enquiry record using the CF7 field names
            $enquiry = Enquiry::create([
                'name' => $request->input('your_name'),
                'email' => $request->input('your_email'),
                'phone' => $request->input('your_phone'),
                'subject' => $request->input('your_subject'),
                'message' => $request->input('your_message'),
            ]);

            \Log::info('EnquiryController@store - Enquiry created successfully with ID: ' . $enquiry->id);

            // Success response
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Your enquiry has been submitted successfully!'
                ]);
            } else {
                return redirect()->back()->with('success', 'Your enquiry has been submitted successfully!');
            }

        } catch (\Exception $e) {
            \Log::error("EnquiryController@store - Error saving enquiry: " . $e->getMessage(), ['exception' => $e]);
            $errorMessage = 'An error occurred while submitting your enquiry. Please try again later.';
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => $errorMessage
                ], 500);
            } else {
                return redirect()->back()->with('error', $errorMessage);
            }
        }
    }
}