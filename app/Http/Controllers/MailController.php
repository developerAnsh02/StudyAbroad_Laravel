<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\VisaAssistanceFormSubmitted; // Import the Mailable class
use App\Mail\ContactFormSubmitted; // Import the Mailable class
use Illuminate\Support\Facades\Mail; // Import the Mail facade
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    
    public function sendVisaAssistanceEmail(Request $request)
    {
        // Define custom error messages
        $customMessages = [
            'name.required' => 'The name field is mandatory.',
            'phone_number.main.required' => 'Please enter your phone number.',
            'phone_number.main.regex' => 'The phone number must be a 10-digit number.',
            'phone_number.full.required' => 'Please enter your full phone number.',
            'phone_number.full.regex' => 'The full phone number must be in international format.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please provide a valid email address.',
            'visa_country.required' => 'The visa country field is required.',
            'visa_type.required' => 'The visa type is required.',
            'counselling_mode.required' => 'Please select a preferred counselling mode.',
            'tac_check.required' => 'You must agree to the Terms & Conditions.',
            'tac_check.in' => 'You must agree to the Terms & Conditions.',
        ];

        // Validate the incoming request data with custom messages
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', 
            'phone_number.main' => 'required|string|regex:/^[0-9]{10}$/',
            'phone_number.full' => 'required|string|regex:/^\+[1-9]{1}[0-9]{3,14}$/',
            'email' => 'required|email|max:255',
            'visa_country' => 'required|string|max:255',
            'visa_type' => 'required|string|max:255',
            // 'counselling_mode' => 'required|string|in:Phone,Video,Home',
            // ✅ counselling_mode is only required if visa_type == 'Student Visa'
            'counselling_mode' => [
                Rule::requiredIf(function () use ($request) {
                    return $request->visa_type === 'Student Visa';
                }),
                'string',
                Rule::in(['Phone', 'Video', 'Home']),
            ],
            'tac_check' => 'required|in:on',
        ], $customMessages);

        // Extract the full phone number (e.g., +911234567890)
        $fullPhoneNumber = $validatedData['phone_number']['full'];

        // Extract the main phone number (e.g., 1234567890)
        $mainPhoneNumber = $validatedData['phone_number']['main'];

        // Extract the country code by removing the main phone number part from the full phone number
        $countryCode = str_replace($mainPhoneNumber, '', $fullPhoneNumber);
        
        // Create a new array with the form data
        $formData = [
            'name' => $validatedData['name'],
            'phone_number_main' => $validatedData['phone_number']['main'], // Get the main phone number
            'country_code' => $countryCode,
            'email' => $validatedData['email'],
            'visa_country' => $validatedData['visa_country'],
            'visa_type' => $validatedData['visa_type'],
            // 'counselling_mode' => $validatedData['counselling_mode'],
        ];
        // ✅ Only include counselling_mode if it was submitted (in case it's not required)
        if (isset($validatedData['counselling_mode'])) {
            $formData['counselling_mode'] = $validatedData['counselling_mode'];
        }

        Mail::to('vikramsuthar.wm@gmail.com') // Replace with the recipient email address
                ->send(new VisaAssistanceFormSubmitted($formData));
        // try {
        //     // Try sending the email to the recipient
        //     Mail::to('vikramsuthar.wm@gmail.com') // Replace with the recipient email address
        //         ->send(new VisaAssistanceFormSubmitted($formData));

        //     // If successful, return a success message
        //     return back()->with('success', 'Your form has been submitted successfully!');
        // } catch (\Exception $e) {
        //     // If an error occurs, catch the exception and log the error
        //     \Log::error('Email sending failed: ' . $e->getMessage());

        //     // Optionally, you can provide a user-friendly message to the user
        //     return back()->with('error', 'There was an issue sending your email. Please try again later.');
        // }

        Session::put('visa_form_submitted', true);

        return response()->json([
            'success' => true,
            'redirect_url' => route('thankyou')
        ]);
    }
    
    public function contactSubmit(Request $request)
    {
        // Define custom error messages
        $customMessages = [
            'name.required' => 'The name field is mandatory.',
            'name.string' => 'The name must be a valid string.',
            'email.required' => 'The email field is mandatory.',
            'email.email' => 'Please provide a valid email address.',
            'phone_number.main.required' => 'Please enter your phone number.',
            'phone_number.main.regex' => 'The phone number must be a 10-digit number.',
            'phone_number.full.required' => 'Please enter your full phone number.',
            'phone_number.full.regex' => 'The full phone number must be in international format.',
            'message.required' => 'The message field is mandatory.',
            'message.string' => 'The message must be a valid string.',
            'tac_check.required' => 'You must agree to the Terms & Conditions.',
            'tac_check.in' => 'You must agree to the Terms & Conditions.',
        ];

        // Validate the incoming request data with custom messages
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required|email|max:255',
            'phone_number.main' => 'required|string|regex:/^\d{10}$/', // 10-digit phone number validation
            'phone_number.full' => 'required|string|regex:/^\+[1-9]{1}[0-9]{3,14}$/', // Full phone number validation (international format)
            'message' => 'required|string|max:500',
            'tac_check' => 'required|in:on',
        ], $customMessages);

        // Extract the full phone number (e.g., +911234567890)
        $fullPhoneNumber = $validatedData['phone_number']['full'];

        // Extract the main phone number (e.g., 1234567890)
        $mainPhoneNumber = $validatedData['phone_number']['main'];

        // Extract the country code by removing the main phone number part from the full phone number
        $countryCode = str_replace($mainPhoneNumber, '', $fullPhoneNumber);
        
        // Create a new array with the form data
        $formData = [
            'name' => $validatedData['name'],
            'phone_number_main' => $validatedData['phone_number']['main'], // Get the main phone number
            'country_code' => $countryCode,
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ];
        try {
            // Try sending the email to the recipient
            Mail::to('vikramsuthar.wm@gmail.com') // Replace with the recipient email address
                ->send(new ContactFormSubmitted($formData));

            // If successful, return a success message
            // return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        } catch (\Exception $e) {
            // If an error occurs, catch the exception and log the error
            \Log::error('Email sending failed: ' . $e->getMessage());

            // Optionally, you can provide a user-friendly message to the user
            return back()->with('error', 'There was an issue sending your email. Please try again later.');
        }

        Session::put('visa_form_submitted', true);

        return response()->json([
            'success' => true,
            'redirect_url' => route('thankyou')
        ]);
        
    }


}
