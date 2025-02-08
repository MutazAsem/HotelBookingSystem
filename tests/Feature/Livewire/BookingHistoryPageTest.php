<?php

namespace Tests\Feature\Livewire;

use App\Models\User;
use App\Models\Reservation;
use Livewire\Livewire;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class BookingHistoryPageTest extends TestCase
{
    public function testBookingHistoryPageRendersCorrectly()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $reservation = Reservation::factory()->create([
            'client_id' => $user->id,
        ]);

        $component = Livewire::test('App\Livewire\BookingHistoryPage')
            ->assertSee($user->name)
            ->assertSee($reservation->room->name)
            ->assertSee($reservation->created_at->format('Y-m-d')); 
    }
}
