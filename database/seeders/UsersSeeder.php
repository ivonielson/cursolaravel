<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
          User::create([
            
            'firstName' => 'Ivonielson',
            'lastName' => 'Freitas',
            'email' => 'ivoshow@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
