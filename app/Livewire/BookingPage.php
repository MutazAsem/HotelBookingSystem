<?php

namespace App\Livewire;

use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Articles - Booking')]
class BookingPage extends Component
{
    public $id;



    public function render()
    {
        $room = Room::where('id',$this->id)->with('hotel')->firstOrFail();
        // $user_id=Auth::user();
        // $user=User::where('id',$user_id)->first();

        return view('livewire.booking-page',[
            // 'room' => $room,
            // 'user' => $user,
        ]);
    }
}
