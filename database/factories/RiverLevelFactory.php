<?php

namespace Database\Factories;

use App\Models\RiverLevel;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RiverLevel>
 */
class RiverLevelFactory extends Factory
{

    protected $model = \App\Models\RiverLevel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'river_status' => 'Normal',
            'river_level' => $this->faker->numberBetween(10, 25),
            'year' => now()->subYear($this->faker->numberBetween(0, 2))->year,
            'month' => now()->subMonth($this->faker->numberBetween(1, 8))->format('F'),
            'day' => now()->subDay($this->faker->numberBetween(1, 30))->day,
            'time' => now()->format('g:i a'),
            'date' => now()->format('Y-m-d'),
        ];
    }
}
