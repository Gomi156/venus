<?php
function conn(){
    $hostname = "localhost";
    $usuario = "root";
    $passworddb = "";
    $dbname = "venus";

    $conectar = mysqli_connect($hostname, $usuario, $passworddb, $dbname);
    return $conectar;
}




?>