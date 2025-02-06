<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Articles - Rooms')]

class RoomsPage extends Component
{
    public function render()
    {
        return view('livewire.rooms-page');
    }
}
