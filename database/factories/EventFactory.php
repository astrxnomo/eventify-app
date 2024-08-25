<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;


class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        static $location_id = 1;

        // Descargar imagen aleatoria
        $client = new Client();
        $response = $client->get('https://picsum.photos/800/600');
        $imageContent = $response->getBody()->getContents();
        $imageName = 'events/' . uniqid() . '.jpg';
        Storage::disk('public')->put($imageName, $imageContent);

        return [
            'name' => $this->faker->sentence,
            'description' => implode(' ', $this->faker->paragraphs(15)),
            'img_url' => $imageName,
            'capacity' => $this->faker->numberBetween(10, 100),
            'price' => $this->faker->randomFloat(2, 10000, 100000),
            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'location_id' => $location_id++,
            'start_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'end_date' => $this->faker->dateTimeBetween('+1 year', '+2 years'),
            //'create_date' => now(),
        ];
    }
}
