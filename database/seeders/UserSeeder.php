<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $plainPassword = '123456789';

        DB::table('users')->insert([
            'name' => 'Admin Auditor',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make($plainPassword),
            'remember_token' => Str::random(10),
            'current_team_id' => null,
            'profile_photo_path' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'User Denunciante',
            'email' => 'userdenun@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make($plainPassword),
            'remember_token' => Str::random(10),
            'current_team_id' => null,
            'profile_photo_path' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
