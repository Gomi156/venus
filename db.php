<?php
function conn(){
    $hostname = "localhost";
    $usuario = "root";
    $passworddb = "";
    $dbname = "heroku 976283904af089a";

    $conectar = mysqli_connect($hostname, $usuario, $passworddb, $dbname);
    return $conectar;
}




?>