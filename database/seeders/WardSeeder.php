<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   // • Wards: id, name, lga id, {timestamp}
    public function run(): void
    {
        DB::table('wards')->insert([
            'id' => rand(1),
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'lga_id' => rand(1),
            'password' => Hash::make('password'),
        ]);
    }
}
