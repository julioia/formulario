<?php
$serverName = "F22IA"; 

$connectionInfo = array( "Database"=>"validar");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if($conn){

     
}else{
     echo "fallo en la conexión";
}
?>