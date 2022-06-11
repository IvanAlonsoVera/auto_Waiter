<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'name' => 'admin',
            'rango' => "admin",
            'email' => 'admin@autowaiter.es',
            'password' => Hash::make('admin'),
        ]);
        DB::table("users")->insert([
            'name' => 'pepe',
            'rango' => "user",
            'email' => 'pepe@autowaiter.es',
            'password' => Hash::make('pepe'),
        ]);
    }
}
