<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(5)->create();
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'asd@admin.com',
            'password' => Hash::make('admin'),
            'role' => 'user',
            'created_at' => now(), 
             'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
