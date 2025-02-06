<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::create([
            'hotel_id'    => 3,
            'room_number' => 101,
            'room_type'   => 'Single',
            'price'       => 520,
            'image'       => 'image/room/101room.jpg',
            'status'      => 'Available',
        ]);

        Room::create([
            'hotel_id'    => 7,
            'room_number' => 102,
            'room_type'   => 'Double',
            'price'       => 530,
            'image'       => 'image/room/102room.jpg',
            'status'      => 'Booked',
        ]);

        Room::create([
            'hotel_id'    => 1,
            'room_number' => 103,
            'room_type'   => 'Suite',
            'price'       => 540,
            'image'       => 'image/room/103room.jpg',
            'status'      => 'Under Maintenance',
        ]);

        Room::create([
            'hotel_id'    => 4,
            'room_number' => 104,
            'room_type'   => 'Single',
            'price'       => 550,
            'image'       => 'image/room/104room.jpg',
            'status'      => 'Available',
        ]);

        Room::create([
            'hotel_id'    => 9,
            'room_number' => 105,
            'room_type'   => 'Double',
            'price'       => 560,
            'image'       => 'image/room/105room.jpg',
            'status'      => 'Booked',
        ]);

        Room::create([
            'hotel_id'    => 2,
            'room_number' => 106,
            'room_type'   => 'Suite',
            'price'       => 570,
            'image'       => 'image/room/106room.jpg',
            'status'      => 'Available',
        ]);

        Room::create([
            'hotel_id'    => 5,
            'room_number' => 107,
            'room_type'   => 'Single',
            'price'       => 580,
            'image'       => 'image/room/107room.jpg',
            'status'      => 'Under Maintenance',
        ]);

        Room::create([
            'hotel_id'    => 8,
            'room_number' => 108,
            'room_type'   => 'Double',
            'price'       => 590,
            'image'       => 'image/room/108room.jpg',
            'status'      => 'Available',
        ]);

        Room::create([
            'hotel_id'    => 6,
            'room_number' => 109,
            'room_type'   => 'Suite',
            'price'       => 600,
            'image'       => 'image/room/109room.jpg',
            'status'      => 'Booked',
        ]);

        Room::create([
            'hotel_id'    => 10,
            'room_number' => 110,
            'room_type'   => 'Single',
            'price'       => 610,
            'image'       => 'image/room/110room.jpg',
            'status'      => 'Under Maintenance',
        ]);

        Room::create([
            'hotel_id'    => 2,
            'room_number' => 111,
            'room_type'   => 'Double',
            'price'       => 620,
            'image'       => 'image/room/111room.jpg',
            'status'      => 'Available',
        ]);

        Room::create([
            'hotel_id'    => 7,
            'room_number' => 112,
            'room_type'   => 'Suite',
            'price'       => 630,
            'image'       => 'image/room/112room.jpg',
            'status'      => 'Booked',
        ]);

        Room::create([
            'hotel_id'    => 5,
            'room_number' => 113,
            'room_type'   => 'Single',
            'price'       => 640,
            'image'       => 'image/room/113room.jpg',
            'status'      => 'Available',
        ]);

        Room::create([
            'hotel_id'    => 3,
            'room_number' => 114,
            'room_type'   => 'Double',
            'price'       => 650,
            'image'       => 'image/room/114room.jpg',
            'status'      => 'Under Maintenance',
        ]);

        Room::create([
            'hotel_id'    => 8,
            'room_number' => 115,
            'room_type'   => 'Suite',
            'price'       => 660,
            'image'       => 'image/room/115room.jpg',
            'status'      => 'Available',
        ]);

        Room::create([
            'hotel_id'    => 4,
            'room_number' => 116,
            'room_type'   => 'Single',
            'price'       => 670,
            'image'       => 'image/room/116room.jpg',
            'status'      => 'Booked',
        ]);

        Room::create([
            'hotel_id'    => 9,
            'room_number' => 117,
            'room_type'   => 'Double',
            'price'       => 680,
            'image'       => 'image/room/117room.jpg',
            'status'      => 'Available',
        ]);

        Room::create([
            'hotel_id'    => 1,
            'room_number' => 118,
            'room_type'   => 'Suite',
            'price'       => 690,
            'image'       => 'image/room/118room.jpg',
            'status'      => 'Under Maintenance',
        ]);

        Room::create([
            'hotel_id'    => 6,
            'room_number' => 119,
            'room_type'   => 'Single',
            'price'       => 700,
            'image'       => 'image/room/119room.jpg',
            'status'      => 'Available',
        ]);

        Room::create([
            'hotel_id'    => 10,
            'room_number' => 120,
            'room_type'   => 'Double',
            'price'       => 710,
            'image'       => 'image/room/120room.jpg',
            'status'      => 'Booked',
        ]);
    }
}
