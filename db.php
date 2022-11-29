<?php
function conn(){
    $hostname = "us-cdbr-east-06.cleardb.net";
    $usuario = "ba0e4f86737330";
    $passworddb = "b7cfe9df";
    $dbname = "heroku 15ce082b75bdfc1";

    $conectar = mysqli_connect($hostname, $usuario, $passworddb, $dbname);
    return $conectar;
}




?>