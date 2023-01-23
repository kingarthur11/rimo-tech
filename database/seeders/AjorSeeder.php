<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Generator as Faker;

class AjorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i < 10; $i++) {

            DB::table('ajor')->insert([
                'id' => $i,
                'name' => $faker->name,
            ]);
        }
    }
}
