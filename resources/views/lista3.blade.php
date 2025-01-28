<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2</title>
</head>

<body>
    <header>
        <table class="encabezado">
            <tr>
                <td class="imagen">
                    <img src="./logo_uv.png" width="80" height="60" alt="logo">
                </td>
                <td class="titulos">
                    <p class="uv">Universidad Veracruzana</p>
                    <p>Comisión Mixta de Capacitación y Adiestramiento UV-FESAPAUV</p>
                    <p>Programa de Formación de Académicos</p>
                    <p>Lista de asistencias y acreditación</p>
                    <p>FA-FD-F-03</p>
                </td>
                <td class="imagen">
                    <img src="./logoProfa.jpg" width="80" height="60" alt="logo">
                </td>
            </tr>
        </table>
    </header>
    
    <main>
        <div>
            <table class="info-curso">
                <thead>
                    <tr>
                        <td rowspan="3" style="text-align: center;"><p>IDG</p> <p>{{$idg_curso}}</p></td>
                        <td>Nombre del Curso-Taller:</td>
                        @php
                        $nombreCursoUp = strtoupper($nombreCurso);
                        $totalHoras = $horasTeoricas + $horasPracticas;
                        @endphp
                        <td colspan="5">{{$nombreCursoUp}}</td>
                    </tr>
                    <tr>
                        <td>Región Entidad Solicitante:</td>
                        <td>Xalapa - Facultad de Estadistica e Informatica</td>
                        <td>Horario: </td>
                        <td colspan="3">{{\Carbon\Carbon::parse($horaInicio)->format('H:i')}} - {{\Carbon\Carbon::parse($horaFin)->format('H:i')}}</td>
                    </tr>
                    <tr>
                        <td>Fecha de impartición:</td>
                        <td> {{\Carbon\Carbon::parse($fechaInicio)->format('d/m/Y')}} - {{\Carbon\Carbon::parse($fechaFin)->format('d/m/Y')}}</td>
                        <td>No. de horas: </td>
                        <td>{{$totalHoras}} </td>
                        <td>No. de creditos:</td>
                        <td>{{$valorCreditos}}</td>
                    </tr>
                </thead>
            </table>
        </div>
        <div>
            <table class="lista">
                <thead class="head-tabla">
                    <tr>
                        <td rowspan="2">No.</td>
                        <td rowspan="2" style="width: 70px; font-size: 10px;">No. de Personal</td>
                        <td rowspan="2" style="width: 200px;">Entidad de Adscripcion</td>
                        <td rowspan="2">Nombre</td>
                        <td colspan="8" style="width: 150px; text-align: center; font-size: 10px;">Asistencias* (Dias/No. de Sesiones)</td>
                        <td rowspan="2">Observaciones</td>
                        <td rowspan="2">Resultado Final</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                @php
                $contador = 0;
                @endphp

                @foreach ($academicos as $academico)
                @if (isset($academico['pivot']) && $academico['pivot']['rol'] == 'participante')

                @php
                $contador++;
                @endphp
                <tr>
                    <td>{{$contador}}</td>
                    <td>{{$academico['noPersonal']}}</td>
                    <td style="font-size: 10px;">{{$academico['entidadAcademica']}}</td>
                    <td style="font-size: 12px;">{{$academico['nombreCompleto']}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Acreditado</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
    </main>
    <footer>
        @php
        $rolBuscado = 'Instructor';
        $coordinador = null;

        

        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

        $dia = date("d");
        $mes = $meses[date('n')-1];
        $año = date("Y");

        foreach ($academicos as $academico) {
        if (isset($academico['pivot']) && strcasecmp($academico['pivot']['rol'], $rolBuscado) == 0){
        $coordinador = $academico;
        break;
        }
        }
        @endphp
        <table>
            <tr>
                <td style=" padding-left: 30px;">
                    <div style="text-align: center;">
                        <p class="firma"></p>
                        <p style="font-size: 12px;">{{$coordinador['nombreCompleto']}}</p>
                    </div>
                </td>
                <td style="font-size: 12px; padding-left: 10px;">Xalapa, Ver. a {{$dia}} de {{$mes}} del {{$año}}</td>
            </tr>
        </table>
        <table class="datos-finales">
            <tr>
                <td>Nombre del coordinador: {{$coordinador['nombreCompleto']}} </td>
                <td>Entidad de adscripción: {{$coordinador['entidadAcademica']}} </td>
            </tr>
            <tr>
                <td>No. de personal: {{$coordinador['noPersonal']}}</td>
                <td>Campus: Xalapa</td>
            </tr>
            <tr>
                <td>Curso remunerado: Si ( ) No ( )</td>
                <td>Observaciones:</td>
            </tr>
        </table>
    </footer>

</body>


</html>

<style>

    @page {
        margin: 20px ;
    }
    * {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .encabezado {
        height: 50px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 5px;
    }

    .imagen {
        text-align: center;
        vertical-align: middle;
        max-width: 80px;
    }

    .uv {
        background-color: #18529D;
        color: white;
    }

    .titulos {
        text-align: center;
        font-size: small;
    }

    .titulos p {
        margin: 0;
    }

    .head-tabla {
        background-color: #1b5eb6;
        color: white;
        text-align: center;
    }
    .info-curso td {
        border: 1px solid black;
        font-size: 12px;
        padding-left: 5px;
        height: 10px;
    }

    .lista td {
        border: 1px solid black;
        font-size: small;
        padding-left: 5px;
    }

    .contenedor {
        min-height: 100lvh;
        display: grid;
        grid-template-rows: auto 1fr auto;
    }

    .datos-finales td {
        border: 1px solid black;
        font-size: 12px;
    }

    .firma {
        border-bottom: 1px solid black;
        width: 100%;
        padding-top: 5px;
    }

    /* footer {
        position: fixed;
        bottom: 1cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
    } */
</style>