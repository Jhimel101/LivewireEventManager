<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;

class UserEvent extends Component
{
    public $events; // Variable to store events

    public function mount()
    {
        // Fetch only active events
        $this->events = Event::where('status', 'active')->orWhereNull('status')->get();
    }

    public function render()
    {
        return view('livewire.user-event', ['events' => $this->events]);
    }
}
