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
            <colgroup>
                <col style="width: 20%; ">
                <col style="width: 60%; ">
                <col style="width: 20% ;">
            </colgroup>
            <thead>
                <tr>
                    <td style="text-align: center; vertical-align: middle;">
                        <img class="logo_uv" src="{{ public_path('logo_uv.png') }}" />
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



        <div class="constenedor_img">

        </div>

    </header>
    <div class="info_curso">
        <table style="table-layout: fixed; width: 100%">
            <colgroup>
                <col style="width: 50%">
                <col style="width: 50%">
            </colgroup>
            <thead>
                <tr>
                    <td style="border-bottom: 1px solid black; border-bottom-style: dashed;" colspan="2">NOMBRE DEL EVENTO ACADÉMICO: </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border-bottom: 1px solid black; border-bottom-style: dashed;" colspan="2">ENTIDAD ACADÉMICA O DEPENDENCIA</td>
                </tr>
                <tr>
                    <td style="border-bottom: 1px solid black; border-bottom-style: dashed;">CIUDAD:</td>
                    <td style="border-bottom: 1px solid black; border-bottom-style: dashed;">DURACION:</td>
                </tr>
                <tr>
                    <td colspan="2">FECHA DE INICIO Y TÉRMINO: </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tabla">
        <p class="titulo_tabla">LISTA DE ASISTENCIA, EVALUACION Y CONSTANCIAS</p>
        <table class="tg" style="table-layout: fixed; width: 100%">
            <!-- <colgroup>
                <col style="width: 20px">
                <col style="width: 300px">
                <col style="width: 10px">
                <col style="width: 10px">
                <col style="width: 10px">
                <col style="width: 10px">
                <col style="width: 10px">
                <col style="width: 10px">
                <col style="width: 10px">
                <col style="width: 10px">
                <col style="width: 10px">
                <col style="width: 10px">
                <col style="width: 20px">
                <col style="width: 20px">
                <col style="width: 50px">
            </colgroup> -->
            <thead>
                <tr>
                    <th class="col_numero" rowspan="2">No</th>
                    <th class="col_nombre" rowspan="2">Nombre completo</th>
                    <th class="col_asistencia" colspan="10" rowspan="2">Asistencia</th>
                    <th class="col_resultado" colspan="3">Resultado</th>
                </tr>
                <tr>
                    <th class="tg-bz9d">No</th>
                    <th class="tg-bz9d">letra</th>
                    <th class="tg-39o3">Acreditación (aprobado/no aprobado)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-baqh"></td>
                    <td>Jose uriel velasco hernandez</td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="firmas">
        <table style="table-layout: fixed; width: 100%; ">
            <thead>
                <tr>
                    <td style="text-align: center; vertical-align: middle;">
                        <div class="firma_instructor">
                            <p class="nombre_instructor">Nombre del instructor</p>
                        </div>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <div class="firma_coordinador">
                            <p class="nombre_coordinador">Nombre del coordinador</p>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
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
        font-size: large;
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

    .firmas {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        font-family: 'Times New Roman', Times, serif;
        font-style: italic;
        font-weight: bold;
        font-size: larger;
        text-align: center;
        padding-top: 20px;
    }

    .firma_instructor {
        border-bottom: 1px solid black;
        padding-bottom: 30px;

    }

    .firma_coordinador {
        border-bottom: 1px solid black;
        padding-bottom: 30px;
    }



    .tg {
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tg td {
        border-color: black;
        border-style: dashed;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg th {
        border-color: black;
        border-style: dashed;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg .tg-baqh {
        text-align: center;
        vertical-align: top
    }

    .tg .tg-39o3 {
        background-color: #efefef;
        border-color: #000000;
        color: #000000;
        font-weight: bold;
        text-align: center;
        vertical-align: top;
    }

    .col_asistencia {
        background-color: #efefef;
        border-color: #000000;
        color: #000000;
        font-weight: bold;
        text-align: center;
        vertical-align: top;
        width: 30%;
    }

    .col_numero {
        background-color: #efefef;
        border-color: #000000;
        color: #000000;
        font-weight: bold;
        text-align: center;
        vertical-align: top;
        width: 5%;
    }

    .col_nombre {
        background-color: #efefef;
        border-color: #000000;
        color: #000000;
        font-weight: bold;
        text-align: center;
        vertical-align: top;
        width: 40%;
    }

    .col_resultado {
        background-color: #efefef;
        border-color: #000000;
        color: #000000;
        font-weight: bold;
        text-align: center;
        vertical-align: top;
        width: 25%;
    }

    .tg .tg-bz9d {
        background-color: #efefef;
        border-color: #000000;
        color: #000000;
        font-weight: bold;
        text-align: center;
        vertical-align: top
    }

    .tg .tg-0lax {
        text-align: left;
        vertical-align: top;
        width: 10px;
    }
</style>