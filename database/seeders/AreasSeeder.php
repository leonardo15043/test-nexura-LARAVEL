<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(
            [
                ['name' => 'Administrativa y Financiera'],
                ['name' => 'Ingeniería'],
                ['name' => 'Desarrollo de Negocio'],
                ['name' => 'Proyectos'],
                ['name' => 'Servicios'],
                ['name' => 'Calidad']
            ]
        );
    }
}
