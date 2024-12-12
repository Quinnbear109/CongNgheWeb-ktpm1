<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('medicines')->insert([
                'medicine_id' => $index,
                'name' => $faker->name,
                'brand' => $faker->word,
                'dosage' => $faker->randomElement(['10mg tablets', '20mg tablets', '50mg tablets']),
                'form' => $faker->randomElement(['vien nen', 'vien nang', 'xiro']),
                'price' => $faker->numberBetween(10, 20),
                'stock' => $faker->numberBetween(2, 8),
            ]);
        }
    }
}
