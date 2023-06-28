<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\viewPlan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RentPost>
 */
class RentPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'property_id'=>Property::factory(),
        'view_plan_id'=>viewPlan::factory(),
        'monthly_rent'=>$this->faker->randomNumber(),
        'duration'=>$this->faker->randomDigitNot(0),
        'visibility'=>$this->faker->boolean
        ];
    }
}