<?php
require_once "conexion.php";

$sql = "SELECT * FROM tbl_usuario; ";

$varUsuario = $_POST['usuario'];
$varClave = $_POST['clave'];
$encontrado = 0;


$resultado = $CONEXION->query($sql);
//print_r($resultado);


while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
   // print_r($fila);
if($fila["username"]== $varUsuario && $fila["password"] == $varClave){
    
    session_start();
    $_SESSION['data'] = $fila;
    $encontrado = 1;
    break;
    
}else{
    $encontrado = 0;
}

}

if( $encontrado){
    header("Location:dashboard.php");    
}else{
    header("Location: login.php?error=1");
}



