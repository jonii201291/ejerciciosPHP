<?php
$num  = $_POST["num"];
$base = $_POST["base"];

if ($base == "0") {
    die("Error: no se seleccionó operación válida.");
}

$result = match ($base) {
    "2"  => decbin($num),
    "8"  => decoct($num),
    "16" => dechex($num),
    default => "Operación inválida"
};

echo "Conversión a base $base: $result";
