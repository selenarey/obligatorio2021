<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/menu.css">
    <link rel="stylesheet" href="../Vista/actContra.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Elementos</title>
</head>
<body>

<div class="container-5">
        <h1>Cambiar Contraseña</h1>
        <form action="../Modelo/actualizarContra.php" method="post">
            <br>
            <h5>Por razones de seguridad debe cambiar su contraseña. Esta pantalla seguirá</h5>
            <h5>apareciendo siempre que su contraseña sea su cédula de identidad.</h5>
            <br>
            <br>
            <input type="password" name="contra" class="contra" id="contra" maxlength="20" placeholder= "Nueva contraseña" required>
            <input type="hidden" name="txtdoc" class="documento" id="documento" value="<?php echo $_SESSION['CI_lab']?>">
            <br>
            <br>
            <br>
            <br>
            <input type="submit" name="aa-4" id="aa-4" value="Guardar"></input>
            </div>
        </form>
</body>
</html>