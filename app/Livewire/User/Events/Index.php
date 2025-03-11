<?php

namespace App\Livewire\User\Events;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Models\Event;

class Index extends Component
{
    public $events;

    public function mount()
    {
        $this->events = Event::where('status', 'active')->get();
    }

    public function registerForEvent($eventId)
    {
        // Fetch event details
        $event = Event::find($eventId);

        if (!$event) {
            session()->flash('error', 'Event not found.');
            return;
        }

        // Store event details in session for payment page
        Session::put('event_payment', [
            'id' => $event->id,
            'title' => $event->title,
            'price' => $event->price,
            'venue' => $event->venue,
        ]);

        return redirect()->route('payment');
    }

    public function render()
    {
        return view('livewire.user.events.index', [
            'events' => $this->events
        ]);
    }
}
