<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Lucas César Soares Santos',
            'username' => 'lcsantos23',
            'email' => 'lucas@dev.com',
            'email_verified_at' => now(),
            'cpf' => '17804597770',
            'avatar' => '/images/avatars_images/lucas-cesar-soares-santos.png',
            'phone'=> '27998583004',
            'remember_token' => Str::random(60),
            'is_active' => true,
            'role' => 'admin',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Natalia de Freitas Rabbi',
            'username' => 'nataliarabbi',
            'email' => 'ndfrabbi@gmail.com',
            'email_verified_at' => now(),
            'cpf' => '55793282776',
            'avatar' => '/images/avatars_images/natalia-de-freitas-rabbi.png',
            'phone'=> '27992922094',
            'is_active' => true,
            'remember_token' => Str::random(60),
            'role' => 'user',
            'password' => bcrypt('123456'),
        ]);
    }
}
