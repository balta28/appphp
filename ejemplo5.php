<!DOCTYPE >
<html>
    <head>
        <title>Grados Fahrenheit</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>

        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto; cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="Fahrenheit">Ingrese los Grados Fahrenheit:</label>
                        </td>
                        <td>
                            <input name="Fahrenheit" required="required" type="number" />
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
    $Fahrenheit = floatval ($_POST['Fahrenheit']);
    $celcius = ($Fahrenheit - 32) * 5 / 9;
    echo "los grados celcius son: " . $celcius;
}
?>