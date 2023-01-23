<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AjorSeeder::class);
        $this->call(DepartmentSeeder::class);

        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'Admin@1234',
            'is_admin' => true
        ]);
    }
}
