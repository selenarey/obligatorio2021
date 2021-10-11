<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/elementos.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Elementos</title>
</head>
<body>
<nav>
<div class="logo">
            <p><?php echo $_SESSION ['documento']?></p>
</div>
            <ul>
                <li><a href="../Controlador/inicio.php" class="inicio">Préstamos</a></li>
                <li><a href="../Controlador/usuarios.php" class="usuarios">Usuarios</a></li>
                <li><a href="../Controlador/prestamo.php" class="prestamos">Nuevo Préstamo</a></li>
                <li><a href="../Controlador/elementos.php" class="elementos">Elementos</a></li>
            </ul>
        </nav> 
        <div class="container-1">
            <h1>img</h1>
        </div>
        <div class="container-4">
        <h1>Agregar elemento</h1>
        <form action="../Controlador/elementos.php" method="post">
            <br>
            <h3>ID: <input type="text" name="id" class="id" id="id" maxlength="5"></h3>
            <br>
            <h3>Estado:<select name="estado" class="estado" id="estado"></h3>
            <option value="Nuevo">Nuevo</option>
            <option value="Bueno">Bueno</option>
            <option value="Malo">Malo</option>
            <option value="No funciona">No funciona</option>
            </select>
            <br>
            <br>
            <h3>Descripción: <input type="text" name="desc" class="desc" id="desc" maxlength="40"></h3>
            <br>
            <h3>Nro serie: <input type="text" name="nroserie" class="nroserie" id="nroserie" maxlength="15"></h3>
            <br>
            <h3>Tipo: <input type="text" name="tipo" class="tipo" id="tipo" maxlength="20"></h3>
            <br>
            <button input type="submit" value="Agregar" name="aa-3" id="aa-3"> Agregar </button>
        </form>
        </div>
        <div class="container-3">
            <table class="default">
                <tr class="columnas">
                  <td>ID</td>
                  <td>Estado</td>
                  <td>Descripción</td>
                  <td>Nro de serie</td>
                  <td>Tipo</td>
                  <td>
                    <form method="post" action="../Modelo/eliminarele.php">
                      <?php 
                       ?>
                      <input type="submit" value="Eliminar todo" onclick="return ConfirmDelete()" class="eliminar2">
                    </form>
                  </td>
                  <td></td>
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
                  <td><?php echo $mostrar['tipo']?></td>
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
              <?php 
            if (isset ($_POST["aa-3"])){
                $id = $_POST ["id"];
                $estado = $_POST ["estado"];
                $desc = $_POST ["desc"];
                $nroserie = $_POST ["nroserie"];
                $tipo = $_POST ["tipo"];

                $insertar = "INSERT INTO elemento (id, estado, descripcion, nro_serie, tipo) VALUES (' $id', '$estado', '$desc', '$nroserie','$tipo')";
                $ejecutar = mysqli_query($conectar, $insertar);
                

                if ($ejecutar == true) {
                    echo "<script>alert('Elemento ingresado correctamente');window.location='../Controlador/elementos.php';</script>";
                }
                else if ($ejecutar == false) {
                    echo "<script>alert('Error');window.location='../Controlador/elementos.php';</script>";
                }
            }
        ?>
        </div>
      
<script type="text/javascript">
        function ConfirmDelete ()
        {
           var respuesta = confirm ("¿Estás seguro de eliminar todos los registros?");
           if (respuesta == true) 
           {
               return true;
           }
           else
           {
               return false;
           }
        }
     
</script>
</body>
</html>          
