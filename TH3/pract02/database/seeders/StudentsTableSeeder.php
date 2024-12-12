<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class StudentsTableSeeder extends Seeder
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
            DB::table('students')->insert([
                'id' => $index,
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'date_of_birth' => $faker->date(),
                'parent_phone' => $faker->phoneNumber(),
                'class_id' => $faker->randomNumber(1,9),
            ]);
        }
    }
}
