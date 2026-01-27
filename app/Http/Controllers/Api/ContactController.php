<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Store a newly created contact/join submission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        // Determine the type based on whether 'plan' is provided
        $type = $request->has('plan') && $request->plan ? 'join' : 'contact';

        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|size:10|regex:/^[0-9]+$/',
        ];

        // Add plan validation for join type
        if ($type === 'join') {
            $rules['plan'] = 'required|string|in:basic,standard,premium';
        }

        // Custom error messages
        $messages = [
            'name.required' => 'Please enter your full name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your phone number.',
            'phone.size' => 'Phone number must be exactly 10 digits.',
            'phone.regex' => 'Phone number should contain only digits.',
            'plan.required' => 'Please select a membership plan.',
            'plan.in' => 'Please select a valid membership plan.',
        ];

        // Validate request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            // Create the contact record
            $contact = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'plan' => $type === 'join' ? $request->plan : null,
                'type' => $type,
            ]);

            return response()->json([
                'success' => true,
                'message' => $type === 'join' 
                    ? 'Thank you for joining FitZone! Our team will contact you soon.' 
                    : 'Thank you for contacting us! We will get back to you within 24 hours.',
                'data' => $contact,
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.',
            ], 500);
        }
    }

    /**
     * Get all submissions (optional - for admin purposes)
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $contacts = Contact::latest()->get();
        
        return response()->json([
            'success' => true,
            'data' => $contacts,
        ]);
    }
}
