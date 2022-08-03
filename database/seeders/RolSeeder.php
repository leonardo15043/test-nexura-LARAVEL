<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                ['name' => 'Desarrollador'],
                ['name' => 'Analista'],
                ['name' => 'Tester'],
                ['name' => 'Diseñador'],
                ['name' => 'Profesional PMO'],
                ['name' => 'Profesional de servicios'],
                ['name' => 'Auxiliar administrativo'],
                ['name' => 'Codirector']
            ]
        );
    }
}
