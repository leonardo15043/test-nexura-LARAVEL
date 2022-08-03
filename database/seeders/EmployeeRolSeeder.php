<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class EmployeeRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_rols')->insert(
            [
                [
                    'empleado_id' => 3,
                    'rol_id' => 4
                ],[
                    'empleado_id' => 3,
                    'rol_id' => 7
                ],[
                    'empleado_id' => 3,
                    'rol_id' => 2
                ],[
                    'empleado_id' => 4,
                    'rol_id' => 1
                ],[
                    'empleado_id' => 4,
                    'rol_id' => 2
                ]
            ]
        );
    }
}
