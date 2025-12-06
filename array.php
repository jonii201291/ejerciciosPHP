<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 4: Manejo de arrays clásico</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <!-- ***** ejercicio inicial para mostrar manejo de arrays y bucle for:
               * declaración de array
               * indexación de array escalar
               * utilización de bucle para recorrido secuencial
               * combinación con etiquetado de lista html
               * uso de la función print para salida (devuelve valor)

    -->
    <?php
    $dia = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];

    // mostrar un solo día
    echo "<h2>Mostrar un día en concreto por índice</h2>";
    echo "el primer dia de la semana es: $dia[0]";

    // ahora todos los dias
    // con cabecera
    // print puede llevar paréntesis y solo muestra una cosa
    // pero se puede concatenar

    echo "<h2>Días de la semana:</h2>";
    for ($cada = 1; $cada <= 7; $cada++) 
       // echo "día " . $cada . ": " . $dia[$cada - 1] . "<br>";
        printf("día %d : %s <br>", $cada, $dia[$cada - 1]);

    // ahora en forma de lista numerada
    // con cabecera y pie

    echo "<h2>Días de la semana (formato lista):</h2>";
    echo "<ol>";
    for ($cada = 0; $cada < 7; $cada++) 
        print "<li>" . $dia[$cada] . "</li>";
    echo "</ol>";
    echo "<p>Total: $cada</p>";
    ?>
</body>

</html>