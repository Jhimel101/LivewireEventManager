<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Event;

class PaymentController extends Controller
{
    public function show()
    {
        // Retrieve event payment details from session
        $event = Session::get('event_payment');

        if (!$event) {
            return redirect('/')->with('error', 'No payment details found.');
        }

        return view('payment.page', compact('event'));
    }

    public function showPaymentPage($eventId)
    {
        // Fetch the event as an Eloquent model
        $event = Event::find($eventId);  // This returns an Eloquent model object

        // Check if the event is found
        if (!$event) {
            return redirect()->route('events.index')->with('error', 'Event not found!');
        }

        return view('payment.page', compact('event'));  // Pass as an object
    }

    public function processPayment(Request $request)
    {
        // Simulate the payment processing logic
        // For example, using Bkash or another payment gateway

        // After successful payment, you can save payment details or mark the event as paid
        // For demonstration, we're assuming the payment is always successful

        // Redirect to a confirmation page or the event registration page
        return redirect()->route('payment.success');
    }

    public function paymentSuccess()
    {
        return view('payment.success');
    }

    public function success()
    {
        // Handle successful payment logic here
        return view('payment.success');
    }
}
