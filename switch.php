<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 12 - Notas con switch</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>
<body>
    <h2>Calificaciones a partir de número (entero)</h2>
    <?php
       $nota = 28;

       switch ($nota) {
        case 9: // si la nota es 9 ó 10, entra por aquí
        case 10: echo "Nota final: sobresaliente";
                  break;
        case 7: // si la nota es 7 u 8, entra por aquí
        case 8: echo "Nota final: notable";
                  break;
        case 6: echo "Nota final: bien";
                  break;    
        case 5: echo "Nota final: suficiente";
                  break;
        case 1: // si la nota es 1, 2, 3 o 4, entra por aquí 
        case 2:
        case 3:
        case 4: echo "Nota final: insuficiente";
                  break; 
        default:
                  echo "la nota es errónea";
            break;
       }

    ?>
</body>
</html>