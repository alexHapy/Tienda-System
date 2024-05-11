<?php
$SERVIDOR = "localhost";
$USER = "root" ;
$CLAVE = "";
$DATABASE = "dbbodegabv";

$CONEXION = new mysqli($SERVIDOR,$USER,$CLAVE,$DATABASE);

if($CONEXION->connect_error){
    die("Error en Conexion". $CONEXION->connect_error);
}
?>