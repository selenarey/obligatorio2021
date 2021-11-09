<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">   
     <link rel="stylesheet" href="../Vista/menuu.css">
    <link rel="stylesheet" href="../Vista/estiloPrestamos.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Nuevo Préstamo</title>
</head>
<body>
            <header id="main-header">
            <span class="cerrar">
     <b> <a id="logo-header" href="../Modelo/cerrarsesion.php" onclick="return ConfirmarSalida()">Salir</a></b>
        <a id="logo-header" href="#"><?php echo $_SESSION['CI_lab']?></a>
    	</span>

		<nav>
			<ul>
            <li><a href="../Controlador/inicio.php" class="inicio">Inicio</a></li>
                <li><a href="../Controlador/prestamo.php" class="prestamos">Nuevo Préstamo</a></li>
                <li><a href="../Controlador/usuarios.php" class="usuarios">Usuarios</a></li>
                <li><a href="../Controlador/elementos.php" class="elementos">Elementos Disponibles</a></li>
                <li><a href="../Controlador/consultas.php" class="consultas">Historial</a></li>
			</ul>
		</nav>
	</header>

	<section id="main-content"> 
<div class="container">
        <form action="" method="get"> 
        <h1>Información del usuario</h1>
        <input type="text" name="busqueda" id="busqueda" placeholder="  Buscar" required>
        <input type="submit" name="enviar" id="enviar" value=""></input>
    </form> 
    <table class="default">
            <tr class="columnas-1">
            <td>Cédula</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Grupo</td>
            <td>Teléfono</td> 
            </tr>
    <?php 
    include ("../Modelo/conexion.php");
    if(isset($_GET['enviar'])){
        $busqueda= $_GET['busqueda'];

        $sql= $conectar->query("SELECT * from usuario AS u LEFT JOIN laboratorista AS l ON u.CI = l.CI_lab WHERE CI_lab IS NULL AND CI LIKE '$busqueda' '%' OR nombre LIKE '$busqueda' '%' AND CI_lab IS NULL order by CI");
        
        while ($row= $sql->fetch_array()){

            ?>
            <tr class="columnas-2">
              <td><?php echo $row['CI'];?></td>
              <td><?php echo $row['nombre'];?></td>
              <td><?php echo $row['apellido'];?></td>
              <td><?php echo $row['grupo'];?></td>
              <td><?php echo $row['telefono'];?></td>
              <td>
              <input type="checkbox" onChange="comprobar(this)" id="1" />
                </td>
            </tr>
    <?php 
    }
    } 
    ?> 
    </table>
        </div>
    <div class="container-2">
    <form action="" method="get"> 
        <h1>Información del elemento</h1>
        <input type="text" name="busq" id="busq" placeholder="  Buscar" required>
        <input type="submit" name="env" id="env" value=""></input>
    </form>
    <table class="default">
            <tr class="columnas-1">
            <td>ID</td>
            <td>Tipo</td>
            <td>Estado</td>
            <td>Descripción</td>
            </tr>
    <?php 
    include ("../Modelo/conexion.php");
    if(isset($_GET['env'])){
        $busq= $_GET['busq'];

        $sql= $conectar->query("SELECT * FROM elemento WHERE ID LIKE '$busq' '%' AND  disponibilidad = 'Si' OR tipo LIKE '$busq' '%' AND  disponibilidad = 'Si' order by ID");
        
        while ($row= $sql->fetch_array()){

            ?> 
          <tr class="columnas-2">
              <td><?php echo $row['ID'];?></td>
              <td><?php echo $row['tipo'];?></td>
              <td><?php echo $row['estado'];?></td>
              <td><?php echo $row['descripcion_estado'];?></td>
            </tr>
    <?php 
    }
    } 
    ?> 
    </table>
    </div>
    <div class="prestamo">
        <h2>Nuevo Préstamo</h2>
        <form action="../Modelo/logicaprestamo.php" method="post">
                    <br>
                    <input type="text" name="txtci" class="documento" id="textInput1" placeholder="Cédula de Identidad" maxlength="8" required>
                    <br>     
                    <h5>ID del elemento</h5>
                    <select name="idele" class="ele" id="elemento">
                    <?php 
                            include ("../Modelo/conexion.php");
                            $getElemento1 = "SELECT * FROM `elemento` LEFT JOIN computadora ON id=id_compu WHERE disponibilidad = 'Si' ORDER BY ID";
                            $getElemento2 = mysqli_query($conectar,$getElemento1);

                            while ($row = mysqli_fetch_array ($getElemento2)) 
                            {
                                $id = $row['ID'];
                                $tipo = $row['tipo']; 
                                $estado = $row['estado'];
                                $descripcion = $row['descripcion_estado'];
                                $cantidad = $row['cantidad'];     
                    ?>
                    <option value="<?php echo $id;?>"><?php echo $id;?></option>
                    <?php 
                    }
                    ?>
                    </select>
                    <br> 
                    <h5>Fecha</h5>
                    <input type="date" name="fecha" class="fecha" id="fecha" required>
                    <br>
                    <h5>Hora</h5>
                    <input type="time" name="hora" class="hora" id="hora" required> 
                    <?php 
                            include ("../Modelo/conexion.php");
                            $getFecha1 = "SELECT fecha FROM toma_prestado";
                            $getFecha2 = mysqli_query($conectar,$getFecha1);

                            while ($row = mysqli_fetch_array ($getFecha2)) 
                            {
                                $fecha = $row['fecha'];
                                ?>
                    
                    <input type="hidden" name="fprestamo" class="fprestamo" id="fprestamo" value="<?php echo $fecha;?>">
                    <?php } ?>
                    <br>
                    <br>
                    <input type="text" name="plazo" class="plazo" id="plazo" required placeholder="Plazo" maxlength="30">
                    <br>
                    <br>
                    <br>
                    <h5>Fecha de devolución (Opcional)</h5>
                    <input type="date" name="fechadevo" class="fechadevo" id="fechadevo" placeholder="Fecha de devolución">
                    <input type="hidden" name="ci_labo" class="ci_labo" id="ci_labo" value="<?php echo $_SESSION['CI_lab']?>">
                    <input type="hidden" name="disponibilidad" class="disponibilidad" id="disponibilidad" value="No">
                    <br>
                    <br>
                    <input type="submit" value="Guardar" name="aa" id=aa></input>      
                </div>
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
<?php 
if(isset($_GET['enviar'])){
        $busqueda= $_GET['busqueda'];

        $sql= $conectar->query("SELECT * FROM usuario WHERE CI LIKE '$busqueda' '%' OR nombre LIKE '$busqueda' '%' order by CI");
        
        while ($row= $sql->fetch_array()){

 ?>                    
<script type="text/javascript">
function comprobar(target) {
  var textInput = document.getElementById("textInput" + target.id);
  if (target.checked) {
    textInput.value = "<?php echo $row['CI'];?>";
  } else {
    textInput.value = "";
  }
}

</script>
<?php 
} 
}
?>
</body>
</html>