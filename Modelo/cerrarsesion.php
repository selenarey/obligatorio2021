<?php 
session_start();
session_destroy();
header('Location: ../Controlador/login.php')
?>