<?php
//Obtener información de conexión de Heroku ClearDB
$cleardb_url = parse_url ( getenv ( "CLEARDB_DATABASE_URL" ) ) ;  
$cleardb_server = $cleardb_url [ "host" ] ;  
$cleardb_username = $cleardb_url [ "usuario" ] ;  
$cleardb_password = $cleardb_url [ "contraseña" ] ;  
$cleardb_db = substr ( $cleardb_url [ "ruta" ] , 1 ) ;  
$grupo_activo = 'predeterminado' ;  
$query_builder = VERDADERO ;  
// Conectar a la base de datos
$conn = mysqli_connect ( $cleardb_server , $cleardb_username , $cleardb_password , $cleardb_db ) ; 

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];





    $conectar=conn();
    $sql="INSERT INTO `usuarios` (`nombres`, `apellidos`, `correo`, `telefono`)
    VALUES ('$nombres', '$apellidos', '$correo','$telefono')";
    $resul = mysqli_query($conectar,$sql)or trigger_error("Query Failed! SQL- Error:".mysql_error($conectar));
 echo'<script type="alert">
alert("Nos comunicaremos contigo");
window.location.href="index.php";
</script>';
?>