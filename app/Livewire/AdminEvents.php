<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Event;

class AdminEvents extends Component
{
    use WithPagination;

    public $title, $date, $venue, $price, $eventId;
    public $isEditing = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'date' => 'required|date',
        'price' => 'required|numeric|min:0',
    ];

    public function createEvent()
    {
        $this->validate();

        Event::create([
            'title' => $this->title,
            'date' => $this->date,
            'venue' => $this->venue,
            'price' => $this->price,
        ]);

        session()->flash('message', 'Event created successfully!');
        $this->resetFields();
    }

    public function editEvent($id)
    {
        $event = Event::findOrFail($id);
        $this->eventId = $event->id;
        $this->title = $event->title;
        $this->date = $event->date;
        $this->price = $event->price;
        $this->venue = $event->venue;
        $this->isEditing = true;
    }

    public function updateEvent()
    {
        $this->validate();

        Event::where('id', $this->eventId)->update([
            'title' => $this->title,
            'date' => $this->date,
            'price' => $this->price,
            'venue' => $this->venue,
        ]);

        session()->flash('message', 'Event updated successfully!');
        $this->resetFields();
    }

    public function deleteEvent($id)
    {
        Event::findOrFail($id)->delete();
        session()->flash('message', 'Event deleted successfully!');
    }

    public function resetFields()
    {
        $this->title = '';
        $this->date = '';
        $this->price = '';
        $this->venue = '';
        $this->eventId = null;
        $this->isEditing = false;
    }

    public function render()
    {
        return view('livewire.admin-events', [
            'events' => Event::latest()->paginate(5)
        ]);
    }
}
