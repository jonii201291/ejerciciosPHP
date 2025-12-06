<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 17 - División entera por Euclides</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>
<body>
    <h2>Cálculo de la división entera por el algoritmo de Euclides</h2>
<!-- cuántas veces cabe el divisor en el dividendo (eso es el cociente) y cuánto sobra (el resto).-->
    <?php

    //dividendo = divisor x cociente - resto ó 
    //dividendo - (divisor x cociente)
      $dividendo = 5;
      $divisor = 6;
      $cociente = 0;
      while ($dividendo >= $divisor){
        $dividendo -= $divisor;
        $cociente++;
      }
      echo "El cociente es: $cociente  y el resto $dividendo ";

    ?>
</body>
</html>