<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'emailContent' => 'required|string',
            'personalInfo' => 'required|array',
            'personalInfo.email' => 'required|email',
        ]);

        $emailContent = $validatedData['emailContent'];
        $customerEmail = $validatedData['personalInfo']['email'];

        // Send the booking details email to the company owner
        Mail::raw($emailContent, function ($message) {
            $message->to('modysam049@gmail.com') // Replace with the actual recipient
                    ->subject('Cleaning Service Booking');
        });

        // Send a confirmation email to the customer
        Mail::raw('Thank you for your trust in us. We will contact you soon.', function ($message) use ($customerEmail) {
            $message->to($customerEmail)
                    ->subject('Booking Confirmation');
        });

        return response()->json(['message' => 'Email sent successfully']);
    }
}
