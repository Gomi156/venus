<?php
function conn(){
    $hostname = "localhost";
    $usuario = "root";
    $passworddb = "";
    $dbname = "heroku 15ce082b75bdfc1";

    $conectar = mysqli_connect($hostname, $usuario, $passworddb, $dbname);
    return $conectar;
}




?>