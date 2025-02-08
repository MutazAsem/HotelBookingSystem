<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Profile-Travosy')]
class ProfilePage extends Component
{
   
    public function render()
    {
        $user=Auth::user();
        return view('livewire.profile-page',[
            'user' => $user,
        ]);
    }
}
