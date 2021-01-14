<?php 

if(!is_dir('carpetaxd')){
    mkdir('carpetaxd', 0777) or die('no se pudo crear la carpeta');

}
//rmdir('carpetaxd');
// en linux hay que tener cuidado con los permisos
if($gestor = opendir('./carpetaxd')){
    while(false !== ($archivo = readdir('$gestor'))){
        if($archivo != '.' && $archivo != '..'){
            echo $archivo.'<br>';
        }
    }
}
?>
