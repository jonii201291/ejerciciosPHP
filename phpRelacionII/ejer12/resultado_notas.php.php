<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];

$notas = [
    $_POST["n1"],
    $_POST["n2"],
    $_POST["n3"],
    $_POST["n4"]
];

$media = array_sum($notas) / count($notas);

echo "<h2>Resultados de $nombre</h2>";
echo "<p>Correo: $correo</p>";
echo "<p>Nota media: $media</p>";
echo "<a href='formulario_notas.html'>Volver</a>";
