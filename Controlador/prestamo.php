<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Vista/prestamos.css">
    <link rel="stylesheet" href="../Vista/cajas.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Nuevo Préstamo</title>
</head>
<body>
    <nav>
    <div class="logo">
        <p><?php echo $_SESSION ['CI_lab']?></p>
    </div>
            <ul>
                <li><a href="../Controlador/inicio.php" class="inicio">Préstamos</a></li>
                <li><a href="../Controlador/usuarios.php" class="usuarios">Usuarios</a></li>
                <li><a href="../Controlador/prestamo.php" class="prestamos">Nuevo Préstamo</a></li>
                <li><a href="../Controlador/elementos.php" class="elementos">Elementos</a></li>
                <li><a href="../Controlador/consultas.php" class="consultas">Más Consultas</a></li>
            </ul>
        </nav> 
    <div class="container">
        <h1>Información del usuario</h1>
            <br>
            <h3>Cédula de identidad: <input type="text" name="txtci" class="cedula" id="cedula"></h3>
            <br>
            <h3>Nombre: <input type="text" name="txtnombre" class="nombre" id="nombre"></h3>
            <br>
            <h3>Apellido: <input type="text" name="txtape" class="apellido" id="apellido"></h3>
            <br>
            <h3>Grupo: <input type="text" name="txtgrupo" class="grupo" id="grupo"></h3>
            <br>     
            <h3> Teléfono: <input type="text" name="telefono" class="telefono" id="telefono"></h3>
    </div>
    <div class="container-2">
        <h1>Información del elemento</h1>
        <br>
        <h3>ID del elemento:<input type="text" name="idele" class="id" id="id"></h3>
        <br>
        <h3>Tipo: <input type="text" name="tipo" class="tipo" id="tipo"></h3>
        <br>
        <h3>Estado: <input type="text" name="txtestado" class="estado" id="estado"></h3>
        <br>
        <h3>Descripción: <input type="text" name="txtdesc" class="desc" id="desc"></h3>
        <br>
        <h3>Cantidad: <input type="text" name="txtcant" class="cant" id="cant"></h3>
    </div>
    <div class="prestamo">
        <h2>Nuevo Préstamo</h2>
        <form action="../Modelo/logicaprestamo.php" method="post">
                    <br>
                    <input type="text" name="txtci" class="documento" id="documento" placeholder="Cédula de identidad" maxlength="8" required>
                    <br>
                    <h5>ID del elemento</h5>
                    <select name="idele" class="ele" id="elemento">
                    <?php 
                            include ("../Modelo/conexion.php");
                            $getElemento1 = "SELECT * FROM elemento ORDER BY ID";
                            $getElemento2 = mysqli_query($conectar,$getElemento1);

                            while ($row = mysqli_fetch_array ($getElemento2)) 
                            {
                                $id = $row['ID'];
                                $tipo = $row['tipo']; 
                                $estado = $row['estado'];
                                $descripcion = $row['descripcion_estado'];
                                $cantidad = $row['cantidad'];     
                    ?>
                    <option value="<?php echo $id; ?>"><?php echo $id;?></option>
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
                    <br>
                    <h5>Fecha del préstamo</h5>
                    <input type="date" name="fechapres" class="fecha" id="fecha" required>
                    <br>
                    <br>
                    <input type="text" name="plazo" class="plazo" id="plazo" required placeholder="Plazo" maxlength="30">
                    <br>
                    <br>
                    <br>
                    <h5>Fecha de devolución</h5>
                    <input type="date" name="fechadevo" class="fechadevo" id="fechadevo" placeholder="Fecha de devolución">
                    <br>
                    <br>
                    <input type="submit" value="Guardar" name="aa" id=aa> </input>       
                </div>
</body>
</html>