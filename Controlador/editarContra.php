<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/menuuu.css">
    <link rel="stylesheet" href="../Vista/actElementos.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Elementos</title>
</head>
<body>

<div class="container-5">
        <h1>Cambiar Contraseña</h1>
        <form action="../Modelo/actualizarContra.php" method="post">
        <?php 
        require ("../Modelo/conexion.php");
        $contra= $_GET['contra'];
        ?>
            <br>
            <h5>Nueva contraseña</h5>
            <input type="password" name="contra" class="contra" id="contra" maxlength="20" value="<?=$contra?>">
            <input type="hidden" name="txtdoc" class="documento" id="documento" value="<?php echo $_SESSION['CI_lab']?>">
            <br>
            <input type="submit" name="aa-4" id="aa-4" value="Guardar"></input>
            </div>
        </form>
</body>
</html>