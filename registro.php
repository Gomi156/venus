<?php
include_once("db.php");

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];


echo "Los datos son los siguintes: <br>";
echo "$nombres, $apellidos, $correo, $telefono";


    $conectar=conn();
    $sql="INSERT INTO `usuarios` (`nombres`, `apellidos`, `correo`, `telefono`)
    VALUES ('$nombres', '$apellidos', '$correo','$telefono')";
    $resul = mysqli_query($conectar,$sql)or trigger_error("Query Failed! SQL- Error:".mysql_error($conectar));
echo "$sql";
?>