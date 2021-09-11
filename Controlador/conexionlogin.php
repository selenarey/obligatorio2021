<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/datos.css"/>
</head>
<body>
    <header class="bienvenido">
    <?php
    $bdhost = "localhost";
            $bdusuario = "root";
            $bdpass = "";
            $bdnombre = "obligatorio";
            $conectar = mysqli_connect($bdhost, $bdusuario, $bdpass, $bdnombre);
            if (!$conectar)
            {   
                die("No hay conexión: ".mysqli_connect_error());
            }
            $nombre = $_POST["txtuser"];
            $pass = $_POST["txtpass"];
            $query = mysqli_query($conectar,"SELECT * FROM usuarios WHERE usuario = '".$nombre."' and password = '".$pass."'");
            $fila = mysqli_num_rows($query);
            if($fila == 1)
            {
                echo "Bienvenido $nombre a ";
            }
            else if ($fila == 0)
            {
                echo "<script> alert('Error');window.location='index.html'</script>";
            }        
        ?>
    </header>


</body>
</html>