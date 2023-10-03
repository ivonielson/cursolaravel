<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //aqui podemos usar a seed com os dados predefinidos
        // $this->call([
        //     UsersSeeder::class,
        // ]);

        //      DB::table('users')->insert([
        //     'firstName' => Str::random(10),
        //     'lastName' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
       
//popula a tabela com dados fake
//User::factory()->count(10000)->create();
   //Chamando a seeder categoria         
  // $this->call(CategoriasSeeder::class);    
     //Chamando a seeder produto         
   $this->call(ProdutosSeeder::class);   
    }
}
