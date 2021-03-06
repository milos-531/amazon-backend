<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'Klark Kent',
            'email' => 'klark@dailyglobe.com',
            'password' => Hash::make('superman'),
        ],
        [
            'name' => 'Bruce Wayne',
            'email' => 'wayne@wayneent.com',
            'password' => Hash::make('batman'),
        ],
        [
            'name' => 'Tony Stark',
            'email' => 'tony@starkent.com',
            'password' => Hash::make('ironman'),
        ] ]);
    }
}
