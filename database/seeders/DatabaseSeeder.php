<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\category;
use App\Models\location;
use App\Models\Status;
use App\Models\event;
use App\Models\ticket;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {

        // Llamar al seeder de roles
        $this->call(RolesTableSeeder::class);

        // Crear 3 usuarios
        $users = User::factory(3)->create();
        Log::info('Usuarios creados:', $users->toArray());

        // Crear 5 categorías
        $categories = Category::factory(5)->create();
        Log::info('Categorías creadas:', $categories->toArray());

        // Crear 5 estados (status)
        $status = Status::factory(5)->create();
        Log::info('Status creados:', $status->toArray());

        // Crear 5 ubicaciones (locations)
        $locations = Location::factory(5)->create();
        Log::info('Ubicaciones creadas:', $locations->toArray());

        // Crear 10 eventos y asignarles usuarios, categorías, estados y ubicaciones aleatorios
        $events = Event::factory(10)->make()->each(function ($event) use ($users, $categories, $status, $locations) {
            $event->user_id = $users->random()->id;
            $event->category_id = $categories->random()->id;
            $event->status_id = $status->random()->id;
            $event->location_id = $locations->random()->id;

            $event->save();
        });
        Log::info('Eventos creados:', $events->toArray());

        // Crear 2 tickets relacionados con eventos aleatorios
        $tickets = Ticket::factory(2)->make()->each(function ($ticket) use ($users, $events) {
            $ticket->user_id = $users->random()->id;
            $ticket->event_id = $events->random()->id;

            Log::info('Ticket Data Before Save:', $ticket->toArray());

            $ticket->save();
        });
        Log::info('Tickets creados:', $tickets->toArray());
    }







    }

