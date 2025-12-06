<?php

$n1 = (int)$_POST["n1"];
$n2 = (int)$_POST["n2"];
$op = $_POST["op"];

$resultado = match($op) {
    "+" => $n1 + $n2,
    "-" => $n1 - $n2,
    "*" => $n1 * $n2,
    "/" => $n2 != 0 ? $n1 / $n2 : "Error: división por cero",
    "%" => $n2 != 0 ? $n1 % $n2 : "Error: módulo por cero",
    default => "Operador no válido"
};

echo "<h2>Resultado: $resultado</h2>";
echo "<a href='formulario.html'>Volver</a>";
