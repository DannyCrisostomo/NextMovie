<style>
    .hidden {
        display: none;
    }

    .hidde {
        align-items: center;
        padding: 0px 12px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .capa {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 1;
    background: #000000e6;
}

    .contenedor-error {
    color: white;
    background: black;
    padding: 10px;
    display: flex;
    gap: 6px;
    justify-content: center;
    flex-direction: column;
    border: 3px solid #E91E63 ;
}
.cerrar {
    display: flex;
    justify-content: flex-end;
}
.cerrar span {
    cursor: pointer;
    font-size: 1.7rem;
    display: flex;
    height: 40PX;
    width: 40px;
    justify-content: center;
    align-items: center;
    color: #E91E63;
}

.cerrar span {
    display: flex;
    height: 40PX;
    width: 40px;
    justify-content: center;
    align-items: center;
    color: white;
    background: #E91E63;
    width: 100%;
}

    


    .mensaje-error {
        text-align: center;
        font-size: 24px;
        font-family: cursive;
    }

    @media screen and (min-width:0px) and (max-width:499px) {
        .contenedor-error {
            width: 80%;
        }

        .mensaje-error {
            font-size: 13px;
        }
    }

    @media screen and (min-width:500px) and (max-width:767px) {
        .contenedor-error {
            width: 80%;
            height: auto;
        }
    }

    @media screen and (min-width:768px) and (max-width:991px) {}

    @media screen and (min-width:992px) and (max-width:1199px) {}

    @media screen and (min-width:1200px) {}
</style>

</style>
<div class="hidde capa" id="divImgDonate">
    <div class="contenedor-error">
        <div class="mensaje-error">Error correo no encontrado! Comprueba tu dirección de correo</div>
        <div class="cerrar" onclick="error()"><span>Ok</span></div>
    </div>
</div>

<script>
    function error() {
        document.getElementById('divImgDonate').setAttribute('class', 'hidden');
    }
</script>