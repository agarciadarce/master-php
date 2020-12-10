<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes en PHP</title>
</head>

<body>
    <?php include_once 'includes/cabecera.php' ?>
    <div>
        <h2>Esta es la página de contacto</h2>
        <p>Texto de prueba de la página de contacto</p>
    </div>
    <?php require_once 'includes/footer.php' ?>


</body>

</html>