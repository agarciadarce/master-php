<?php 

$server = "localhost";
$username = "agarciadarce";
$password = "Abcd.123";
$database = "blog_master";
$bd = mysqli_connect($server, $username, $password, $database);


mysqli_query($bd, "SET NAMES 'utf8'");
