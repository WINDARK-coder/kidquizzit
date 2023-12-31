<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Denis",
            'surname' => "Guzilov",
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'type' => 'admin',
            'password' => '$2y$10$GpuAjIpZBZVMO0OgUqt9feW0XT2JJp8euh3mp1QbNDp12mEWglgHO', // 123123
            'remember_token' => Str::random(10),
        ]);
    }
}
