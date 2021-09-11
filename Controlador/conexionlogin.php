<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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
            $documento = $_POST["documento"];
            $pass = $_POST["password"];
            $query = mysqli_query($conectar,"SELECT * FROM laboratorista WHERE documento = '".$nombre."' and password = '".$pass."'");
            $fila = mysqli_num_rows($query);
            if($fila == 1)
            {
                echo "Bienvenido $documento a ";
            }
            else if ($fila == 0)
            {
                echo "<script> alert('Error');window.location='login.html'</script>";
            }        
        ?>
    </header>


</body>
</html>