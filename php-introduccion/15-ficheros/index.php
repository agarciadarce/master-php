<?php 

// no funciona
    $archivo = fopen("texto.txt", "a+");

    // leer archivo
/*
    while(!feof($contenido)){
        $contenido = fgets($archivo);
        echo $contenido."<br>";
    }
*/
    fwrite($archivo, "Soy un texto ingresado desde ");

    //copy('texto.txt', 'texto-copia.txt') or die('error al copiar');
     //rename('texto-copia.txt', 'texto-recopia.txt') or die ('error al renombrar');
     //unlink('texto-recopia.txt') or die('error al borrar el archivo');
    if(file_exists('texto.txt')){
        echo "El archivo existe";
    }

    fclose($archivo);
?>