<?php

namespace Database\Factories;

use App\Enums\RoomTypeEnum;
use App\Enums\StatusEnum;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotel_id' => Hotel::factory(),
            'room_number' => $this->faker->unique()->numberBetween(100, 500),
            'room_type' => $this->faker->randomElement([RoomTypeEnum::SINGLE->value, RoomTypeEnum::DOUBLE->value, RoomTypeEnum::SUITE->value]), 
            'price' => $this->faker->randomNumber(3),
            'status' => $this->faker->randomElement([StatusEnum::AVAILABLE->value, StatusEnum::BOOKED->value, StatusEnum::UNDER_MAINTENANCE->value]), // استخدام القيم الصحيحة
        ];
    }
}
