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
         $conexion = mysqli_connect("localhost", "root", "", "obligatorio") or die("Problemas con la conexión");
           $documento = $_POST["documento"];
            $pass = $_POST["password"];
            $query = mysqli_query($conectar,"SELECT * FROM laboratorista WHERE documento = '".$documento."' and password = '".$pass."'");
            $fila = mysqli_num_rows($query);
            if($fila == 1)
            {
                echo "<script>alert('Bienvenido/a $documento');</script>";
            }
            else if ($fila == 0)
            {
                echo "<script>alert('Documento o Contraseña incorrecta');</script>";
            }        
        ?>
    </header>


</body>
</html>