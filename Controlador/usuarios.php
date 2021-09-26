<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/usuario.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Usuarios</title>
</head>
<body>
<nav>
    <div class="logo">
        <p><?php echo $_SESSION ['documento']?></p>
    </div>
            <ul>
                <li><a href="../Controlador/inicio.php" class="inicio">Inicio</a></li>
                <li><a href="../Controlador/usuarios.php" class="usuarios">Usuarios</a></li>
                <li><a href="../Controlador/prestamo.php" class="prestamos">Préstamos</a></li>
                <li><a href="../Controlador/elementos.php" class="elementos">Elementos</a></li>
            </ul>
        </nav> 
        <div class="container-1">
        <h1>Agregar usuario</h1>
        <form action="../Controlador/usuarios.php" method="post">
            <br>
            <h3>Documento:<input type="text" name="txtci" class="cedula" id="cedula"></h3>
            <br>
            <h3>Nombre:<input type="text" name="txtnombre" class="nombre" id="nombre"></h3>
            <br>
            <h3>Apellido:<input type="text" name="txtape" class="apellido" id="apellido"></h3>
            <br>
            <h3>Grupo: <input type="text" name="txtgrupo" class="grupo" id="grupo"></h3>
            <br>
            <h3>Telefono:<input type="text" name="telefono" class="telefono" id="telefono"></h3>
            <br>
            <button input type="submit" value="Agregar" name="aa-3" id="aa-3"> Agregar </button>
        </form>
           
        </div>
        <div class="container-3">
            <table class="default">
                <tr class="columnas">
                  <td>Documento</td>
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Grupo</td>
                  <td>Teléfono</td>
                  <td></td>
                  <td></td>
                </tr>

                <?php  
                    require("../Modelo/conexion.php");
                    $sql = "SELECT * from usuarios";
                    $result = mysqli_query($conectar, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
               
                ?>

                <tr class="columnas-2"> 
                  <td><?php echo $mostrar['cedula']?></td>
                  <td><?php echo $mostrar['nombre']?></td>
                  <td><?php echo $mostrar['apellido']?></td>
                  <td><?php echo $mostrar['grupo']?></td>
                  <td><?php echo $mostrar['telefono']?></td> 
                  <td>
                    <form method="post" action="../Modelo/editareliminar.php">
                      <?php 
                       ?>
                      <input type="submit" value="Editar" class="editar">
                    </form>
                  </td>
                  <td>
                    <form method="post" action="../Modelo/editareliminar.php">
                      
                      <input type="submit" value="Eliminar" class="eliminar">
                    </form>
                  </td>
                </tr>
                <?php 
                 }
                ?>
              </table>
        </div>

        <?php 
            if (isset ($_POST["aa-3"])){
                $ci_usuario = $_POST ["txtci"];
                $nombre = $_POST ["txtnombre"];
                $apellido = $_POST ["txtape"];
                $grupo = $_POST ["txtgrupo"];
                $telefono = $_POST ["telefono"];

                $insertar = "INSERT INTO usuarios (cedula, nombre, apellido, grupo, telefono) VALUES (' $ci_usuario', '$nombre', '$apellido', '$grupo', '$telefono')";
                $ejecutar = mysqli_query($conectar, $insertar);
                

                if ($ejecutar == true) {
                    echo "<script>alert('Usuario ingresado correctamente');window.location='../Controlador/usuarios.php';</script>";
                }
                else if ($ejecutar == false) {
                    echo "<script>alert('Error');window.location='../Controlador/usuarios.php';</script>";
                }
            }
        ?>
</body>
</html>