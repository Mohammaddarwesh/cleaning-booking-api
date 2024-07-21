<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\BookingRequest;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function book(Request $request)
    {
        $data = $request->all();

        Mail::to('modysam066@gmail.com')->send(new BookingRequest($data));

        return response()->json(['message' => 'Booking request sent successfully!'], 200);
    }
}
