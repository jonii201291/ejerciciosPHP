<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 16 - Divisores de un número</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
    <style>
        .divisor {color:red;}
    </style>
</head>
<body>
    <h2>Programa que te da los divisores de un número</h2>
    <?php
       $num = 10;
       
       if ($num < 1){
         echo "no puede tener divisores si es 0 o negativo";
       } else {
         echo "<p>Los divisores de $num son</p>";
         for ($i=1; $i <= $num ; $i++) { 
            if ($num % $i == 0){
                echo "<span class='divisor'>$i </span>";
            } else {
                echo "$i ";
            }

            
         }
       }
        
    ?>
</body>
</html>