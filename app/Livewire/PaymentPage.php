<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class PaymentPage extends Component
{
    public $event;

    public function mount()
    {
        // Retrieve event details from session
        $this->event = Session::get('event_payment');

        if (!$this->event) {
            return redirect('/')->with('error', 'No payment details found.');
        }
    }

    public function payNow()
    {
        // Implement bKash API integration here
        session()->flash('success', 'Payment successful!');
    }

    public function render()
    {
        return view('livewire.payment-page');
    }
}
