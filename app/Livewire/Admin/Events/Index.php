<?php

namespace App\Livewire\Admin\Events;

use Livewire\Component;
use App\Models\Event;

class Index extends Component
{
    public function deleteEvent($eventId)
    {
        Event::findOrFail($eventId)->delete();
    }

    public function render()
    {
        return view('livewire.admin.events.index', [
            'events' => Event::all()
        ]);
    }
}
