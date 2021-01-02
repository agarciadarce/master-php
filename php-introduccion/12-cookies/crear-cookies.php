<?php

setcookie("galleta", "valor de mi galleta");

// cookie con expiración de un día
setcookie("oneyear", "valor de mi otra galleta", time()+ (60*60*24));

header('Location:ver-cookies.php');
?>
