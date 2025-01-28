<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte general</title>
</head>

<body>
    <header>
        <div class="txt-carta">
            <span>Carta compromiso</span>
        </div>
        <div class="titulo">
            <strong>
                Firmas de conocimiento y cumplimiento de la Carta de Compromiso para Directores y Coordinador del Evento
                Académico de Educación Continua.
            </strong>
        </div>
    </header>
    <main>
        <table class="info-general">
            <tr>
                <td>Nombre de la propuesta:</td>
                <td>{{$cursoEduContinua["nombreCurso"]}}</td>
            </tr>
            <tr>
                <td>Modalidad:</td>
                <td>{{$cursoEduContinua["modalidad"]}}</td>
            </tr>
            <tr>
                <td>Fecha de inicio y término:</td>
                <td>{{\Carbon\Carbon::parse($cursoEduContinua["fechaInicio"])->format('d/m/Y')}} - {{\Carbon\Carbon::parse($cursoEduContinua["fechaFin"])->format('d/m/Y')}}</td>
            </tr>
            <tr>
                <td>Región:</td>
                <td>{{$cursoEduContinua["region"]}}</td>
            </tr>
            <tr>
                <td>Entidad Académica o Dependencia:</td>
                <td>{{$cursoEduContinua["entidadAcademica"]}}</td>
            </tr>
        </table>
        <table class="firmas">
            <tr>
                <td colspan="2" class="cabezera-tabla"> Director:</td>
            </tr>
            <tr>
                <td class="campo">Dr. Luis Gerardo Montané Jiménez</td>
                <td class="campo"></td>
            </tr>
            <tr>
                <td class="center"><strong>Nombre</strong></td>
                <td class="center"><strong>Firma</strong></td>
            </tr>
        </table>
        <table class="firmas">
            <tr>
                <td colspan="2" class="cabezera-tabla">Coordinador:</td>
            </tr>
            <tr>
                <td class="campo">{{$coordinador[0]["nombreCompleto"]}}</td>
                <td class="campo"></td>
            </tr>
            <tr>
                <td class="center"><strong>Nombre</strong></td>
                <td class="center"><strong>Firma</strong></td>
            </tr>
            <tr>
                <td class="campo">{{$coordinador[0]["telOficina"]}}</td>
                <td class="campo">{{$coordinador[0]["email"]}}</td>
            </tr>
            <tr>
                <td class="center">Telefono de trabajo:</td>
                <td class="center">Correo electrónico:</td>
            </tr>
        </table>
    </main>
    <footer>
        <div>
            <p>Liz de Veracruz: Arte, Ciencia, Luz</p>
            <p>Xalapa, Ver., {{\Carbon\Carbon::now()->format('d/m/Y');}}</p>
        </div>
    </footer>
</body>

</html>

<style>
    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 10px;
    }

    td {
        border: 1px solid black;
        border-style: dashed;
        width: 50%;
    }

    .info-general td{
        padding: 5px;
    }

    .txt-carta {
        height: 20px;
        text-align: end;
    }

    .txt-carta span {
        background-color: #28AD56;
        color: white;
        padding: 2px;
        width: fit-content;
        margin-left: 565px;
    }

    .cabezera-tabla{
        background-color: #28AD56;
        color: white;
    }

    .titulo {
        border: 1px solid black;
        border-style: dashed;
        margin-bottom: 10px;
    }

    .campo{
        height: 30px;
        text-align: center;
        padding-top: 50px;
    }
    
    .center{
        text-align: center;
    }

    footer{
        text-align: center;
    }
</style>