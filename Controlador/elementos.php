<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/elementos.css">
    <link rel="stylesheet" href="../Vista/popup.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Elementos</title>
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
        <div class="container-1">
            <h1>img</h1>
        </div>
        <div class="container-3">
            <table class="default">
                <tr class="columnas">
                  <td>ID</td>
                  <td>Estado</td>
                  <td>Descripción</td>
                  <td>Nro de serie</td>
                 
                </tr>

                <?php  
                    require("../Modelo/conexion.php");
                    $sql = "SELECT * from elemento";
                    $result = mysqli_query($conectar, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
               
                ?>

                <tr class="columnas-2"> 
                  <td><?php echo $mostrar['id']?></td>
                  <td><?php echo $mostrar['estado']?></td>
                  <td><?php echo $mostrar['descripcion']?></td>
                  <td><?php echo $mostrar['nro_serie']?></td>
                </tr>
                <?php 
                 }
                ?>
              </table>
        <form action="#popup">
            <p> <input type="submit" value="Editar" name="aa" id="aa" /></p>
                <div id="popup" class="overlay">
                    <div id="popupBody">
                        <h2>Título de la ventana</h2>
                            <a id="cerrar" href="#">&times;</a>
                                <div class="popupContent">
                                     <p>Este es el contenido</p>
                                </div>
                    </div>
                </div>
                  <br>
        <form action="#popup">
            <p> <input type="submit" value="Borrar" name="aa-2" id="aa-2" /></p>
                <div id="popup" class="overlay">
                    <div id="popupBody">
                        <h2>Título de la ventana</h2>
                            <a id="cerrar" href="#">&times;</a>
                                <div class="popupContent">
                                     <p>Este es el contenido</p>
                                </div>
                    </div>           
                </div>
                    <br>
        <form action="#popup">
            <p> <input type="submit" value="Agregar" name="aa-3" id="aa-3" /></p>
                <div id="popup" class="overlay">
                    <div id="popupBody">
                        <h2>Título de la ventana</h2>
                            <a id="cerrar" href="#">&times;</a>
                                <div class="popupContent">
                                     <p>Este es el contenido</p>
                                </div>
                    </div>           
                </div>         
        </form>
        </form>
        </form>
        </div>
</body>
</html>          
