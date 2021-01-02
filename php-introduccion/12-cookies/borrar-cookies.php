<?php

if(isset($_COOKIE['galleta'])){
    setcookie('galleta', '', time()-100);
}

if(isset($_COOKIE['oneyear'])){
    setcookie('oneyear', '', time()-100);
}

header('Location:ver-cookies.php');
?>
