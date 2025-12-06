<?php
$a = $_POST["a"];
$b = $_POST["b"];
$ops = $_POST["calc"] ?? [];

if (in_array("cociente", $ops)) 
    echo "Cociente: " . intdiv($a,$b) . "<br>";
if (in_array("resto", $ops)) 
    echo "Resto: " . ($a % $b);
