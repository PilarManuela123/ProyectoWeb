<?php

require 'basededatos/conexion.php';


if (isset($_POST['nombre'])) {
$nombre = $_POST['nombre'];
}

if (isset($_POST['apellido'])) {
$apellido = $_POST['apellido'];
}

if (isset($_POST['email'])) {
$email = $_POST['email'];
}
$suscrito = $_POST['suscrito'];
if ($suscrito != 'Si') {
    $suscrito = 'No';
}

if ( !empty($_POST)) {


     $pdo = Database::connect();
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO pacientes (nombre,apellido,correo,suscrito) values(?, ?, ?, ?)";
     $q = $pdo->prepare($sql);
     $q->execute(array($nombre,$apellido, $email,$suscrito));
     Database::disconnect();
     header("Location: index.html");

}
?>
