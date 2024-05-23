<?php

namespace Database\Factories;

use App\Models\ticket;
use App\Models\User;
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
            'user_id' => \App\Models\User::factory(),
            'event_id' => \App\Models\Event::factory(),
            'name' => $this->faker->word(),
            'qr_url' => $this->faker->url(),
            'create_date' => now()
        ];
    }
}
