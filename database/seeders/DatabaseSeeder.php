<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Adam Hundley',
            'email' => 'adamhundley@gmail.com',
            'email_verified_at' => now(),
            'password' => '123',
            'last_logout' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
