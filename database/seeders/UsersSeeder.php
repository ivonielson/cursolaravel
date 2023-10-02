<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::created([
            'firstName' => 'Ivonielson',  
            'lastName' => 'Freitas',  
            'email' => 'ivoshow@gmail.com',  
            'passwords' => bcrypt('12345678'), 
          ]);
    }
}
