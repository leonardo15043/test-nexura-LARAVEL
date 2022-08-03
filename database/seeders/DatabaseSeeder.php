<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\EmployeeSeeder;
use Database\Seeders\EmployeeRolSeeder;
use Database\Seeders\AreasSeeder;
use Database\Seeders\RolSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AreasSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(EmployeeRolSeeder::class);
    }
}
