<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class ComputersTableSeeder extends Seeder
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
            DB::table('computers')->insert([
                'id' => $index,
                'computer_name' => $faker->name(),
                'model' => $faker->lastName(),
                'operating_system' => $faker->words(3),
                'processor' => $faker->words(4),
                'memory' => $faker->randomNumber([4, 8 , 16]),
                'available' => $faker->boolean(),
            ]);
        }
    }
}