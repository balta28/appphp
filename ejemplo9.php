<?php
$n1 = 10;
$n2 = 7;
$n3 = 9;
$exa = 7;
$trabajo = 9;
//promedio calificaciones 55%
$parcial = ($n1 + $n2 + $n3) / 3;
$parcialt = $parcial * 0.55;
//examen final 30%
$examen = $exa * 0.30;
//tabajo final 15%
$final = $trabajo * 0.15;
//total
$promedio = ($parcialt + $examen + $final);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>promedio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h2>Notas</h2>
        <table>
            <tr>
                <th>nota final de sus 3 parciales 55%</th>
                <th>Nota de su examen final 30%</th>
                <th>Nota de su trabajo final 15%</th>
                <th>Su promedio final</th>
            </tr>
            <tr>
                <td><?php echo $parcialt?></td>
                <td><?php echo $examen?></td>
                <td><?php echo $final?></td>
                <td><?php echo $promedio?></td>
            </tr>
        </table>
    </section>
</body>
</html>