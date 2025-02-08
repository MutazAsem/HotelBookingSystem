<?php

namespace App\Livewire;

use App\Models\Reservation;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Invoice-Travosy')]
class ReportPage extends Component
{

    public $id;
    public function render()
    {
        $reservation = Reservation::with('room','client')->where('id',$this->id)->first();
        $checkIn = strtotime($reservation->check_in_date);
        $checkOut = strtotime($reservation->check_out_date);
        $duration = ($checkOut - $checkIn) / (60 * 60 * 24);
        return view('livewire.report-page',[
            'reservation' => $reservation,
            'duration' => $duration,
        ]);
    }
}
