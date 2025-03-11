<?php

namespace App\Livewire\Admin\Events;

use Livewire\Component;
use App\Models\Event;

class Create extends Component
{
    public $title, $description, $date, $price, $venue;

    public function saveEvent()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'price' => 'required|numeric|min:0',
        ]);

        Event::create([
            'title' => $this->title,
            'description' => $this->description,
            'venue' => $this->venue,
            'date' => $this->date,
            'price' => $this->price,
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Event created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.events.create');
    }
}
