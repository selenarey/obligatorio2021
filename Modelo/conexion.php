<?php
$bdhost = "localhost";
$bdusuario ="root";
$bdpass ="";
$bdnombre = "bee";

$conectar = mysqli_connect($bdhost,$bdusuario,$bdpass,$bdnombre);

if (!$conectar)
{

    die("No es posible conectar:" . mysqli_connect_error());

}
?>