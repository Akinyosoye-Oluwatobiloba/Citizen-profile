<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // • Citizens: – id, full name, gender, address, phone, ward id, {timestamp}
    public function run(): void
    {
        DB::table('wards')->insert([
            'id' => rand(1),
            'fullname' => Str::random(10),
            'gender' => Str::random(10),
            'address' => Str::random(10),
            'phone' => rand(10),
            'ward_id' => rand(1),
        ]);
    }
}
