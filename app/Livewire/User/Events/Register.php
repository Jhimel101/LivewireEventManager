<?php

namespace App\Livewire\User\Events;

use Livewire\Component;
use Livewire\Attributes\Layout; // Add this line
use App\Models\Event;
use Illuminate\Support\Facades\Session;

class Register extends Component
{
    public $event;

    public function mount($eventId)
    {
        $this->event = Event::findOrFail($eventId);
    }

    // ✅ Add the missing payNow method
    public function payNow()
    {
        // Example: Store event details in session and redirect to payment page
        Session::put('event_payment', [
            'event_id' => $this->event->id,
            'title' => $this->event->title,
            'price' => $this->event->price,
            'venue' => $this->event->venue,
        ]);

        return redirect()->route('payment.page');
    }

    #[Layout('layouts.app')] // Use the #[Layout] attribute
    public function render()
    {
        return view('livewire.user.events.register');
    }
}
