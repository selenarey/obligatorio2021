<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/estiloelemento.css">
    <link rel="stylesheet" href="../Vista/menuuu.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Elementos</title>
</head>
<body>
<header id="main-header">
		
    <a id="logo-header" href="../Modelo/cerrarsesion.php" onclick="return ConfirmarSalida()">
			<span class="cerrar">Cerrar Sesión</span>
		</a> 

		<nav>
			<ul>
                <li><a href="../Controlador/inicio.php" class="inicio">Préstamos</a></li>
                <li><a href="../Controlador/usuarios.php" class="usuarios">Usuarios</a></li>
                <li><a href="../Controlador/prestamo.php" class="prestamos">Nuevo Préstamo</a></li>
                <li><a href="../Controlador/elementos.php" class="elementos">Elementos</a></li>
                <li><a href="../Controlador/consultas.php" class="consultas">Más Consultas</a></li>
			</ul>
		</nav>
	</header>
<div class="content">
        <div class="container-4">
        <h1>Agregar elemento</h1>
        <form action="../Controlador/elementos.php" method="post">
            <br>
            <input type="text" name="id" class="id" id="id" maxlength="5" placeholder="ID del elemento" required>
            <br>
            <br>
            <input type="text" name="tipo" class="tipo" id="tipo" maxlength="20" placeholder="Tipo de elemento">
            <br>
            <br>
            <select name="estado" id="estado" class="estado">
            <optgroup label="Estado">
            <option value="Excelente">Excelente</option>
            <option value="Bien">Bien</option>
            <option value="Dañado">Dañado</option>
            <option value="En Reparación">En Reparación</option>
            </optgroup>
            </select>
            <br>
            <br>
            <input type="text" name="desc" class="desc" id="desc" maxlength="40" placeholder="Descripción del estado">
            <br>
            <br>
            <input type="text" name="cant" class="cant" id="cant" maxlength="5" placeholder="Cantidad">
            <br>
            <br>
            <input type="text" name="nroserie" class="nroserie" id="nroserie" maxlength="10" placeholder="Serie">
            <br>
            <br>
            <button input type="submit" value="Agregar" name="aa-3" id="aa-3"> Agregar </button>
        </form>
        </div>
    </div>
        <div class="container-3">
            <table class="default">
                <tr class="columnas">
                  <td>ID</td>
                  <td>Tipo</td>
                  <td>Estado</td>
                  <td>Descripción</td>
                  <td>Cantidad</td>
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
                  <td><?php echo $mostrar['ID']?></td>
                  <td><?php echo $mostrar['tipo']?></td>
                  <td><?php echo $mostrar['estado']?></td>
                  <td><?php echo $mostrar['descripcion_estado']?></td>
                  <td><?php echo $mostrar['cantidad']?></td>
                  <td>
                      <?php 
                       ?>
                       <a href="../Controlador/editarElementos.php?id=<?php echo $mostrar['ID']?> & tipo=<?php echo $mostrar['tipo']?> & estado=<?php echo $mostrar['estado']?> & descripcion_estado=<?php echo $mostrar['descripcion_estado']?> & cantidad=<?php echo $mostrar['cantidad']?>" class="editar">Editar</a>
                  </td>
                  <td>
                      <a href="../Modelo/eliminarElemen.php?id=<?php echo $mostrar['ID']?>" onclick="return ConfirmarDelete()" class="eliminar">Eliminar </a>
                  </td>
                </tr>
                <?php 
                 }
                ?>
              </table>
              <?php 
              

            if (isset ($_POST["aa-3"])){
                $id = $_POST ["id"];
                $tipo = $_POST ["tipo"];
                $estado = $_POST ["estado"];
                $desc = $_POST ["desc"];
                $cant = $_POST ["cant"];
                $nroserie = $_POST ["nroserie"];

                $insertar = "INSERT INTO elemento (ID, tipo, estado, descripcion_estado, cantidad) VALUES ('$id','$tipo','$estado','$desc', '$cant')";
                $ejecutar = mysqli_query($conectar, $insertar);

                if ($ejecutar == true) {
                    $insertcompu = "INSERT INTO computadora (ID_compu, numero_serie) VALUES ('$id', '$nroserie')";
                    $ejecutar = mysqli_query($conectar, $insertcompu);
                    if ($insertcompu == true){
                        echo "<script>alert('Elemento ingresado correctamente');window.location='../Controlador/elementos.php';</script>";
                    }
                    
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
<script type="text/javascript">
        function ConfirmarDelete ()
        {
           var respuesta = confirm ("¿Estás seguro de que quiere eliminar este registro?");
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
<script type="text/javascript">
        function ConfirmarSalida ()
        {
           var respuesta = confirm ("¿Está seguro de cerrar sesión?");
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
