<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function sendContactEmail(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $messageContent = $validatedData['message'];

        $emailContent = "Name: $name\nEmail: $email\n\nMessage:\n$messageContent";

        try {
            // Send the email
            Mail::raw($emailContent, function ($message) use ($email, $name) {
                $message->to('modysam066@gmail.com') // Replace with your actual work email
                        ->subject('Contact Form Submission')
                        ->replyTo($email, $name);
            });

            return response()->json(['message' => 'Email sent successfully']);
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to send email. Please try again.'], 500);
        }
    }
}
