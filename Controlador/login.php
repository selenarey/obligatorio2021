<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/estilo.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Inicio Sesión</title>
</head>
<body>
    <div class="container">
        <div class="row">
                <div class="col-7">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h1>Inicio Sesión</h1>
                    <form action="../Modelo/logicalogin.php" method="post">
                    <br>
                    <input type="text" name="txtdoc" class="documento" id="documento" placeholder="Cédula de identidad" maxlength="8" required>
                    <br>
                    <br>
                    <br>
                    <input type="password" name="txtpass" class="pass" id="password" placeholder="Contraseña" maxlength="20" required>
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="Ingresar" name="boton" id="boton">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
