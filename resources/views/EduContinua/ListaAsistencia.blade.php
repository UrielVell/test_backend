<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de participantes PROFA</title>
</head>

<body>
    <header class="encabezado">
        <table style="table-layout: fixed; width: 100%; ">
            <thead>
                <tr>
                    <td style="text-align: center; vertical-align: middle;">
                        <img class="logo_uv" src="./logo_uv.png" alt="uv logo">
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <div class="titulos_header">
                            <p class="titulo_1">Dirección General de Desarrollo Academico e Innovación Educativa</p>
                            <p class="titulo_2">Departamento de Educación Continua</p>
                        </div>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <div class="marcador">
                            <p class="numero_marcador">5</p>
                            <p class="texto_marcador">Lista de asistencia</p>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>

    </header>
    <div class="info_curso">
        <table style="table-layout: fixed; width: 100%">
            <colgroup>
                <col style="width: 50%">
                <col style="width: 50%">
            </colgroup>
            <thead>
                <tr>
                    <td style="border-bottom: 1px solid black; border-bottom-style: dashed;" colspan="2">NOMBRE DEL
                        EVENTO ACADÉMICO: {{$curso['nombreCurso']}}</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border-bottom: 1px solid black; border-bottom-style: dashed;" colspan="2">ENTIDAD
                        ACADÉMICA O DEPENDENCIA: {{$curso['entidadAcademica']}}</td>
                </tr>
                <tr>
                    <td style="border-bottom: 1px solid black; border-bottom-style: dashed;">CIUDAD: {{$curso['ciudadSede']}}</td>
                    <td style="border-bottom: 1px solid black; border-bottom-style: dashed;">DURACION: {{$curso['totalHoras']}} hrs</td>
                </tr>
                <tr>
                    <td colspan="2">FECHA DE INICIO Y TÉRMINO: {{\Carbon\Carbon::parse($curso["fechaInicio"])->format('d/m/Y')}} - {{\Carbon\Carbon::parse($curso["fechaFin"])->format('d/m/Y')}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tabla">
        <p class="titulo_tabla">F4. LISTA DE ASISTENCIA, EVALUACION Y CONSTANCIAS</p>
        <table class="lista">
            <thead style="background-color: #efefef; font-size: xx-small;">
                <tr>
                    <th rowspan="2" sty>No.</th>
                    <th colspan="3" style="width: 50%;">Nombre</th>
                    <th colspan="10" style="width: 100px;">Asistencia</th>
                    <th colspan="3">Resultado</th>
                </tr>
                <tr>
                    <th style="width: 150px">Apellido Paterno</th>
                    <th style="width: 150px">Apellido Materno</th>
                    <th style="width: 150px;">Nombre(s)</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>No</th>
                    <th>letra</th>
                    <th class="acreditacion" style="width: 50px;">Acreditación <br> (aprobado/no aprobado)</th>
                </tr>
            </thead>
            <tbody style="font-size: xx-small;">

                @php
                $contador = 0;
                @endphp
                @foreach ($participantes as $participante)
                @php
                $contador++;
                @endphp
                <tr style="height: 20px;">
                    <td>{{$contador}}</td>
                    <td>{{$participante['apellidoPaterno']}}</td>
                    <td>{{$participante['apellidoMaterno']}}</td>
                    <td>{{$participante['nombre']}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$participante['pivot']['calificacion']}}</td>
                    @php
                    $formatterES = new NumberFormatter("es", NumberFormatter::SPELLOUT);
                    @endphp
                    <td>{{$formatterES->format($participante['pivot']['calificacion']);}}</td>
                    @if( $participante['pivot']['calificacion'] >= 6)
                    <td>
                        aprobado
                    </td>
                    
                    @else
                    <td>
                        no aprobado
                    </td>
                    @endif
                   

                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    <div class="contenedor-firmas">
        <table class="firmas" style="width: 100%; ">
            <thead>
                <tr>
                    <td style="width: 50%; ">
                        <div class="firma_instructor">
                            <p style="font-size: xx-small; text-align: center; ">Nombre del instructor</p>
                        </div>
                    </td>
                    <td tyle="width: 50%; text-align: center; ">
                        <div class="firma_coordinador">
                            <p style="font-size: xx-small; text-align: center;">{{$coordinador[0]['nombreCompleto']}}</p>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
    <div class="contenedor-constancias">
        <table class="constancias">
            <tr>
                <td colspan="5"><strong>Numero de constancias</strong></td>
            </tr>
            <tr>
                <td>Participantes aprobados</td>
                <td>Coordinador</td>
                <td>Instructores</td>
                <td>Especialistas invitados</td>
                <td>Total</td>
            </tr>
            <tr style="height: 20px;">
                <td> {{$aprobados}}</td>
                <td> {{sizeof($coordinador)}}</td>
                <td> {{$instructores}}</td>
                <td> 0</td>
                <td> {{$constancias}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table class="contador-participantes">
            <tr>
                <td rowspan="2" style="width: 20%;">Numero de participantes aprobados por genero</td>
                <td>Mujeres</td>
                <td>Hombres</td>
            </tr>
            <tr style="height: 20px;">
                <td>{{$aprobadosMujer }}</td>
                <td>{{$aprobadosHombre}}</td>
            </tr>
        </table>
    </div>

</body>

</html>

<style>
    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: small;
    }

    .logo_uv {
        width: 120px;
        height: 100px;
    }

    .contenedor_img {
        grid-area: logo;
        justify-self: center;
    }

    .titulos_header {
        grid-area: titulos;
        font-size: small;
        text-align: center;
        height: 50px;
    }

    .marcador {
        border: 1px solid black;
        border-style: dashed;
        justify-self: center;
        text-align: center;
        margin: 10px 50px 10px 50px;
    }

    .numero_marcador {
        font-size: larger;
        background-color: green;
        color: white;
        border-radius: 50%;
        margin: 10px 50px 10px 50px
    }

    .texto_marcador {
        border-top: 1px solid black;
        border-top-style: dashed;
        font-size: x-small;
        margin: 0;
    }

    .info_curso {
        border: 1px solid black;
        border-style: dashed;
        margin-top: 30px;
    }

    .titulo_tabla {
        background-color: green;
        padding: 5px;
        color: white;
        font-size: small;
    }


    .firma_instructor {
        border-bottom: 1px solid black;
        
        
    }

    .firma_coordinador {
        border-bottom: 1px solid black;
       
    }

    .col_asistencia {
        background-color: #efefef;
        border-color: #000000;
        color: #000000;
        font-weight: bold;
        text-align: center;
        vertical-align: top;
        width: 100px;
    }

    .col_numero {
        background-color: #efefef;
        border-color: #000000;
        color: #000000;
        font-weight: bold;
        text-align: center;
        vertical-align: top;
        width: 20px;
    }

    .col_nombre {
        background-color: #efefef;
        border-color: #000000;
        color: #000000;
        font-weight: bold;
        text-align: center;
        vertical-align: top;
        width: 500px;
    }

    .col_resultado {
        background-color: #efefef;
        border-color: #000000;
        color: #000000;
        font-weight: bold;
        text-align: center;
        vertical-align: top;
        width: 300px;
    }

    .lista {
        width: 100%;
        border-collapse: collapse;
    }

    .lista td {
        border-style: dotted;
        border-width: 1px;
    }

    .lista th {
        border-style: dotted;
        border-width: 1px;
    }

    .firmas {
        margin-top: 20px;
    }

    .firmas td {
        text-align: center;
        padding-inline: 50px;
    }

    .constancias {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .constancias td {
        border-style: dotted;
        border-width: 1px;
        padding: 5px;
        font-size: xx-small;
    }

    .contador-participantes {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        font-size: xx-small;
    }

    .contador-participantes td {
        border-style: dotted;
        border-width: 1px;
        padding: 5px;
    }
</style>