<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tipos de datos en php</h1>
    <?php
    $booleano = true;
    $str1 = "Hello world!";
    $num1 = 123456789;
    $num2 = -123456789;
    $char = 64; // The ASCII Character 64 is @

    // var_dump() muestra tipo y valor. Muy útil con tipos complejos
    echo "<h2>Uso de var_dump con booleano,un entero y un string</h2>";
    echo var_dump($booleano), "<br>";
    echo var_dump($num1), "<br>";
    echo var_dump($str1), "<br>";

    // Nota: El valor de formato "%%" devuelve un símbolo de porcentaje
    echo "<h2>Uso de printf con distintos formatos de salida</h2>";
    printf("%%b = %b <br>", $num1); // Binary number
    printf("%%c = %c <br>", $char); // The ASCII Character
    printf("%%c = %d <br>", $char); // Char as a decimal number
    printf("%%d = %d <br>", $num1); // Signed decimal number
    printf("%%d = %d <br>", $num2); // Signed decimal number
    printf("%%e = %e <br>", $num1); // Scientific notation (lowercase)
    printf("%%E = %E <br>", $num1); // Scientific notation (uppercase)
    printf("%%u = %u <br>", $num1); // Unsigned decimal number (positive)
    printf("%%u = %u <br>", $num2); // Unsigned decimal number (negative)
    printf("%%f = %f <br>", $num1); // Floating-point number (local settings aware)
    printf("%%F = %F <br>", $num1); // Floating-point number (not local sett aware)
    printf("%%g = %g <br>", $num1); // Shorter of %e and %f
    printf("%%G = %G <br>", $num1); // Shorter of %E and %f
    printf("%%o = %o <br>", $num1); // Octal number
    printf("%%s = %s <br>", $str1); // String
    printf("[s] = [%s]<br>", $str1);
    printf("[8s] = [%8s]<br>", $str1);
    printf("[-8s] = [%-8s]<br>", $str1);
    printf("[08s] = [%08s]<br>", $str1);
    printf("['*8s] = [%'*8s]<br>", $str1);
    printf("[8.8s] = [%8.8s]<br>", $str1);
    printf("%%x = %x <br>", $num1); // Hexadecimal number (lowercase)
    printf("%%X = %X <br>", $num1); // Hexadecimal number (uppercase)
    printf("%%+d = %+d <br>", $num1); // Sign specifier (positive)
    printf("%%+d = %+d <br>", $num2); // Sign specifier (negative)
    ?>
</body>
</html>