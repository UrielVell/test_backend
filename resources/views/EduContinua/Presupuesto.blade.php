<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presupuesto</title>
</head>

<body>
    <header>
        <table style="table-layout: fixed; width: 100%; ">
            <thead>
                <tr>
                    <td style="text-align: center; vertical-align: middle;">
                        <img class="logo_uv" src="./logo_uv.png" alt="uv logo">
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <div class="titulos_header">
                            <p class="titulo1">Dirección General de Desarrollo Academico e Innovación Educativa</p>
                            <p class="titulo1">Departamento de Educación Continua</p>
                        </div>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <div class="marcador">
                            <p class="numero_marcador">2</p>
                            <p class="texto_marcador">F1-C Propuesta de Seminario, Taller o Curso</p>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
        <p style="background-color: #18529D; color: white; padding: 2px; margin: 0; margin-top: 30px;"> <strong>F3. PRESUPUESTO AUTOFINANCIABLE</strong></p>
        <p style="margin: 0; text-align: center;"><strong>EGRESOS</strong></p>
    </header>
    <main>
        <table class="egresos">
            <tr style="text-align: center;">
                <td style="width: 25%;"><strong>Descripción</strong></td>
                <td style="width: 25%;"><strong>Especificos</strong></td>
                <td style="width: 25%;"> <strong>Monto</strong></td>
                <td style="width: 25%;"> <strong>TOTAL:</strong></td>
            </tr>
            <tr>
                <td rowspan="3" ><strong>Honorarios de personal de apoyo</strong></td>
                <td>a. Instructor</td>
                <td>$0</td>
                <td rowspan="3">$0</td>
            </tr>
            <tr>
                <td>b. Coordinador</td>
                <td>$0</td>
            </tr>
            <tr>
                <td>c. Apoyo administrativo</td>
                <td>$0</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: end;"><strong><i>subtotal</i></strong></td>
                <td style="background-color: #F3F6FB;">$0</td>
            </tr>
        </table>
        <table class="presupuesto">
            <tr>
                <td style="width: 70%;"><strong>Transporte y viáticos:</strong></td>
                <td style="background-color: #F3F6FB;">$0</td>
            </tr>
            <tr>
                <td><strong>Promocion y difusion:</strong></td>
                <td style="background-color: #F3F6FB;">$0</td>
            </tr>
            <tr>
                <td><strong>Apoyo administrativo académico</strong> (10% del ingreso por cuotas de recuperación):</td>
                <td style="background-color: #F3F6FB;">${{$apoyoAdministrativo}}</td>
            </tr>
            <tr>
                <td><strong>TOTAL:</strong></td>
                <td style="background-color: #F3F6FB;">${{$apoyoAdministrativo}}</td>
            </tr>
        </table>
        <p style="margin-block: 5px; text-align: center;"><strong>INGRESOS Y BENEFICIO MINÍMO</strong></p>
        <table class="total">
            <tr style="text-align: center; background-color: #dbe5f1;">
                <td style="width: 20%;"><strong>Cuota de recuperacion</strong></td>
                <td style="width: 20%;"><strong>No. de participantes</strong></td>
                <td style="width: 20%;"><strong>Total de ingreso</strong></td>
                <td style="width: 20%;"><strong>Egreso</strong></td>
                <td style="width: 20%;"><strong>Beneficio</strong></td>
            </tr>
            <tr style="height: 20px;">
                <td>${{$cuotaRecuperacion}}</td>
                <td>{{$cupoMinimo}}</td>
                <td>${{$ingreso}}</td>
                <td>${{$egreso}}</td>
                <td>${{$beneficios}}</td>
            </tr>
        </table>
    </main>
</body>

</html>

<style>
    body{
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
    }

    .numero_marcador {
        font-size: larger;
        background-color: #18529D;
        color: white;
        border-radius: 50%;
        margin: 10px 50px 10px 50px
    }

    .texto_marcador {
        border-top: 1px solid black;
        border-top-style: dashed;
        font-size: small;
        margin: 0;
        font-size: small;
    }
    .egresos{
        width: 100%;
        border-collapse: collapse;
    }
    .egresos td {
        border-style: dotted;
        border-width: 1px;
        padding: 5px;
    }

    .presupuesto{
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .presupuesto td{
        border-style: dotted;
        border-width: 1px;
        padding: 5px;
    }

    .total{
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .total td{
        border-style: dotted;
        border-width: 1px;
        padding: 5px;
    }

    .titulo1{
        font-size: small;
    }
</style>