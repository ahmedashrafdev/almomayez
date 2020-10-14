<?php

namespace Database\Seeders;

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
        $this->call([

            UserSeeder::class,
            TestemonialSeeder::class,
            ServiceSeeder::class,
            DoctorSeeder::class,
            PositionSeeder::class,
            SliderSeeder::class,
            DepartmentSeeder::class,
            TestemonialSeeder::class,
        ]);
    }
}
