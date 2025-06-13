<?php
session_start();

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['nombre'] = $nombre;
$_SESSION['email'] = $email;

echo "<h2>Formulario enviado</h2>";
echo "Nombre: " . $nombre . "<br>";
echo "Email: " . $email . "<br>";

echo "<h2>Datos guardados en la sesión</h2>";
echo "Nombre: " . $_SESSION['nombre'] . "<br>";   
echo "Email: " . $_SESSION['email'] . "<br>";
?>
