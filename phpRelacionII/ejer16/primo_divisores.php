<?php
$num = $_POST["num"];
$op  = $_POST["op"];

if ($op === "primo") {
    $primo = true;
    for ($i=2; $i<$num; $i++) if ($num % $i == 0) $primo=false;
    echo $primo ? "$num es primo" : "$num NO es primo";
}

if ($op === "divisores") {
    $divs = [];
    for ($i=1; $i<=$num; $i++) if ($num % $i == 0) $divs[] = $i;
    echo "Divisores: " . implode(", ", $divs);
}
