<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/iniciopre.css">
    <link rel="stylesheet" href="../Vista/popup3.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    
    <title>Inicio</title>
</head>
<body>
<nav>
        <div class="logo">
            <p>Cuenta</p>
          
        </div>
            <ul>
                <li><a href="../Controlador/inicio.php" class="inicio">Inicio</a></li>
                <li><a href="../Controlador/usuarios.php" class="usuarios">Usuarios</a></li>
                <li><a href="../Controlador/prestamo.php" class="prestamos">Préstamos</a></li>
                <li><a href="../Controlador/elementos.php" class="elementos">Elementos</a></li>
            </ul>
        </nav> 
        <div class="container-3">
            <table class="default">
                <tr class="columnas">
                  <td>Cédula del usuario</td>
                  <td>ID del elemento</td>
                  <td>Fecha</td>
                  <td>Hora</td>
                  <td>Fecha del préstamo</td>
                  <td>Plazo</td>
                  <td>Fecha de devolución</td> 
                </tr>
                
                <?php  
                    require("../Modelo/conexion.php");
                    $sql = "SELECT * from prestamos";
                    $result = mysqli_query($conectar, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
               
                ?>

                <tr class="columnas-2"> 
                  <td><?php echo $mostrar['ci_usuario']?></td>
                  <td><?php echo $mostrar['id_elemento']?></td>
                  <td><?php echo $mostrar['fecha']?></td>
                  <td><?php echo $mostrar['hora']?></td>
                  <td><?php echo $mostrar['fecha_prestamo']?></td>
                  <td><?php echo $mostrar['plazo']?></td>
                  <td><?php echo $mostrar['fecha_devolucion']?></td>
                </tr>
                <?php 
                 }
                ?>
              </table>
              <form action="#popup">
            <p> <input type="submit" value="Editar" name="aa" id="aa" /></p>
                <div id="popup" class="overlay">
                    <a id="cerrar-2" href="#">&times;</a> 
                    <div id="popupBody">
                                <div class="popupContent">   
                                </div>
                    </div>
                </div>
              </form>  
              <br>  
              <form action="#popup">
            <p> <input type="submit" value="Borrar" name="aa-2" id="aa-2" /></p>
                <div id="popup" class="overlay">
                    <a id="cerrar-2" href="#">&times;</a> 
                    <div id="popupBody">
                                <div class="popupContent">   
                                </div>
                    </div>
                </div>
              </form>
      </div>   
</body>
</html>