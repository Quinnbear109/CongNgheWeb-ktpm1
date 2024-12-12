<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class ClassesTableSeeder extends Seeder
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
            DB::table('classes')->insert([
                'id' => $index,
                'grade_level' => $faker->randomElement(['PreK', 'Kindergarten']),
                'room_number' => $faker->randomElement(['VH6', 'VH7', 'VH8', 'VH9']),
            ]);
        }
    }
}
