<?php
function conn(){

    $hostname= "us-cdbr-east-06.cleardb.net";
    $usuariodb = "b436a696241b09";
    $pasworddb = "81d5f641";
    $dabname = "heroku_0e07f164d6d3630";

    $conectar = mysqli_connect($hostname, $usuariodb, $pasworddb, $dabname);
    return $conectar;
}


?>