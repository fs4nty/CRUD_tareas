<?php

require_once "ConexionDb.php";

// Función para obtener todas las tareas
function obtenerTareas()
{
    global $conn;
    $query = "SELECT * FROM tareas";
    $result = mysqli_query($conn, $query);
    $tareas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $tareas;
}

// Obtener todas las tareas de la base de datos
$tareas = obtenerTareas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Gestión de Tareas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sistema de Gestión de Tareas</h1>

    <h2>Tareas Pendientes</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Fecha de Creación</th>
            <th>Fecha de Actualización</th>
        </tr>
        <?php foreach ($tareas as $tarea): ?>
        <tr>
            <td><?php echo $tarea['id']; ?></td>
            <td><?php echo $tarea['titulo']; ?></td>
            <td><?php echo $tarea['Descripcion']; ?></td>
            <td><?php echo $tarea['estado']; ?></td>
            <td><?php echo $tarea['creado']; ?></td>
            <td><?php echo $tarea['modificado']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Formulario para agregar una nueva tarea -->
    <h2>Agregar Nueva Tarea</h2>
    <form action="create_tarea.php" method="POST">
        <label for="title">Título:</label>
        <input type="text" name="titulo" required><br>

        <label class="desc" for="description">Descripción:</label>   
        <textarea class="descri" name="descripcion" required></textarea><br>

        <label for="status">Estado:</label>
        <select name="status" required>
            <option value="Pendiente">Pendiente</option>
            <option value="En Progreso">En Progreso</option>
            <option value="Completada">Completada</option>
        </select><br>

        <input type="submit" value="Agregar Tarea">
    </form>
</body>
</html>
