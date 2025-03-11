<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Event;

class AdminDashboard extends Component
{
    public $totalUsers;
    public $totalEvents;

    public function mount()
    {
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $this->totalUsers = User::count();
        $this->totalEvents = Event::count();
    }

    public function render()
    {
        return view('livewire.admin-dashboard');
    }
}
