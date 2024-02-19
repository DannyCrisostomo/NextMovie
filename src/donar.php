<?php include("includes/backend/iniciar sesion.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donar | NextMovie</title>
    <link rel="stylesheet" href="./../assets/css/estilos/donar.css">
    <link rel="icon" href="../assets/img/source/logo.png"  sizes="32x32" />

</head>

<body>
    <?php include("./includes/estructura/header.php") ?>
    <section class="descripcion-donar">
        <div class="logo2">
            <a href="#">
                <p>Next<span>Movie</span></p>
            </a>
            <p>Hay distintas formas de apoyar a NextMovie, uno de ellos son las donaciones; Gracias a esto somos capaces de seguir con el proyecto.</p>
            <p>Contamos con distintas formas para recibir una transferencia, si conoces otra alternativa puedes adjuntarla haciendo click en el siguiente link: Sugerencia de transferencia</p>
            <p>Muchas gracias a todas las personas que han decidido apoyarnos y confiar en nosotros, encontraremos la forma de recompenzarlos de alguna forma.</p>
        </div>
    </section>
    <section class="contenedor-donar">
        <div class="galeria">

            <div class="galeria_img">
                <div class="moneda">
                    <img src="../assets/img/donar/paypal.png" alt=""> 
                    <h3>Paypal</h3>
                </div>
                <div class="moneda-descripcion">
                <p>¿Qué es PayPal?</p>
                    <p>PayPal es un método de pago en línea que te sigue vayas donde vayas.</p>
                    <p>Paga como quieras. Asocia tus tarjetas de crédito a tu cuenta PayPal y, cuando quieras pagar, simplemente inicia sesión con tu correo electrónico y contraseña y elige la tarjeta que deseas usar para hacer el pago.</p>
                </div>
                <div class="moneda-link">
                    <a href="#">
                        <p>Pagar con Paypal 
                            <svg fill="currentColor" viewBox="0 0 20 20" >
                                <path 
                                    fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                            </svg>
                        </p>
                    </a>
                </div>
            </div>

            <div class="galeria_img">
                <div class="moneda">
                    <img src="../assets/img/donar/dogecoin.png" alt=""> 
                    <h3>Dogecoin</h3>
                </div>
                <div class="moneda-descripcion">
                <p>¿Qué es Dogecoin?</p>
                    <p>Dogecoin es un cripto meme.</p>
                    <p>¡En esencia, Dogecoin es el movimiento criptográfico! También es una criptomoneda peer-to-peer de código abierto que utiliza tecnología blockchain, un sistema descentralizado altamente seguro.</p>
                </div>
                <div class="moneda-link">
                    <a href="#">
                        <p>Pagar con Dogecoin 
                            <svg fill="currentColor" viewBox="0 0 20 20" >
                                <path 
                                    fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                            </svg>
                        </p>
                    </a>
                </div>
            </div>
            
            <div class="galeria_img">
                <div class="moneda">
                    <img src="../assets/img/donar/dogecoin.png" alt=""> 
                    <h3>Bitcoin</h3>
                </div>
                <div class="moneda-descripcion">
                <p>¿Qué es Bitcoin?</p>
                    <p>Bitcoin es una moneda virtual o un medio de intercambio electrónico que sirve para adquirir productos y servicios como cualquier otra moneda.</p>
                    <p>Es descentralizado, libre, y seguro. Lo más poderoso a nivel económico que nunca antes había existido en la historia humana.</p>
                </div>
                <div class="moneda-link">
                    <a href="#">
                        <p>Pagar con Bitcoin
                            <svg fill="currentColor" viewBox="0 0 20 20" >
                                <path 
                                    fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                            </svg>
                        </p>
                    </a>
                </div>
            </div>
            
            <div class="galeria_img">
                <div class="moneda">
                    <img src="../assets/img/donar/solana.png" alt=""> 
                    <h3>Solana</h3>
                </div>
                <div class="moneda-descripcion">
                <p>¿Qué es Solana?</p>
                    <p>Solana es una cadena de bloques descentralizada creada para habilitar aplicaciones escalables y fáciles de usar para el mundo.</p>
                    <p>SOL es la cripto sobre la que se pueden realizar distintas transacciones, de forma rápida, segura y escalable.</p>
                </div>
                <div class="moneda-link">
                    <a href="#">
                        <p>Pagar con Solana
                            <svg fill="currentColor" viewBox="0 0 20 20" >
                                <path 
                                    fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                            </svg>
                        </p>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <?php include("./includes/estructura/footer.php") ?>
</body>
</html>