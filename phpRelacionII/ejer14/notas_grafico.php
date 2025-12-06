<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];

$media = ($n1 + $n2 + $n3 + $n4) / 4;
$porcentaje = $media * 10;  // para el progress bar
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Resultado Notas</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2 class="text-center">Resultado</h2>

<p class="text-center fs-3">Media: <strong><?= round($media, 2) ?></strong></p>

<div class="progress" style="height: 30px;">
    <div class="progress-bar bg-success" role="progressbar"
         style="width: <?= $porcentaje ?>%;"
         aria-valuenow="<?= $porcentaje ?>" aria-valuemin="0" aria-valuemax="100">
        <?= round($porcentaje) ?>%
    </div>
</div>

<br>
<a href="formulario_notas_grafico.html" class="btn btn-secondary mt-4 w-100">Volver</a>

</body>
</html>
