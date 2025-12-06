<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 15 - Número primo</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>
<body>
    <h2>Programa que te dice si un número es primo o no</h2>
    <?php
       $num = 0;
       $i=2;
       $primo = true;
       if ($num <= 1){
        echo "el concepto primo solo está definido para números naturales";
       } else {
            do {
                if ($num % $i == 0) {
                    $primo = false;
                } 
                $i++;
            } while ($primo && $i < $num);// 2 motivos para terminar: éxito y fracaso

                if ($i >= $num){ // si sigue siendo primo true
                    echo "El número $num es primo";
                } else { // si no, he salido por el otro motivo...
                    echo "El número $num tiene al menos un divisor : ",$i-1;
            }
       }
    ?>
</body>
</html>