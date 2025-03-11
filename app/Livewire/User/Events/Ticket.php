<?php

namespace App\Livewire\User\Events;

use Livewire\Component;
use App\Models\EventRegistration;

class Ticket extends Component
{
    public $registration;

    public function mount($transactionId)
    {
        $this->registration = EventRegistration::where('transaction_id', $transactionId)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.user.events.ticket', ['registration' => $this->registration]);
    }
}
