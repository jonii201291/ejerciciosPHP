<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relación 1 - Ejercicio 8: Nota a partir de una rúbrica de calificación</title>
  <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
  <h2>Notas a partir de calificaciones y rúbrica</h2>
  <?php

  // dos arrays asociativos paralelos, se recorre uno
  // con foreach y la key sirve para el otro
  // hay acumulación 

  $rubrica = [
    "inicial" => 10,
    "primera" => 40,
    "segunda" => 30,
    "tercera" => 20
  ];

  $notas = [
    "inicial" => 5.3,
    "primera" => 2.7,
    "segunda" => 9.2,
    "tercera" => 8.4
  ];


  $notaFinal = 0;
  foreach ($notas as $key => $valor) {
    $notaFinal += $valor * $rubrica[$key] / 100;
  }
  echo "Tu nota final es : $notaFinal";
  ?>
</body>

</html>