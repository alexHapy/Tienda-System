<?php
session_start();
 
if(isset($_SESSION["data"])){

    header("Location: dashboard.php");

}else{
     require_once"login.php" ;
}


  

 
