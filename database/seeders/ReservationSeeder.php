<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'client_id'      => 1, 
            'room_id'        => 2,
            'check_in_date'  => '2025-03-01',
            'check_out_date' => '2025-03-05',
            'total_price'    => 620,
        ]);

        Reservation::create([
            'client_id'      => 2,
            'room_id'        => 3,
            'check_in_date'  => '2025-04-10',
            'check_out_date' => '2025-04-15',
            'total_price'    => 700,
        ]);

        Reservation::create([
            'client_id'      => 1,
            'room_id'        => 5,
            'check_in_date'  => '2025-05-20',
            'check_out_date' => '2025-05-25',
            'total_price'    => 800,
        ]);

        Reservation::create([
            'client_id'      => 2,
            'room_id'        => 7,
            'check_in_date'  => '2025-06-05',
            'check_out_date' => '2025-06-10',
            'total_price'    => 900,
        ]);

        Reservation::create([
            'client_id'      => 1,
            'room_id'        => 10,
            'check_in_date'  => '2025-07-01',
            'check_out_date' => '2025-07-06',
            'total_price'    => 1000,
        ]);

        Reservation::create([
            'client_id'      => 2,
            'room_id'        => 12,
            'check_in_date'  => '2025-08-15',
            'check_out_date' => '2025-08-20',
            'total_price'    => 1100,
        ]);

        Reservation::create([
            'client_id'      => 1,
            'room_id'        => 15,
            'check_in_date'  => '2025-09-05',
            'check_out_date' => '2025-09-10',
            'total_price'    => 1200,
        ]);

        Reservation::create([
            'client_id'      => 2,
            'room_id'        => 18,
            'check_in_date'  => '2025-10-10',
            'check_out_date' => '2025-10-15',
            'total_price'    => 1300,
        ]);

        Reservation::create([
            'client_id'      => 1,
            'room_id'        => 19,
            'check_in_date'  => '2025-11-20',
            'check_out_date' => '2025-11-25',
            'total_price'    => 1400,
        ]);

        Reservation::create([
            'client_id'      => 2,
            'room_id'        => 20,
            'check_in_date'  => '2025-12-01',
            'check_out_date' => '2025-12-05',
            'total_price'    => 1500,
        ]);
    }
}
