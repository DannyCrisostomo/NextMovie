<?php include("includes/backend/iniciar sesion.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tejina | NextMovie</title>
    <link rel="stylesheet" href="./../assets/css/estilos/tejina.css">
    <link rel="stylesheet" href="./../assets/css/media/tejina.css">
    <link rel="icon" href="../assets/img/source/logo.png"  sizes="32x32" />

</head>
<body>

    <section class="seleccion">
        <div class="imagen">
            <?php include("./includes/estructura/header.php") ?>
            <div class="fondo">
                <div class="anime">
                    <div class="estreno">
                        <p>ESTRENO</p>
                    </div>
                    <div class="sub-anime">
                        <span>TEJINA-SENPAI</span>
                        <div class="genero">
                            <span clasS="generos">Serie</span>
                            <span>Escolar</span>
                            <span>Comedia</span>
                            <span>Ecchi</span>
                            <span>Seinen</span>
                        </div>
                        <div class="descripcion">
                            <p>Tras descubrir que su preparatoria exige a todos sus alumnos que formen parte de algún
                                club, nuestro protagonista acaba buscando uno en contra de su voluntad. Es entonces
                                cuando ve a Tejina, una chica que está haciendo trucos de magia en la sala de su club,
                                pero que de repente comienza a meter la pata al descubrir que tiene público porque sufre
                                de pánico escénico. El joven acabará uniéndose al club con Tejina y siendo su asistente
                                en los trucos de magia.</p>
                        </div>
                        <div class="datos">
                            <p>Datos:</p>
                            <p>Author: Daisuke Satō</p>
                            <p>Año de publicación: 2010</p>
                            <p>Casa animadora: Madhouse</p>
                            <p>Temporada: Invierno</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seccion">
        <!--Donar-->
            <?php include("./includes/estructura/donar.php") ?>
        <!---->
        <div class="name">
            <h1>Capitulos de Tejina-senpai</h1>
        </div>
        <div class="video">
            <div class="video-contenedor" id="video-contenedor">
                <!--Agregando contenido usando JS-->
            </div>
        </div>
    </section>

    <?php include("./includes/estructura/footer.php") ?>
    <script src="../assets/js/agregando Anime.js"></script>
</body>

</html>