<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hotel::create([
            'name'            => 'Stars',
            'location'        => 'Sanaa, Yemen',
            'description'     => '5 stars hotel',
            'number_of_rooms' => 10,
            'image'           => 'image/hotel/starshotel.jpg',
            'email'           => 'stars@admin.com',
            'phone'          => '774370569',
        ]);
    
        Hotel::create([
            'name'            => 'Royal Palace',
            'location'        => 'Dubai, UAE',
            'description'     => 'Luxury hotel with royal treatment',
            'number_of_rooms' => 20,
            'image'           => 'image/hotel/Royalhotel.jpg',
            'email'           => 'royalpalace@admin.com',
            'phone'          => '971501234567',
        ]);
    
        Hotel::create([
            'name'            => 'Ocean View Resort',
            'location'        => 'Miami, USA',
            'description'     => 'Resort with stunning ocean view',
            'number_of_rooms' => 30,
            'image'           => 'image/hotel/Oceanhotel.jpg',
            'email'           => 'oceanview@admin.com',
            'phone'          => '17871234567',
        ]);
    
        Hotel::create([
            'name'            => 'Grand Heritage',
            'location'        => 'London, UK',
            'description'     => 'Historic hotel with modern amenities',
            'number_of_rooms' => 25,
            'image'           => 'image/hotel/Grandhotel.jpg',
            'email'           => 'grandheritage@admin.com',
            'phone'          => '447123456789',
        ]);
    
        Hotel::create([
            'name'            => 'Desert Oasis',
            'location'        => 'Riyadh, Saudi Arabia',
            'description'     => 'An oasis of luxury in the desert',
            'number_of_rooms' => 15,
            'image'           => 'image/hotel/Deserthotel.jpg',
            'email'           => 'desertoasis@admin.com',
            'phone'          => '966501234567',
        ]);
    
        Hotel::create([
            'name'            => 'City Lights Hotel',
            'location'        => 'New York, USA',
            'description'     => 'Hotel in the heart of the city with dazzling lights',
            'number_of_rooms' => 35,
            'image'           => 'image/hotel/Cityhotel.jpg',
            'email'           => 'citylights@admin.com',
            'phone'          => '12125551234',
        ]);
    
        Hotel::create([
            'name'            => 'Mountain Retreat',
            'location'        => 'Geneva, Switzerland',
            'description'     => 'A peaceful retreat in the mountains',
            'number_of_rooms' => 12,
            'image'           => 'image/hotel/Mountainhotel.jpg',
            'email'           => 'mountainretreat@admin.com',
            'phone'          => '41234567890',
        ]);
    
        Hotel::create([
            'name'            => 'Lakeside Inn',
            'location'        => 'Zurich, Switzerland',
            'description'     => 'Cozy inn by the lakeside',
            'number_of_rooms' => 8,
            'image'           => 'image/hotel/Lakesidehotel.jpg',
            'email'           => 'lakesideinn@admin.com',
            'phone'          => '41234567891',
        ]);
    
        Hotel::create([
            'name'            => 'Sunset Paradise',
            'location'        => 'Santorini, Greece',
            'description'     => 'Enjoy breathtaking sunsets at our hotel',
            'number_of_rooms' => 18,
            'image'           => 'image/hotel/Sunsethotel.jpg',
            'email'           => 'sunsetparadise@admin.com',
            'phone'          => '302123456789',
        ]);
    
        Hotel::create([
            'name'            => 'Urban Chic',
            'location'        => 'Paris, France',
            'description'     => 'Modern hotel with chic urban design',
            'number_of_rooms' => 22,
            'image'           => 'image/hotel/Urbanhotel.jpg',
            'email'           => 'urbanchic@admin.com',
            'phone'          => '33123456789',
        ]);
    }
}
