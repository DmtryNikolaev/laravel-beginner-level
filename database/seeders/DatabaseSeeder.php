<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\Application;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Application::factory(300)->create();
        $user = User::create(['name' => 'user', 'email' => 'user@mail.ru', 'password' => Hash::make('12345') ]);
        $user->createToken('api_token')->plainTextToken;

        AdminUser::factory(1)->create([
            "name" => "Admin",
            "email" => "laravel@laravel.com",
            "password" => "12345",
        ]);
    }
}