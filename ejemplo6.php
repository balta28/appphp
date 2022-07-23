<?php
  $media = 0;
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $t = 3;
    $nota1 = floatval ($_POST['nota1']);
    $nota2 = floatval ($_POST['nota2']);
    $nota3 = floatval ($_POST['nota3']);
    $media = ($nota1 + $nota2 + $nota3) / $t;
   
}
 
?>
<!DOCTYPE >
<html>
    <head>
        <title>media</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto; cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="nota1">Ingrese un numero:</label>
                        </td>
                        <td>
                            <input name="nota1" required="required" type="number" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nota2">Ingrese un numero:</label>
                        </td>
                        <td>
                            <input name="nota2" required="required" type="number" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nota3">Ingrese una nota</label>
                        </td>
                        <td>
                            <input name="nota3" required="required" type="number" class="form-control"/>
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" class="btn btn-primary"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <div class="jumbotron">
  <h1 class="display-4">Promedio: <?php echo number_format($media, 2)?></h1>
        
    </body>
</html>


