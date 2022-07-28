<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Category::factory()->create([
            'name' => 'Business',
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Acedemic',
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Entertainment',
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Sport',
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Concerts',
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Community',
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Art',
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Conference',
        ]);
    }
}
