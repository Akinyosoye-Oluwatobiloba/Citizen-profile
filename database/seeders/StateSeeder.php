<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     // • States: id, name, {timestamp}
    public function run(): void
    {
        DB::table('state')->insert([
            'id' => rand(),
            'name' => Str::random(10),

        ]);
    }
}
