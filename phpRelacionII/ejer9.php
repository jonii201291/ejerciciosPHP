<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora en un solo archivo</title>
</head>
<body>

<h2>Calculadora en el mismo documento</h2>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

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

        echo "<h3>Resultado: $resultado</h3>";
        echo "<a href='?'>Calcular de nuevo</a>";
    }
    else {
?>
    <form method="POST">
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
<?php } ?>

</body>
</html>