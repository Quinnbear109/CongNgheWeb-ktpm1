<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class SalesTableSeeder extends Seeder
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
            DB::table('sales')->insert([
                'sale_id' => $index,
                'medicine_id' => $faker->randomNumber(1,9),
                'quantity' => $faker->numberBetween(2, 8),
                'sale_date' => $faker->dateTime,
                'customer_phone' => $faker->phoneNumber(),
            ]);
        }
    }
}
