<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Generator as Faker;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i < 10; $i++) {

            DB::table('department')->insert([
                'id' => $i,
                'name' => $faker->name,
            ]);
        }
    }
}
