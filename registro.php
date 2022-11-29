<?php

include_once('db.php');

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];





    $conectar=conn();
    $sql="INSERT INTO `usuario` (`nombres`, `apellidos`, `correo`, `telefono`)
    VALUES ('$nombres', '$apellidos', '$correo','$telefono')";
    $resul = mysqli_query($conectar,$sql)or trigger_error("Query Failed! SQL- Error:".mysql_error($conectar));
 
    echo'<script type="alert">
alert("Nos comunicaremos contigo");
window.location.href="index.php";
</script>';
?>