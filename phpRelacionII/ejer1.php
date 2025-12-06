<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora GET</title>
</head>
<body>

<h2>Calculadora (método GET)</h2>

<form action="" method="GET">
    <label>Número 1:</label>
    <input type="number" name="n1" required><br><br>

    <label>Número 2:</label>
    <input type="number" name="n2" required><br><br>

    <label>Operador:</label>
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>

    <br><br>
    <button type="submit">Calcular</button>
</form>

<?php
    if (isset($_GET["n1"])) {
        $n1 = (int)$_GET["n1"];
        $n2 = (int)$_GET["n2"];
        $op = $_GET["op"];

        switch ($op) {
            case "+": 
                $res = $n1 + $n2; 
                break;
            case "-": 
                $res = $n1 - $n2; 
                break;
            case "*": 
                $res = $n1 * $n2; 
                break;
            case "/": 
                if ($n2 != 0)
                    $res = $n1 / $n2;
                else
                    "Error: división por cero"; 
                break;
            case "%": 
                if ($n2 != 0)
                    $res = $n1 % $n2;
                else 
                    "Error: módulo por cero"; 
                break;
        }

        echo "<h3>Resultado: $res</h3>";
    }
?>
</body>
</html>
