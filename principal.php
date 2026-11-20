<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generadores</title>
</head>
<body>
    <div class="contenedor">
        <form action="">
            <label>Nombre del estudiante</label>
            <input type="text" name="nombre" required>
            <br><br>
            <label>Fecha de nacimiento</label>
            <input type="date" name="fecha" required>
            <br><br>
            <button type="submit">Generar clave</button>
        </form>
        <?php
            require_once("funcionesGenerar.php");
        ?>
    </div>
</body>
</html>