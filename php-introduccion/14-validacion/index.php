<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios PHP</title>
</head>
<body>
    <h1>Validar formularios en php</h1>

    <?php
        if(isset($_GET['error'])){
            echo "<strong style='color:red;'>".$_GET['error']."</strong>";
        }
    ?>
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" required pattern="[A-Za-z]+">
        <br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido" required pattern="[A-Za-z]+">
        <br>
        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad">
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit" value="enviar">
    </form>

</body>
</html>