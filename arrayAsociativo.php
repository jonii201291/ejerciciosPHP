<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relación 1 - Ejercicio 5: Manejo de arrays asociativos</title>
  <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
  <style>
    h2 {
      color: blue;
    }
  </style>
</head>

<body>
  <!-- ***** ejercicio inicial para mostrar manejo de arrays asociativos y bucle foreach:
               * declaración de array
               * indexación de array escalar
               * utilización de bucle para recorrido secuencial
               * combinación con etiquetado de lista html
               * uso de la función print para salida (devuelve valor)

               ESTILAR TAMBIÉN UN POCO LA PÁGINA con etiquetas html y css
-->
  <?php

  $temperatura = [
    "lunes" => 12.5,
    "martes" => 24.2,
    "miercoles" => 25.1,
    "jueves" => 30.4,
    "viernes" => 30.4
  ];
  // mostrar un solo día

  echo "<h2>Un solo día</h2>";
  echo "la media de temperatura del lunes es:", $temperatura["lunes"];

  // ahora todos los dias
  // con cabecera
  // print mostraremos los valores, pero las claves no son numéricas
  // hay que recorrer con un bucle foreach

  echo "<h2>Temperaturas medias de la semana:</h2>";
  foreach ($temperatura as $valor)
    print "$valor<br>";


  // ahora en forma de lista no numerada
  // mostramos los valores de clave y los valores almacenados

  echo "<h2>Días de la semana y valores:</h2>";
  echo "<ul>";
  foreach ($temperatura as $dia => $valor)
    print "<li>" . $dia . ": " . $valor . "</li>";
  echo "</ul>";

  ?>
</body>

</html>