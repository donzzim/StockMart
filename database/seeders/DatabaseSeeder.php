<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Lucas',
            'email' => 'lucas@dev.com',
            'cpf' => '17804597770',
            'phone'=> '27998583004',
            'is_active' => true,
            'role' => 'admin',
            'password' => bcrypt('123456'),
        ]);
    }
}
