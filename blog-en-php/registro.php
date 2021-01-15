<?php 
session_start();
if(isset($_POST)){

    // recoger los valores del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellido = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_post['password']) ? $_post['password'] : false;

    // validar los datos antes de guardarlos en la base de datos
    $errores = array();


    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $is_nombre = true;
    }else{
        $is_nombre = false;
        $errores['nombre'] = "El nombre no es válido";
    }
    if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)){
        $is_apellido = true;
    }else{
        $is_apellido = false;
        $errores['apellido'] = "El apellido no es válido";
    }
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){

        $is_email = true;
    }else{
        $is_email = false;
        $errores['email'] = "El email no es válido";
    }
    if(!empty($password)){
        
        $is_password = true;
    }else{
        $is_password = false;
        $errores['password'] = "El password está vacía";
    }
    $guardar_usuario = false;
    if(count($errores) == 0){
        // insertar usuario en la bd
        $guardar_usuario = true;

    }else{
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }
    // pendiente clase 195
}
?>