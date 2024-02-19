<?php include("includes/backend/iniciar sesion.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/estilos/plataforma.css">
    <link rel="stylesheet" href="./../assets/css/media/plataforma.css">
    <link rel="icon" href="../assets/img/source/logo.png"  sizes="32x32" />

    <title>Plataforma | NextMovie</title>
</head>

<body>
    <aside>
        <video muted="" autoplay="" loop="" poster="./../assets/img/source/background-anime.webp"
            src="./../assets/img/source/background.mp4"></video>
        <div class="borde">
            <?php include("./includes/estructura/header.php") ?>
            <div class="contenedor-svg">
            <svg class="contenedor-svg1" viewBox="0 0 500 150" preserveAspectRatio="none">
                    <path d="M0,87.7 C161,185 314.2,3 500.00,89 L500.00,0.00 L0.00,0 Z" style="stroke: none; fill: #000000c5;"></path>
                </svg>

                <svg class="contenedor-svg2" viewBox="0 0 500 150" preserveAspectRatio="none">
                    <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                        style="stroke: none; fill: #000000c5;"></path>
                </svg>
            </div>
        </div>
    </aside>
    <!---->
    <div class="camuflar-position-absolute"></div>
    <!---->
    <section>
        <!--Donar-->
        <?php include("./includes/estructura/donar.php") ?>
        <!---->
        <!---->
        <div class="titulo">
            <svg class="w-8 h-8 text-emerald-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="../www.w3.org/2000/svg.html">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z">
                </path>
            </svg>
            <h1>EXTRENOS RECIENTES</h1>
        </div>
        <div class="contenedor-reciente">
            <div class="contenedor-video1" id="contenedor-video1">
                <!--Agregando contenido usando JS =>plataforma.js -->
            </div>
        </div>
    </section>

    <section>
        <div class="titulo">
            <svg class="w-8 h-8 text-indigo-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="../www.w3.org/2000/svg.html">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                </path>
            </svg>
            <h1>PROXIMAMENTE EN NEXTMOVIE</h1>
        </div>
        <div class="contenedor-reciente">
            <div class="contenedor-video2">
                <div class="section" id="contenedor-video2">
                    <!--Agregando contenido usando JS =>plataforma.js -->
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="titulo">
            <svg class="w-8 h-8 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="../www.w3.org/2000/svg.html">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z">
                </path>
            </svg>
            </svg>
            <h1>PELICULAS</h1>
        </div>
        <div class="contenedor-reciente">
            <div class="contenedor-video3" id="contenedor-video3">
                <!--Agregando contenido usando JS =>plataforma.js -->
            </div>
        </div>
    </section>

    <section>
        <div class="titulo">
            <svg class="w-8 h-8 text-red-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="../www.w3.org/2000/svg.html">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                </path>
            </svg>
            <h1>ANIMES</h1>
        </div>
        <div class="contenedor-reciente">
            <div class="contenedor-video3" id="contenedor-video4">
                <!--Agregando contenido usando JS =>plataforma.js -->
                


                
            </div>
        </div>
    </section>

    <section>
        <div class="titulo">
            <svg class="w-8 h-8 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                </path>
            </svg>
            <h1>OVAS Y ESPECIALES</h1>
        </div>
        <div class="contenedor-reciente">
            <div class="contenedor-video3" id="contenedor-video5">
                <!--Agregando contenido usando JS =>plataforma.js -->
            </div>
        </div>
    </section>


    <?php include("./includes/estructura/footer.php") ?>

    <script src="./../assets/js/agregando plataforma.js"></script>
</body>

</html>