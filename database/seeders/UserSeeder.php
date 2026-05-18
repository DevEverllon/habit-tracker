<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'Adimin',
            'email' => 'Adimin@gmail.com',
            'password' => '12345678',
        ]);
    }
}
