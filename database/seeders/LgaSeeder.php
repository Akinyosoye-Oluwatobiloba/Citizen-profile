<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LgaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // • LGAs: id, name, state id, {timestamp}
    public function run(): void
    {
        DB::table('lga')->insert([
            'id' => rand(),
            'name' => Str::random(10),
            'state_id' => rand(),
        ]);
    }
}
