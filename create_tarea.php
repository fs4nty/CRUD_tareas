<?php

require_once "ConexionDb.php";

// Obtener los datos del formulario
$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$status = $_POST["status"];

$query = "INSERT INTO tareas (titulo, Descripcion,estado) VALUES ('$titulo', '$descripcion', '$status')";
mysqli_query($conn, $query);

// Redireccionar a la página principal
header('Location: index.php');

?>