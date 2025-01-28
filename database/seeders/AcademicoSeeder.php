<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan migrate:fresh --seed --seeder=AcademicoSeeder
     */
    public function run(): void
    {
        DB::table('academicos')->insert([
            [
                'noPersonal' => '15438',
                'nombre' => 'ABRAHAM',
                'apellidoPaterno' => 'CUESTA',
                'apellidoMaterno' => 'BORGES',
                'email' => 'acuesta@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '36881',
                'nombre' => 'ADRIANA',
                'apellidoPaterno' => 'CERVANTES',
                'apellidoMaterno' => 'CASTILLO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '34331',
                'nombre' => 'ALBERTO JAIR',
                'apellidoPaterno' => 'CRUZ',
                'apellidoMaterno' => 'LANDA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '26605',
                'nombre' => 'ALFONSO',
                'apellidoPaterno' => 'SÁNCHEZ',
                'apellidoMaterno' => 'OREA',
                'email' => 'alsanchez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '55568',
                'nombre' => 'ALICIA YAZMIN',
                'apellidoPaterno' => 'ROJAS',
                'apellidoMaterno' => 'LUNA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '57260',
                'nombre' => 'ALMA ROSA',
                'apellidoPaterno' => 'CORDOVA',
                'apellidoMaterno' => 'AGUILAR',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '36439',
                'nombre' => 'ANA LUZ',
                'apellidoPaterno' => 'POLO',
                'apellidoMaterno' => 'ESTRELLA',
                'email' => 'apolo@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '33092',
                'nombre' => 'ANABELL YENELLY',
                'apellidoPaterno' => 'RAMIREZ',
                'apellidoMaterno' => 'JIMENEZ',
                'email' => 'anabramirez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '24436',
                'nombre' => 'ÁNGEL FERNANDO',
                'apellidoPaterno' => 'ARGÜELLO',
                'apellidoMaterno' => 'ORTÍZ',
                'email' => 'aarguello@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '41306',
                'nombre' => 'ÁNGEL JUAN',
                'apellidoPaterno' => 'SÁNCHEZ',
                'apellidoMaterno' => 'GARCÍA',
                'email' => 'angesanchez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '7504',
                'nombre' => 'ÁNGEL',
                'apellidoPaterno' => 'MIÑÓN',
                'apellidoMaterno' => 'PÉREZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '20246',
                'nombre' => 'ANGÉLICA',
                'apellidoPaterno' => 'PÉREZ',
                'apellidoMaterno' => 'HERNÁNDEZ',
                'email' => 'angelperez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '6448',
                'nombre' => 'AQUILES',
                'apellidoPaterno' => 'ORDUÑA',
                'apellidoMaterno' => 'GONZÁLEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '58771',
                'nombre' => 'ARTURO',
                'apellidoPaterno' => 'VILLA',
                'apellidoMaterno' => 'LÓPEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '15870',
                'nombre' => 'AURELIANO',
                'apellidoPaterno' => 'AGUILAR',
                'apellidoMaterno' => 'BONILLA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '38716',
                'nombre' => 'CANDY OBDULIA',
                'apellidoPaterno' => 'SOSA',
                'apellidoMaterno' => 'JIMÉNEZ',
                'email' => 'cansosa@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '24054',
                'nombre' => 'CARLOS ALBERTO',
                'apellidoPaterno' => 'OCHOA',
                'apellidoMaterno' => 'RIVERA',
                'email' => 'cochoa@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '3380',
                'nombre' => 'CARLOS',
                'apellidoPaterno' => 'ILLESCAS',
                'apellidoMaterno' => 'SÁNCHEZ',
                'email' => 'cillescas@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '27145',
                'nombre' => 'CECILIA',
                'apellidoPaterno' => 'CRUZ',
                'apellidoMaterno' => 'LÓPEZ',
                'email' => 'ceccruz@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '30197',
                'nombre' => 'CHRISTIAN',
                'apellidoPaterno' => 'PÉREZ',
                'apellidoMaterno' => 'SALAZAR',
                'email' => 'chperez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '3563',
                'nombre' => 'CLAUDIO RAFAEL',
                'apellidoPaterno' => 'CASTRO',
                'apellidoMaterno' => 'LÓPEZ',
                'email' => 'ccastro@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '58653',
                'nombre' => 'DANIEL',
                'apellidoPaterno' => 'SANDRÍA',
                'apellidoMaterno' => 'FLORES',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '57706',
                'nombre' => 'DAVID',
                'apellidoPaterno' => 'MARTÍNEZ',
                'apellidoMaterno' => 'GALICIA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '32428',
                'nombre' => 'DIANA ELIZABETH',
                'apellidoPaterno' => 'VALDERRÁBANO',
                'apellidoMaterno' => 'PEDRAZA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '29959',
                'nombre' => 'DOLORES',
                'apellidoPaterno' => 'CARRILLO',
                'apellidoMaterno' => 'COTO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '42325',
                'nombre' => 'DONAJI',
                'apellidoPaterno' => 'CALLEJAS',
                'apellidoMaterno' => 'DEL CALLEJO',
                'email' => 'dcallejas@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '32409',
                'nombre' => 'EDGARD IVÁN',
                'apellidoPaterno' => 'BENÍTEZ',
                'apellidoMaterno' => 'GUERRERO',
                'email' => 'edbenitez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '29969',
                'nombre' => 'EDNA LILLIAM',
                'apellidoPaterno' => 'MENDOZA',
                'apellidoMaterno' => 'SOLIS',
                'email' => 'edmendoza@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '24330',
                'nombre' => 'EDUARDO',
                'apellidoPaterno' => 'DÍAZ',
                'apellidoMaterno' => 'CAMACHO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '26680',
                'nombre' => 'EDSEL',
                'apellidoPaterno' => 'ORTIZ',
                'apellidoMaterno' => 'MORENO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '35226',
                'nombre' => 'ELISEO',
                'apellidoPaterno' => 'GABRIEL',
                'apellidoMaterno' => 'ARGÜELLES',
                'email' => 'egabriel@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '36863',
                'nombre' => 'ELIZABETH',
                'apellidoPaterno' => 'MURRIETA',
                'apellidoMaterno' => 'SANGABRIEL',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '44529',
                'nombre' => 'EMMANUEL',
                'apellidoPaterno' => 'MORALES',
                'apellidoMaterno' => 'GARCÍA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '26487',
                'nombre' => 'ERIKA',
                'apellidoPaterno' => 'MENESES',
                'apellidoMaterno' => 'RICO',
                'email' => 'ermeneses@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '6454',
                'nombre' => 'EVERARDO FRANCISCO',
                'apellidoPaterno' => 'GARCÍA',
                'apellidoMaterno' => 'MENIER',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '26781',
                'nombre' => 'FREDY',
                'apellidoPaterno' => 'CASTAÑEDA',
                'apellidoMaterno' => 'SÁNCHEZ',
                'email' => 'fcastaneda@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '15672',
                'nombre' => 'GERARDO',
                'apellidoPaterno' => 'CONTRERAS',
                'apellidoMaterno' => 'VEGA',
                'email' => 'gcontreras@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '27071',
                'nombre' => 'GUILLERMO HUMBERTO',
                'apellidoPaterno' => 'VERA',
                'apellidoMaterno' => 'AMARO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '3985',
                'nombre' => 'GUSTAVO MANUEL',
                'apellidoPaterno' => 'BALDERAS',
                'apellidoMaterno' => 'ROSAS',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '19613',
                'nombre' => 'HERIBERTO JUAN BOSCO',
                'apellidoPaterno' => 'GARCIA',
                'apellidoMaterno' => 'CANTU ESCOBAR',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '41719',
                'nombre' => 'HÉCTOR XAVIER',
                'apellidoPaterno' => 'LIMÓN',
                'apellidoMaterno' => 'RIAÑO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '12345',
                'nombre' => 'HOMERO VLADIMIR',
                'apellidoPaterno' => 'RIOS',
                'apellidoMaterno' => 'FIGUEROA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '20595',
                'nombre' => 'IRMA ELIZABETH',
                'apellidoPaterno' => 'ROMERO',
                'apellidoMaterno' => 'ARRIOJA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '48653',
                'nombre' => 'ITZEL ALESSANDRA',
                'apellidoPaterno' => 'REYES',
                'apellidoMaterno' => 'FLORES',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '43001',
                'nombre' => 'JAVIER',
                'apellidoPaterno' => 'SÁNCHEZ',
                'apellidoMaterno' => 'ACOSTA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '41184',
                'nombre' => 'JAZMIN JOSEFINA',
                'apellidoPaterno' => 'GARCÍA',
                'apellidoMaterno' => 'MÉNDEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '30294',
                'nombre' => 'JENNY BETSABÉ',
                'apellidoPaterno' => 'VÁZQUEZ',
                'apellidoMaterno' => 'AGUIRRE',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '13734',
                'nombre' => 'JESÚS',
                'apellidoPaterno' => 'HERNÁNDEZ',
                'apellidoMaterno' => 'SUÁREZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '21068',
                'nombre' => 'JESÚS ROBERTO',
                'apellidoPaterno' => 'MÉNDEZ',
                'apellidoMaterno' => 'ORTIZ',
                'email' => 'jmendez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '28650',
                'nombre' => 'JORGE OCTAVIO',
                'apellidoPaterno' => 'OCHARÁN',
                'apellidoMaterno' => 'HERNÁNDEZ',
                'email' => 'jocharan@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '10378',
                'nombre' => 'JOSÉ LUIS',
                'apellidoPaterno' => 'COLORADO',
                'apellidoMaterno' => 'HERNÁNDEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '24322',
                'nombre' => 'JOSÉ FABIÁN',
                'apellidoPaterno' => 'MUÑOZ',
                'apellidoMaterno' => 'PORTILLA',
                'email' => 'fmunoz@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '38557',
                'nombre' => 'JOSÉ GUILLERMO',
                'apellidoPaterno' => 'HERNÁNDEZ',
                'apellidoMaterno' => 'CALDERÓN',
                'email' => 'guillermohernandez02@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '32616',
                'nombre' => 'JOSÉ JUAN',
                'apellidoPaterno' => 'MUÑOZ',
                'apellidoMaterno' => 'LEÓN',
                'email' => 'juanmunoz@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '30640',
                'nombre' => 'JOSÉ LUIS',
                'apellidoPaterno' => 'SOTO',
                'apellidoMaterno' => 'ORTIZ',
                'email' => 'luisoto@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '25944',
                'nombre' => 'JOSÉ RAFAEL',
                'apellidoPaterno' => 'ROJANO',
                'apellidoMaterno' => 'CÁCERES',
                'email' => 'rrojano@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '46607',
                'nombre' => 'JUAN CARLOS',
                'apellidoPaterno' => 'GARCÍA',
                'apellidoMaterno' => 'RODRÍGUEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '19194',
                'nombre' => 'JUAN CARLOS',
                'apellidoPaterno' => 'JIMÉNEZ',
                'apellidoMaterno' => 'MÁRQUEZ',
                'email' => 'jjimenez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '27160',
                'nombre' => 'JUAN CARLOS',
                'apellidoPaterno' => 'PÉREZ',
                'apellidoMaterno' => 'ARRIAGA',
                'email' => 'juaperez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '18349',
                'nombre' => 'JUAN LUIS',
                'apellidoPaterno' => 'LÓPEZ',
                'apellidoMaterno' => 'HERRERA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '48178',
                'nombre' => 'JUAN MANUEL',
                'apellidoPaterno' => 'GUTIÉRREZ',
                'apellidoMaterno' => 'MÉNDEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '14794',
                'nombre' => 'JUAN',
                'apellidoPaterno' => 'RUÍZ',
                'apellidoMaterno' => 'RAMÍREZ',
                'email' => 'jruiz@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '18705',
                'nombre' => 'JUANA ELISA',
                'apellidoPaterno' => 'ESCALANTE',
                'apellidoMaterno' => 'VEGA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '15281',
                'nombre' => 'JUDITH GUADALUPE',
                'apellidoPaterno' => 'MONTERO',
                'apellidoMaterno' => 'MORA',
                'email' => 'jmontero@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '22436',
                'nombre' => 'JUDITH',
                'apellidoPaterno' => 'RODRÍGUEZ',
                'apellidoMaterno' => 'CUEVAS',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '14858',
                'nombre' => 'JULIA AURORA',
                'apellidoPaterno' => 'MONTANO',
                'apellidoMaterno' => 'RIVAS',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '28793',
                'nombre' => 'LIZBETH ALEJANDRA',
                'apellidoPaterno' => 'HERNÁNDEZ',
                'apellidoMaterno' => 'GONZÁLEZ',
                'email' => 'lizhernandez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '25205',
                'nombre' => 'LORENA',
                'apellidoPaterno' => 'ALONSO',
                'apellidoMaterno' => 'RAMÍREZ',
                'email' => 'lalonzo@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '15278',
                'nombre' => 'LORENA  ',
                'apellidoPaterno' => 'LÓPEZ',
                'apellidoMaterno' => 'LOZADA',
                'email' => 'lorlopez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '39604',
                'nombre' => 'LUIS GERARDO',
                'apellidoPaterno' => 'MONTANÉ',
                'apellidoMaterno' => 'JIMÉNEZ',
                'email' => 'lmontane@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '49449',
                'nombre' => 'LUIS JACOBO',
                'apellidoPaterno' => 'PÉREZ',
                'apellidoMaterno' => 'GUERRERO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '13155',
                'nombre' => 'MARÍA',
                'apellidoPaterno' => 'ANGÉLICA',
                'apellidoMaterno' => 'CERDÁN',
                'email' => 'acerdan@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '9671',
                'nombre' => 'MARIA CRISTINA',
                'apellidoPaterno' => 'TRIANA',
                'apellidoMaterno' => 'CORTINA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '20446',
                'nombre' => 'MARÍA DE LOS ÁNGELES',
                'apellidoPaterno' => 'NAVARRO',
                'apellidoMaterno' => 'GUERRERO',
                'email' => 'lonavarro@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '18946',
                'nombre' => 'MARÍA DE LOS ÁNGELES',
                'apellidoPaterno' => 'ARENAS',
                'apellidoMaterno' => 'VALDES',
                'email' => 'aarenas@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '28056',
                'nombre' => 'MARÍA DE LOURDES',
                'apellidoPaterno' => 'HERNÁNDEZ',
                'apellidoMaterno' => 'RODRÍGUEZ',
                'email' => 'lourhernandez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '15277',
                'nombre' => 'MARÍA DE LOURDES',
                'apellidoPaterno' => 'VELASCO',
                'apellidoMaterno' => 'VÁZQUEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '3996',
                'nombre' => 'MARIA DE LOURDES',
                'apellidoPaterno' => 'WATTY',
                'apellidoMaterno' => 'URQUIDI',
                'email' => '	lwatty@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '15073',
                'nombre' => 'MARIA DEL CARMEN',
                'apellidoPaterno' => 'MEZURA',
                'apellidoMaterno' => 'GODOY',
                'email' => 'cmezura@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '14980',
                'nombre' => 'MARÍA DOLORES',
                'apellidoPaterno' => 'VARGAS',
                'apellidoMaterno' => 'CERDÁN',
                'email' => 'dvargas@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '14113',
                'nombre' => 'MARÍA KAREN',
                'apellidoPaterno' => 'CORTÉS',
                'apellidoMaterno' => 'VERDÍN',
                'email' => 'kcortes@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '30290',
                'nombre' => 'María Karin  ',
                'apellidoPaterno' => 'Rosenkranz',
                'apellidoMaterno' => 'Sáenz',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '20823',
                'nombre' => 'María Lina  ',
                'apellidoPaterno' => 'López',
                'apellidoMaterno' => 'Martínez',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '32216',
                'nombre' => 'MARIA LUISA',
                'apellidoPaterno' => 'CÓRDOBA',
                'apellidoMaterno' => 'TLAXCALTECO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '9827',
                'nombre' => 'MARÍA SILVIA',
                'apellidoPaterno' => 'GARCÍA',
                'apellidoMaterno' => 'RAMÍREZ',
                'email' => 'sgarcia@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '37665',
                'nombre' => 'MARÍA YESENIA',
                'apellidoPaterno' => 'ZAVALETA',
                'apellidoMaterno' => 'SÁNCHEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '34079',
                'nombre' => 'MARIBEL',
                'apellidoPaterno' => 'CARMONA',
                'apellidoMaterno' => 'GARCÍA',
                'email' => 'maribelcarmona@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '40920',
                'nombre' => 'MARIO ALBERTO',
                'apellidoPaterno' => 'HERNÁNDEZ',
                'apellidoMaterno' => 'PÉREZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '3986',
                'nombre' => 'MARIO MIGUEL',
                'apellidoPaterno' => 'OJEDA',
                'apellidoMaterno' => 'RAMÍREZ',
                'email' => 'mojeda@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '2264',
                'nombre' => 'Martha Beatriz',
                'apellidoPaterno' => 'Cuevas',
                'apellidoMaterno' => 'Gómez',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '27752',
                'nombre' => 'MARTHA ELIZABET',
                'apellidoPaterno' => 'DOMÍNGUEZ',
                'apellidoMaterno' => 'BÁRCENAS',
                'email' => 'eldominguez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '39173',
                'nombre' => 'MAX WILLIAM',
                'apellidoPaterno' => 'MILLÁN',
                'apellidoMaterno' => 'MARTÍNEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '3646',
                'nombre' => 'MIGUEL',
                'apellidoPaterno' => 'ALONSO',
                'apellidoMaterno' => 'LÓPEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '47666',
                'nombre' => 'MIGUEL ÁNGEL',
                'apellidoPaterno' => 'ORTIGOZA',
                'apellidoMaterno' => 'CLEMENTE',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '28886',
                'nombre' => 'MINERVA',
                'apellidoPaterno' => 'REYES',
                'apellidoMaterno' => 'FÉLIX',
                'email' => 'minreyes@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '27878',
                'nombre' => 'MITL',
                'apellidoPaterno' => 'MELGAREJO',
                'apellidoMaterno' => 'GONZALEZ',
                'email' => 'mmelgarejo@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '44666',
                'nombre' => 'NIELS',
                'apellidoPaterno' => 'MARTÍNEZ',
                'apellidoMaterno' => 'GUEVARA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '38027',
                'nombre' => 'NORA GUADALUPE',
                'apellidoPaterno' => 'SÁNCHEZ',
                'apellidoMaterno' => 'MONTERO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '36201',
                'nombre' => 'OLGA',
                'apellidoPaterno' => 'IRENE',
                'apellidoMaterno' => 'ZITACUARO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '51258',
                'nombre' => 'OSCAR',
                'apellidoPaterno' => 'ALONSO',
                'apellidoMaterno' => 'RAMÍREZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '39675',
                'nombre' => 'PAOLA FABIOLA',
                'apellidoPaterno' => 'CUELLAR',
                'apellidoMaterno' => 'GUTIERREZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '42360',
                'nombre' => 'PATRICIA',
                'apellidoPaterno' => 'DÍAZ',
                'apellidoMaterno' => 'GASPAR',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '18808',
                'nombre' => 'PATRICIA',
                'apellidoPaterno' => 'GARCÍA',
                'apellidoMaterno' => 'SÁNCHEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '31364',
                'nombre' => 'RAMON DAVID',
                'apellidoPaterno' => 'SARMIENTO',
                'apellidoMaterno' => 'CERVANTES',
                'email' => 'rsarmiento@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '44901',
                'nombre' => 'RAMÓN',
                'apellidoPaterno' => 'GÓMEZ',
                'apellidoMaterno' => 'ROMERO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '36384',
                'nombre' => 'RAUL',
                'apellidoPaterno' => 'DE LA FUENTE',
                'apellidoMaterno' => 'ZITACUARO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '54276',
                'nombre' => 'ROBERTO',
                'apellidoPaterno' => 'LARA',
                'apellidoMaterno' => 'DOMÍNGUEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '48603',
                'nombre' => 'RUTH ELIZABETH',
                'apellidoPaterno' => 'ALDAMA',
                'apellidoMaterno' => 'ROSAS',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '52615',
                'nombre' => 'RUTH',
                'apellidoPaterno' => 'RODRÍGUEZ',
                'apellidoMaterno' => 'RAMÍREZ',
                'email' => 'ruthrodriguez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '48674',
                'nombre' => 'SAÚL',
                'apellidoPaterno' => 'DOMÍNGUEZ',
                'apellidoMaterno' => 'ISIDRO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '18706',
                'nombre' => 'SERGIO FRANCISCO',
                'apellidoPaterno' => 'JUÁREZ',
                'apellidoMaterno' => 'CERRILLO',
                'email' => 'sejuarez@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '10183',
                'nombre' => 'SERGIO LUIS',
                'apellidoPaterno' => 'CASTILLO',
                'apellidoMaterno' => 'VALERIO',
                'email' => 'scastillo@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '34970',
                'nombre' => 'ULISES',
                'apellidoPaterno' => 'MARINERO',
                'apellidoMaterno' => 'AGUILAR',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '19993',
                'nombre' => 'URBANO FRANCISCO',
                'apellidoPaterno' => 'ORTEGA',
                'apellidoMaterno' => 'RIVERA',
                'email' => 'uortega@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '13759',
                'nombre' => 'VERÓNICA ELIZABETH',
                'apellidoPaterno' => 'OROZCO',
                'apellidoMaterno' => 'RÍOS',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '6774',
                'nombre' => 'VÍCTOR MANUEL',
                'apellidoPaterno' => 'MÉNDEZ',
                'apellidoMaterno' => 'SÁNCHEZ',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '35609',
                'nombre' => 'VICTOR MANUEL',
                'apellidoPaterno' => 'HERNANDEZ',
                'apellidoMaterno' => 'OLIVERA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '56086',
                'nombre' => 'VÍCTOR MANUEL',
                'apellidoPaterno' => 'TLAPA',
                'apellidoMaterno' => 'CARRERA',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '15023',
                'nombre' => 'VIRGINA',
                'apellidoPaterno' => 'LAGUNES',
                'apellidoMaterno' => 'BARRADAS',
                'email' => 'vlagunes@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '27581',
                'nombre' => 'WILLIAN',
                'apellidoPaterno' => 'ZÁRATE',
                'apellidoMaterno' => 'NAVARRO',
                'email' => 'wzarate@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ],
            [
                'noPersonal' => '42058',
                'nombre' => 'YANETH',
                'apellidoPaterno' => 'REYES',
                'apellidoMaterno' => 'ESTUDILLO',
                'email' => '',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'femenino'
            ],
            [
                'noPersonal' => '24326',
                'nombre' => 'ZOYLO',
                'apellidoPaterno' => 'MORALES',
                'apellidoMaterno' => 'ROMERO',
                'email' => 'zmorales@uv.mx',
                'entidadAcademica' => 'Facultad de Estadistica e Informatica',
                'genero' => 'masculino'
            ]
        ]);
    }
}
