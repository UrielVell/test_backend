<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio de participantes</title>
</head>

<body>
    <header>
        <header class="encabezado">
            <table style="table-layout: fixed; width: 100%; ">
                <td>
                    <tr>
                        <td style="text-align: center;">
                            <img class="logo_uv" src="./logo_uv.png" alt="uv logo">
                        </td>
                        <td style="text-align: center;">
                            <div class="titulos_header">
                                <p class="titulo_1">Dirección General de Desarrollo Academico e Innovación Educativa</p>
                                <p class="titulo_2">Departamento de Educación Continua</p>
                            </div>
                        </td>
                        <td style="text-align: center; ">
                            <div class="marcador">
                                <p class="numero_marcador">5</p>
                                <p class="texto_marcador">Directorio de participantes</p>
                            </div>
                        </td>
                    </tr>
                </td>
            </table>
        </header>
    </header>
    <main>
        <div class="info_curso">
            <table style="table-layout: fixed; width: 100%">
                <colgroup>
                    <col style="width: 50%">
                    <col style="width: 50%">
                </colgroup>
                <thead>
                    <tr>
                        <td style="border-bottom: 1px solid black; border-bottom-style: dashed;" colspan="2">NOMBRE DEL
                            EVENTO ACADÉMICO: {{$curso["nombreCurso"]}}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border-bottom: 1px solid black; border-bottom-style: dashed;" colspan="2">ENTIDAD
                            ACADÉMICA O DEPENDENCIA: {{$curso["entidadAcademica"]}}</td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px solid black; border-bottom-style: dashed;">CIUDAD: {{$curso["ciudadSede"]}}</td>
                        <td style="border-bottom: 1px solid black; border-bottom-style: dashed;">DURACION: {{$curso["totalHoras"]}} hrs</td>
                    </tr>
                    <tr>
                        <td colspan="2">FECHA DE INICIO Y TÉRMINO: {{\Carbon\Carbon::parse($curso["fechaInicio"])->format('d/m/Y')}} - {{\Carbon\Carbon::parse($curso["fechaFin"])->format('d/m/Y')}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tabla">
            <p class="titulo_tabla">F5. DIRECTORIO DE PARTICIPANTES</p>
            <table class="directorio">
                <thead>
                    <tr>
                        <th style="width: 2%;">No</th>
                        <th style="width: 40%;">Nombre completo</th>
                        <th style="width: 10%;">No Personal UV (unicamente cuando aplique)</th>
                        <th style="width: 10%;">Ocupacion</th>
                        <th style="width: 10%;">Grado Maximo de Estudios</th>
                        <th style="width: 10%;">Correo electronico</th>
                        <th style="width: 10%;">Ciudad</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $contador = 0;
                    @endphp
                    @foreach ($participantes as $participante)
                    @php
                    $contador++;
                    @endphp
                    <tr style="height: 20px;">
                        <td>{{$contador}}</td>
                        <td>{{$participante["apellidoPaterno"]}} {{$participante["apellidoMaterno"]}} {{$participante["nombre"]}}</td>
                        <td> {{$participante["noPersonal"]}}</td>
                        <td> {{$participante["ocupacion"]}}</td>
                        <td> {{$participante["gradoMaxEstudios"]}}</td>
                        <td> {{$participante["email"]}}</td>
                        <td> {{$participante["ciudad"]}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>

<style>
    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
        font-size: medium;
        text-align: center;
        height: 50px;
    }

    .marcador {
        border: 1px solid black;
        border-style: dashed;
        justify-self: center;
        text-align: center;
        margin: 10px 50px 10px 50px;
        width: 100px;
        justify-self: center;
    }

    .numero_marcador {
        font-size: medium;
        background-color: green;
        color: white;
        border-radius: 50%;
        margin: 10px 40px 10px 40px;
    }

    .texto_marcador {
        border-top: 1px solid black;
        border-top-style: dashed;
        font-size: large;
        margin: 0;
        font-size: medium;
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
        font-size: larger;
    }

    .directorio {
        border-collapse: collapse;
        width: 100%;
        font-size: x-small;
    }

    .directorio td {
        border-style: dotted;
        border-width: 1px;
    }

    .directorio th {
        border-style: dotted;
        border-width: 1px;
        background-color: #efefef;
    }
</style>