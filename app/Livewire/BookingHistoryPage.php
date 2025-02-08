<?php

namespace App\Livewire;

use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Booking History-Travosy')]
class BookingHistoryPage extends Component
{
    public function render()
    {
        $user=Auth::user();
        $reservation = Reservation::where('client_id',$user->id)->with('room')->get();
        return view('livewire.booking-history-page',[
            'user' => $user,
            'reservation' => $reservation,
        ]);
    }
}
