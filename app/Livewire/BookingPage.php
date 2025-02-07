<?php

namespace App\Livewire;

use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

#[Title('Articles - Booking')]
class BookingPage extends Component
{
    use LivewireAlert;

    public $id;
    public $check_in_date;
    public $check_out_date;
    public $duration = 0;
    public $total_price = 0;

    public function updated($propertyName)
{
    if (in_array($propertyName, ['check_in_date', 'check_out_date'])) {
        $this->calculateDurationAndPrice();
    }
}

public function calculateDurationAndPrice()
{
    if (!empty($this->check_in_date) && !empty($this->check_out_date)) {
        $checkIn = strtotime($this->check_in_date);
        $checkOut = strtotime($this->check_out_date);

        if ($checkOut > $checkIn) {
            $this->duration = ($checkOut - $checkIn) / (60 * 60 * 24);
        } else {
            $this->duration = 0;
        }

        $room = Room::find($this->id);
        $this->total_price = $room ? $room->price * $this->duration : 0;
    } else {
        $this->duration = 0;
        $this->total_price = 0;
    }
}

public function createBooking()
{
    // التحقق من أن التواريخ محددة
    if (!$this->check_in_date || !$this->check_out_date) {
        $this->alert('warning', 'Please select your Check in and Check out date.', [
            'position' => 'center',
            // 'toast' => true,
        ]);
        return;
    }

    // التحقق من أن تاريخ المغادرة بعد تاريخ الدخول
    if (strtotime($this->check_out_date) <= strtotime($this->check_in_date)) {
        $this->alert('warning', 'Check out date must be after Check in date', [
            'position' => 'center'
        ]);
        return;
    }

    // التحقق مما إذا كانت الغرفة محجوزة في هذه التواريخ
    $isBooked = Reservation::where('room_id', $this->id)
        ->where(function ($query) {
            $query->whereBetween('check_in_date', [$this->check_in_date, $this->check_out_date])
                ->orWhereBetween('check_out_date', [$this->check_in_date, $this->check_out_date]);
        })
        ->exists();

    if ($isBooked) {
        $this->alert('warning', 'This room is already booked for the specified dates', [
            'position' => 'center'
        ]);
        return;
    }

    $reservation = new Reservation();
    $reservation->client_id = 1;
    $reservation->room_id = $this->id;
    $reservation->check_in_date = $this->check_in_date;
    $reservation->check_out_date = $this->check_out_date;
    $reservation->total_price = $this->total_price;

    if($reservation->save()){

        $this->alert('success', 'The room has been booked successfully', [
            'position' => 'center',
            'timer' => 3000,
        ]);

        return redirect()->route('report', ['id' => $reservation->id]);

    }

    $this->alert('error', 'Failed to save', [
        'position' => 'center',
        'timer' => 3000,
    ]);
    return;
}



    public function render()
    {
        $room = Room::where('id',$this->id)->with('hotel')->firstOrFail();
        // $user=Auth::user();
        $user_id=1;
        $user=User::where('id',$user_id)->first();

        return view('livewire.booking-page',[
            'room' => $room,
            'user' => $user,
            'duration' => $this->duration,
            'total_price' => $this->total_price,
        ]);
    }
}
