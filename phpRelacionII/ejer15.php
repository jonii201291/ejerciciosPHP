<?php 
$mostrarResultado = ($_SERVER["REQUEST_METHOD"] === "POST");

function calcular_media($a, $b, $c, $d) {
    return ($a + $b + $c + $d) / 4;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Notas Unificado</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<?php if (!$mostrarResultado): ?>
<!-- FORMULARIO -->
<form id="formNotas" method="POST" class="card p-4 shadow">
    <h3 class="text-center">Notas</h3>

    <div class="row mb-3">
        <div class="col"><input required min="0" max="10" name="n1" type="number" class="form-control" placeholder="Nota 1"></div>
        <div class="col"><input required min="0" max="10" name="n2" type="number" class="form-control" placeholder="Nota 2"></div>
        <div class="col"><input required min="0" max="10" name="n3" type="number" class="form-control" placeholder="Nota 3"></div>
        <div class="col"><input required min="0" max="10" name="n4" type="number" class="form-control" placeholder="Nota 4"></div>
    </div>

    <button class="btn btn-primary w-100">Calcular</button>
</form>

<script>
// Validación JS
document.getElementById("formNotas").onsubmit = e => {
    let fail = false;
    document.querySelectorAll("input").forEach(i => {
        let v = parseFloat(i.value);
        if (v < 0 || v > 10) fail = true;
    });
    if (fail) {
        alert("Valores entre 0 y 10");
        e.preventDefault();
    }
};
</script>

<?php else: ?>

<?php 
$media = calcular_media($_POST["n1"], $_POST["n2"], $_POST["n3"], $_POST["n4"]);
?>
<h2 class="text-center">Resultado: <?= round($media,2) ?></h2>

<?php endif; ?>

</body>
</html>
