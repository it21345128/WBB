<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commissioner;
use App\Models\ContactUs; // Placeholder for form fields
use App\Models\ContactMessage; // To store actual form submissions

class ContactUsController extends Controller
{
    public function contactUs()
    {
        // Fetch commissioner data
        $commissioner = Commissioner::where('type', 'Commissioner')->first();
        $additionalCommissioners = Commissioner::where('type', 'Additional Commissioner')->get();
        $deputyCommissioners = Commissioner::where('type', 'Deputy Commissioner')->get();
        $assistantCommissioners = Commissioner::where('type', 'Assistant Commissioner')->get();

        // Fetch form content (placeholders for form fields)
        $formContent = ContactUs::first();

        return view('contact-us', compact(
            'commissioner',
            'additionalCommissioners',
            'deputyCommissioners',
            'assistantCommissioners',
            'formContent'
        ));
    }

    public function sendContactForm(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Store the message in the contact_messages table
        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
