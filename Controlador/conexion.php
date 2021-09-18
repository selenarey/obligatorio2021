<?php
$bdhost = "localhost";
$bdusuario ="root";
$bdpass ="";
$bdnombre = "obligatorio";

$conectar = mysqli_connect($bdhost,$bdusuario,$bdpass,$bdnombre);

if (!$conectar)
{

    die("No es posible conectar:" . mysqli_connect_error());

}
?>