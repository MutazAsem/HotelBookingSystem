<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Articles - Booking')]
class BookingPage extends Component
{
    public $id;

    public function mount($id){
        $this->id = $id;
    }

    public function render()
    {
        return view('livewire.booking-page');
    }
}
