<?php
$num  = $_POST["num"];
$base = $_POST["base"];

$result = match ($base) {
    "2"  => decbin($num),
    "8"  => decoct($num),
    "16" => dechex($num),
};

echo "Conversión a base $base: $result";
