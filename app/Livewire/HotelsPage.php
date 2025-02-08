<?php

namespace App\Livewire;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Hotels-Travosy')]
class HotelsPage extends Component
{
    public function render()
    {
        return view('livewire.hotels-page',[
            'hotels' => Hotel::get(),
        ]);
    }
}
