<!DOCTYPE >
<html>
    <head>
        <title>Área y perímetro de un rectángulo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>

        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto; cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="altura">Ingresa el valor de altura:</label>
                        </td>
                        <td>
                            <input name="altura" required="required" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="base">Ingresa el valor de base:</label>
                        </td>
                        <td>
                            <input name="base" required="required"  type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $altura = floatval ($_POST['altura']);
    $base = floatval ($_POST['base']);
    $area=$altura*$base;
    $perimetro=$altura+$base+$altura+$base;
    echo 'Valor de area: ' . $area . "<br/>\n";
    echo 'Valor de perimetro: ' . $perimetro . "<br/>\n";
}
 
?>