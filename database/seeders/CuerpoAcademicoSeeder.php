<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuerpoAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cuerpo_academicos')->insert([
            [
                'claveCA' => 'UV-CA-184',
                'nombreCA' => 'Tecnología Computacional y Educativa',
                
            ],
            [
                'claveCA' => 'UVCA107',
                'nombreCA' => 'Metodología y Aplicaciones de las Técnicas y Modelos Estadísticos',
                
            ],
            [
                'claveCA' => 'UV-CA-127',
                'nombreCA' => 'Ingenieria y Tecnología de Software',
                
            ],[
                'claveCA' => 'CA-424',
                'nombreCA' => 'Didáctica y Aplicaciones de la Matemática',
                
            ],
        ]);
    }
}
