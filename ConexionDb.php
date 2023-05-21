<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "crud_tareas";

$conn = mysqli_connect($host,$user,$pass,$db);

if (!$conn) {
    die("error de conexion. ". mysqli_connect_error());
}

?>
