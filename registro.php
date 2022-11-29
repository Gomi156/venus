<?php
include_once("db.php");

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];





    $conectar=conn();
    $sql="INSERT INTO `usuarios` (`nombres`, `apellidos`, `correo`, `telefono`)
    VALUES ('$nombres', '$apellidos', '$correo','$telefono')";
    $resul = mysqli_query($conectar,$sql)or trigger_error("Query Failed! SQL- Error:".mysql_error($conectar));
 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Datos </title>
        <link rel="stylesheet" href="estilos.css">
       
</head>
<body> 
<hi> Datos registrados</h1>
<p> Nombre: <?php echo $nombres;?></p>
<p> Apellido: <?php echo $apellidos;?></p>
<p> Correo: <?php echo $correo;?></p>
<p> Telefono: <?php echo $telefono;?></p>



</body>
</html>