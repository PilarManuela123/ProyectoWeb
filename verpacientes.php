<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
<div class="row">
<h3>Mis Pacientes</h3>
</div>
<div class="row">
<table class="table table-striped table-bordered">
<thead>

  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Correo electrónico </th>
    <th>¿Suscrito?</th>
    <th>Acciones</th>
  </tr>
</thead>
<tbody>
<?php
include 'basededatos/conexion.php';
$pdo = Database::connect();
$sql = 'SELECT * FROM pacientes ORDER BY id DESC';
foreach ($pdo->query($sql) as $row) {
echo '<tr>';
echo '<td>' . $row['nombre'] . '</td>';
echo '<td>' . $row['apellido'] . '</td>';
echo '<td>' . $row['correo'] . '</td>';
echo '<td>' . $row['suscrito'] . '</td>';
echo '<td width=250>';
echo '<a class="btn btn-success" href="modificar.php?id='.$row['id'].'">Modificar</a>';
echo ' ';
echo '<a class="btn btn-danger" href="eliminar.php?id='.$row['id'].'">Eliminar</a></td>';

echo '</tr>';
}
Database::disconnect();
?>
</tbody>
</table>
</div>
<footer>
  <a href="index.html"> Volver a la página principal </a>
</footer>
</div> 
</body>
</html>
