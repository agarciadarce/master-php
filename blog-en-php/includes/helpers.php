<?php 
    function motrarError ($errores, $campo){
        $alerta = '';
        if(isset($errores[$campo]) && !empty($errores[$campo])){
            $alert=  "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
        }
    }

?>