<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'name' => 'Pedro Pérez',
                'email' => 'pperez@example.co',
                'sex' => 'M',
                'bulletin' => 1,
                'area_id' => 3,
                'description' => 'Hola mundo',
            ],[
                'name' => 'Amalia Bayona',
                'email' => 'abayona@example.co',
                'sex' => 'F',
                'bulletin' => 0,
                'area_id' => 6,
                'description' => 'Para contactar a Amalia Bayona, puede escribir al correo electrónico abayona@example.co',
            ]
        ]);
    }
}
