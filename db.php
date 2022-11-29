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

?>