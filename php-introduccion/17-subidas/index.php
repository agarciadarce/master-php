<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos</title>
</head>
<body>
    <h1>subir archivos con php</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="archivo" id="archivo">
    <input type="submit" value="Enviar">
    </form>
    <h1>Listado de imagenes</h1>

    <?php
        $gestor = opendir('./images');
        while(($images = readdir($gestor)) !== false ):
            if($images != '.' && $images != '..' ):
                echo "<img src='images/$images' alt='$images' width='200px'>";
            endif;
        endwhile;
        
    
    ?>
    
</body>
</html>