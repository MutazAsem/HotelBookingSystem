<?php

namespace App\Livewire;

use App\Models\Hotel;
use App\Models\Room;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        
        return view('livewire.home-page',[
            'hotels' => Hotel::get(),
            'rooms' => Room::with('hotel')->latest()->take(6)->get(),
        ]);
    }
}
