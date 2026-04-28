<?php

namespace Database\Factories;

use App\Models\Yzz;
use App\Models\Locations;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Yzz>
 */
class YzzFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>fake()->name(),
            "bio"=>fake()->realText(500),
            "skill"=>fake()->numberBetween(0,100),
            "locations_id"=> Locations::inRandomOrder()->first()->id,
        ];
    }
}
