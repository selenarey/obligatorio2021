<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/prestamos.css">
    <link rel="stylesheet" href="../Vista/cajas2.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Préstamos</title>
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
        <h3>ID del elemento:<input type="text" name="idele" class="cedula" id="cedula"></h3>
        <br>
        <h3>Estado: <input type="text" name="txtnombre" class="nombre" id="nombre"></h3>
        <br>
        <h3>Descripción: <input type="text" name="txtape" class="apellido" id="apellido"></h3>
        <br>
        <h3>Nro_serie: <input type="text" name="txtgrupo" class="grupo" id="grupo"></h3>
        <br>
    </div>
    <div class="prestamo">
        <h2>Nuevo Préstamo</h2>
        <form action="../Modelo/logicaprestamo.php" method="post">
                    <br>
                    <input type="text" name="txtci" class="documento" id="documento" placeholder="Cédula de identidad" maxlength="8" required>
                    <br>
                    <br>
                    <input type="text" name="idele" class="ele" id="elemento" placeholder="ID del elemento" required>
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
                    <input type="text" name="plazo" class="plazo" id="plzao" placeholder="Plazo" required>
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