<?php
//Inciamos la sesión//
session_start();
//DESTRUIMOS LAS SESIONES
session_destroy();
//Redireccionar al login
header("Location: index.php");