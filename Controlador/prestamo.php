<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            <h3> Telefono: <input type="text" name="telefono" class="telefono" id="telefono"></h3>
    </div>
    <div class="container-2">
        <h1>Información del elemento</h1>
        <br>
        <h3>ID del elemento:<input type="text" name="idele" class="id" id="id"></h3>
        <br>
        <h3>Estado: <input type="text" name="txtestado" class="estado" id="estado"></h3>
        <br>
        <h3>Descripción: <input type="text" name="txtdesc" class="desc" id="desc"></h3>
        <br>
        <h3>Cantidad: <input type="text" name="txtcant" class="cant" id="cant"></h3>
        <br>
        <h3>Tipo: <input type="text" name="tipo" class="tipo" id="tipo"></h3>
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
                                $estado = $row['estado'];
                                $descripcion = $row['descripcion_estado'];
                                $cantidad = $row['cantidad'];
                                $tipo = $row['tipo'];      
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
                    <h5>Plazo</h5>
                    <select name="plazo" class="plazo" id="plazo" required>
                    <option value="Por el día">Por el día</option>
                    <option value="1 día">1 día</option>
                    <option value="2 días">2 días</option>
                    <option value="3 día">3 días</option>
                    </select>
                    <br>
                    <br>
                    <br>
                    <h5>Fecha de devolución</h5>
                    <input type="date" name="fechadevo" class="fechadevo" id="fechadevo" placeholder="Fecha de devolución">
                    <br>
                    <br>
                    <button input type="submit" value="Guardar" name="aa" id=aa> Guardar        
                </div>
</body>
</html>