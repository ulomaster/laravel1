<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ardana Agustyo Putra',
            'email' => 'ardanaputra913@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Bapak budi',
            'email' => 'budika913@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Ibu budi',
            'email' => 'budika_ibu913@gmail.com',
        ]);
    }
}
