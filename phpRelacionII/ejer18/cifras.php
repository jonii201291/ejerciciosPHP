<?php
$num = $_POST["num"];
echo "El número $num tiene " . strlen((string)abs($num)) . " cifras.";
