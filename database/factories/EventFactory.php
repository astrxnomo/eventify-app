<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\location;
use App\Models\Status;
use App\Models\User;
use App\Models\event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    protected $model=Event::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'status_id' => \App\Models\Status::factory(),
            'location_id' => \App\Models\Location::factory(),
            'category_id' => Category::factory(),
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'img_url' => $this->faker->imageUrl(),
            'capacity' => $this->faker->numberBetween(50, 500),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'start_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'end_date' => $this->faker->dateTimeBetween('+1 year', '+2 years'),
            'create_date' => now(),
        ];
    }
}
