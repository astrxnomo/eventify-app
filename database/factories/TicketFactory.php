<?php

namespace Database\Factories;

use App\Models\ticket;
use App\Models\User;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    protected $model = ticket::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'qr_url' =>$this->faker->url(),
            'user_id' => User::inRandomOrder()->first()->id,
            'event_id' => Event::inRandomOrder()->first()->id,
            
            
            'create_date' => now(),
        ];
    }
}