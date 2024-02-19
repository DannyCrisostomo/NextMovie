<?php include("./src/includes/backend/registrar datos login.php")?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/estilos/registrar.css" />
    <link rel="stylesheet" href="./assets/css/media/registrar.css" />
    <link rel="icon" href="../assets/img/source/logo.png"  sizes="32x32" />

    <title>Registrar | NextMovie</title>
</head>

<body>
    <header class="contenedor">
        <?php isset($alert) ? $alert : ''; ?>
    </div>
        <div class="fondo">
            <div class="logo">
                <p>Next<span>Movie</span></p>
            </div>
            <div class="login">
                <div class="login-form">
                    <span>Registrar</span>
                    <form action="" method="post" autocomplete="off">
                        <input type="text" placeholder="Nombre" name="nombre" class="input" required="">
                        <input type="text" placeholder="Usuario" name="usuario" class="input" required="">
                        <input type="email" placeholder="Email" name="correo" class="input" required="">
                        <input type="password" placeholder="Contraseña" name="clave" class="input" required="">
                        <div class="submit">
                            <input type="submit" value="Crear cuenta" class="boton">
                        </div>
                        <?php isset($alert) ? $alert : ''; ?>
                    </form>
                    <div class="recuerdame">
                        <div class="ayuda">
                            <a href="recuperar.php" class="">¿Recuperar Cuenta?</a>
                        </div>
                        <div class="check">
                            <a href="index.php" class="">Iniciar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="./js/logeo.js"></script>
</body>
</html>