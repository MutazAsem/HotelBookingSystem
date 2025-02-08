<?php

namespace App\Livewire\Layouts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function logout (){
        Auth::logout();
        return redirect()->route('login');
    }
    
    public function render()
    {
        $user = Auth::user();
        return view('livewire.layouts.navbar',[
            'user' => $user,
        ]);
    }
}
