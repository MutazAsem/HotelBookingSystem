<?php

namespace App\Livewire;

use App\Models\Hotel;
use App\Models\Room;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Articles - Rooms')]


class RoomsPage extends Component
{
    use WithPagination;

    public $search = '';
    public $hotel = '';
    public $roomType = '';
    public $minPrice = '';
    public $maxPrice = '';
    public $availability = '';

    protected $queryString = [
        'search'     => ['except' => ''],
        'hotel'      => ['except' => ''],
        'roomType'   => ['except' => ''],
        'minPrice'   => ['except' => ''],
        'maxPrice'   => ['except' => ''],
        'availability' => ['except' => ''],
    ];

    public function updating($property)
    {
        $this->resetPage();
    }



    public function render()
    {
        $query = Room::query()->with('hotel');


        if ($this->search) {
            $query->where(function ($q) {
                $q->where('room_number', 'like', '%' . $this->search . '%')
                    ->orWhere('room_type', 'like', '%' . $this->search . '%')
                    ->orWhere('price', 'like', '%' . $this->search . '%')
                    ->orWhere('status', 'like', '%' . $this->search . '%');

                $q->orWhereHas('hotel', function ($q2) {
                    $q2->where('hotels.name', 'like', '%' . $this->search . '%')
                        ->orWhere('hotels.location', 'like', '%' . $this->search . '%');
                });
            });
        }


        if ($this->roomType) {
            $query->where('room_type', $this->roomType);
        }

        if ($this->minPrice !== '' && $this->minPrice !== null) {
            $query->where('price', '>=', $this->minPrice);
        }
        if ($this->maxPrice !== '' && $this->maxPrice !== null) {
            $query->where('price', '<=', $this->maxPrice);
        }

        if ($this->availability) {
            $query->where('status', $this->availability);
        }

        $rooms = $query->paginate(12);

        return view('livewire.rooms-page', [
            'rooms' => $rooms,
            'hotels' => Hotel::get(),
        ]);
    }
}
