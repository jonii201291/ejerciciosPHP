<?php
$personas = [
    ["Ana", "López", "ana@mail.com", "654321000"],
    ["Pedro", "García", "pedro@mail.com", "612345678"],
    ["Lucía", "Pérez", "lucia@mail.com", "698745632"]
];
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Listado de Personas</h2>

<table class="table table-hover table-bordered">
<thead class="table-dark">
<tr>
    <th>Nombre</th><th>Apellido</th><th>Correo</th><th>Teléfono</th>
</tr>
</thead>

<tbody>
<?php foreach ($personas as $p): ?>
<tr>
    <td><?= $p[0] ?></td>
    <td><?= $p[1] ?></td>
    <td><?= $p[2] ?></td>
    <td><?= $p[3] ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

</body>
</html>
