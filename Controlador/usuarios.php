<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/prestamo.css">
    <link rel="stylesheet" href="../Vista/usuarios.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Usuarios</title>
</head>
<body>
    <nav>
        <div class="logo">
            <p>Cuenta</p>
        </div>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Usuarios</a></li>
                <li><a href="#">Préstamos</a></li>
                <li><a href="#">Elementos</a></li>
            </ul>
        </nav> 
        <div class="container-1">
            <h1>Información del usuario</h1>
        </div>
        <div class="container-3">
            <form action="../Controlador/logicausuarios.php" method="post">
            <table class="default">
                <tr class="columnas">
                  <td>Documento</td>
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Grupo</td>
                  <td>Teléfono</th>
                </tr>

                <?php  
                    require("conexion.php");
                    $sql = "SELECT * from usuarios";
                    $result = mysqli_query($conectar, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
               
                ?>

                <tr>
                  <td><?php echo $mostrar['cedula']?></td>
                  <td><?php echo $mostrar['nombre']?></td>
                  <td><?php echo $mostrar['apellido']?></td>
                  <td><?php echo $mostrar['grupo']?></td>
                  <td><?php echo $mostrar['telefono']?></td> 
                </tr>
                <?php 
                 }
                ?>
              </table>
        </div>
                    