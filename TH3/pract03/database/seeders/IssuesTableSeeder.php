<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class IssuesTableSeeder extends Seeder
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
                'computer_id' => $faker->numberBetween(1, 10),
                'reported_by' => $faker->lastName(),
                'reported_date' => $faker->dateTime(),
                'description' => $faker->text(),
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']),
                'status' => $faker->randomElement(['Open', 'In progress', 'Resolved']),
            ]);
        }
    }
}
