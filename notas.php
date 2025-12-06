<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 7: Notas a partir de media y faltas</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h2>Calificaciones finales</h2>
    <?php
    // utilizamos vbles, operadores y un if
    // para testear un programa con diferentes ramas de ejecución
    // hay que probar juegos de datos para todas las alternativas

    $nombre = "José Manuel";
    $nota1 = 5.6;
    $nota2 = 5.3;
    $faltasSinJustificar = 5;
    $notaFinal = ($nota1 + $nota2) / 2 - $faltasSinJustificar * 0.25;
    if ($notaFinal >= 5) {
        echo "Enhorabuena $nombre, estás aprobado con un $notaFinal";
    } else
        echo "Lo sentimos $nombre, estás suspenso con un $notaFinal";

    echo "<br>Jose Manuel, estás ";
    echo ($notaFinal >= 5) ? "<br>aprobado" : "<br>suspenso"; // operador if, otra forma de hacerlo
    ?>
</body>

</html>