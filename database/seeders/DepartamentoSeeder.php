<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departamentos=['finanzas','Recursos Humanos','Sistemas','Presupuesto'];

        foreach ($departamentos as $departamento) {
            DB::table('departamentos')->insert([
                'nombre_departamento','estado' => $departamento,'Activo'
                
            ]);
        }
    }
}
