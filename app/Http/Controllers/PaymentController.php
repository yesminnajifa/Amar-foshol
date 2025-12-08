<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    /**
     * Show the payment form
     */
    public function payment()
    {
        return view('payment'); // your Blade file
    }

    /**
     * Store payment information
     */
    public function store(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'amount' => 'required|numeric',
            'mobile' => 'required|string',
            'method' => 'required|string',
            'transaction_id' => 'nullable|string',
        ]);

        // Save the payment to the database
        Payment::create([
            'amount' => $request->amount,
            'mobile' => $request->mobile,
            'method' => $request->method,
            'transaction_id' => $request->transaction_id,
        ]);

        // Redirect back with a success message
        return back()->with('success', 'পেমেন্ট সফলভাবে রেকর্ড করা হয়েছে।');
    }
}
