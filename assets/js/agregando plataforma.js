/*Agregando img y url contenedor 1 - EXTRENOS RECIENTES*/
const contenedor1 = [
    {
        URL: "https://drive.google.com/file/d/1rzM_ezCZxg5pwfr_7mMqa1PdHdJ1xlzF/view?usp=sharing",
        imagen: "../assets/img/recientes/1408.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1xfEyEzwpvfEmic2GbY8oqn01TlAsDYm1/view?usp=sharing",
        imagen: "../assets/img/recientes/Akira.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1FoF7ed_h10sXsKrKh1g8TozKcErRqR7R/view?usp=sharing",
        imagen: "../assets/img/recientes/BabyDrive.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1kW-C-gztVPs10LampJNZeW7mv-oQn_PB/view?usp=sharing",
        imagen: "../assets/img/recientes/Drive.jpg",
    },
    {
        URL: "https://sendvid.com/qxkhxlma",
        imagen: "../assets/img/recientes/fast_x.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/100kitzjPuV3Fr8QF5PUJM7IJRAUVLZ8q/view",
        imagen: "../assets/img/recientes/Gato con botas.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1v4RT9hTjRJYdloqxO6S6WmUPVVLAtSdm/view?usp=sharing",
        imagen: "../assets/img/recientes/guardians_of_the_galaxy_vol_3-466272381-large.jpg",
    },
    {
        URL: "https://vimeo.com/846078032?share=copy",
        imagen: "../assets/img/recientes/homefront.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1wEI3491UboNJ9bmW3aYtL6ck6ebXtp5i/view?usp=sharing",
        imagen: "../assets/img/recientes/Predestination.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1MC9cuz3G9gJf4cL5uHW_-XNGFGPLncpc/view?usp=sharing",
        imagen: "../assets/img/recientes/Prisioners(2013).jpg",
    },
    {
        URL: "https://drive.google.com/file/d/11oabvpqO3GMKwHctaP410Xi_Z-h14iWv/view?usp=sharing",
        imagen: "../assets/img/recientes/scarface.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1ZCY4SNvhhb5ZDb1HYMP59l4fKte4994O/view?usp=sharing",
        imagen: "../assets/img/recientes/shutter_island.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1H2rKom-64In1lIXllPSIGMCwoJpdSWmq/view?usp=sharing",
        imagen: "../assets/img/recientes/spider_man_into_the_spider_verse.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/16AFroH_a8nhxa6K_3w2kVg-YP_4wVB8c/view?usp=sharing",
        imagen: "../assets/img/recientes/whiplash.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1_PXzifviIZctCg6_1vV3JJ8TWL8KNjn1/view?t=2s",
        imagen: "../assets/img/recientes/zombieland-565000159-large.jpg",
    },

];
const contenido = document.getElementById("contenedor-video1");//agrega un id en html
for (let index of contenedor1) {
    contenido.innerHTML += `
    <a class="extrenos_recientes"  href="${index.URL}">
        <img src="${index.imagen}" alt="">
    </a>
`;
}

// Carga la galería cuando se cargue la página
window.addEventListener('DOMContentLoaded', contenido);

/*Agregando img y url contenedor 2 - PROXIMAMENTE EN NEXTMOVIE*/
const contenedor2 = [
    {
        imagen: "../../img/anime/Tejina-Senpai.jpg",
        URL: "../assets/img/pelicula/1.jpg",
    },
    {
        imagen: "../../img/anime/Tejina-Senpai.jpg",
        URL: "../assets/img/pelicula/1.jpg",
    },
    {
        imagen: "../../img/anime/Tejina-Senpai.jpg",
        URL: "../assets/img/pelicula/1.jpg",
    },
    {
        imagen: "../../img/anime/Tejina-Senpai.jpg",
        URL: "../assets/img/pelicula/1.jpg",
    },
    {
        imagen: "../../img/anime/Tejina-Senpai.jpg",
        URL: "../assets/img/pelicula/1.jpg",
    },
    {
        imagen: "../../img/anime/Tejina-Senpai.jpg",
        URL: "../assets/img/pelicula/1.jpg",
    },

];
const contenido2 = document.getElementById("contenedor-video2");//agrega un id en html
for (let index2 of contenedor2) {
    contenido2.innerHTML += `
    <div class="img" style="--i2:url(${index2.imagen})" >
    <a href="${index2.URL}"></a></div>
`;
}
window.addEventListener('DOMContentLoaded', contenido2);



/*Agregando img y url contenedor 3 - PELICULAS*/
const contenedor3 = [
    {
        URL: "https://drive.google.com/file/d/1rzM_ezCZxg5pwfr_7mMqa1PdHdJ1xlzF/view?usp=sharing",
        imagen: "../assets/img/recientes/1408.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1xfEyEzwpvfEmic2GbY8oqn01TlAsDYm1/view?usp=sharing",
        imagen: "../assets/img/recientes/Akira.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1FoF7ed_h10sXsKrKh1g8TozKcErRqR7R/view?usp=sharing",
        imagen: "../assets/img/recientes/BabyDrive.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1kW-C-gztVPs10LampJNZeW7mv-oQn_PB/view?usp=sharing",
        imagen: "../assets/img/recientes/Drive.jpg",
    },
    {
        URL: "https://sendvid.com/qxkhxlma",
        imagen: "../assets/img/recientes/fast_x.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/100kitzjPuV3Fr8QF5PUJM7IJRAUVLZ8q/view",
        imagen: "../assets/img/recientes/Gato con botas.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1v4RT9hTjRJYdloqxO6S6WmUPVVLAtSdm/view?usp=sharing",
        imagen: "../assets/img/recientes/guardians_of_the_galaxy_vol_3-466272381-large.jpg",
    },
    {
        URL: "https://vimeo.com/846078032?share=copy",
        imagen: "../assets/img/recientes/homefront.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1wEI3491UboNJ9bmW3aYtL6ck6ebXtp5i/view?usp=sharing",
        imagen: "../assets/img/recientes/Predestination.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1MC9cuz3G9gJf4cL5uHW_-XNGFGPLncpc/view?usp=sharing",
        imagen: "../assets/img/recientes/Prisioners(2013).jpg",
    },
    {
        URL: "https://drive.google.com/file/d/11oabvpqO3GMKwHctaP410Xi_Z-h14iWv/view?usp=sharing",
        imagen: "../assets/img/recientes/scarface.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1ZCY4SNvhhb5ZDb1HYMP59l4fKte4994O/view?usp=sharing",
        imagen: "../assets/img/recientes/shutter_island.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1H2rKom-64In1lIXllPSIGMCwoJpdSWmq/view?usp=sharing",
        imagen: "../assets/img/recientes/spider_man_into_the_spider_verse.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/16AFroH_a8nhxa6K_3w2kVg-YP_4wVB8c/view?usp=sharing",
        imagen: "../assets/img/recientes/whiplash.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1_PXzifviIZctCg6_1vV3JJ8TWL8KNjn1/view?t=2s",
        imagen: "../assets/img/recientes/zombieland-565000159-large.jpg",
    },

];
const contenido3 = document.getElementById("contenedor-video3");//agrega un id en html
for (let index3 of contenedor3) {
    contenido3.innerHTML += `
    <a class="extrenos_recientes"  href="${index3.URL}">
        <img src="${index3.imagen}" alt="">
    </a>
`;
}
window.addEventListener('DOMContentLoaded', contenido3);

/*Agregando img y url contenedor 3 - PELICULAS*/
const contenedor4 = [
    {
        URL: "https://drive.google.com/file/d/1rzM_ezCZxg5pwfr_7mMqa1PdHdJ1xlzF/view?usp=sharing",
        imagen: "../assets/img/recientes/1408.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1xfEyEzwpvfEmic2GbY8oqn01TlAsDYm1/view?usp=sharing",
        imagen: "../assets/img/recientes/Akira.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1FoF7ed_h10sXsKrKh1g8TozKcErRqR7R/view?usp=sharing",
        imagen: "../assets/img/recientes/BabyDrive.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1kW-C-gztVPs10LampJNZeW7mv-oQn_PB/view?usp=sharing",
        imagen: "../assets/img/recientes/Drive.jpg",
    },
    {
        URL: "https://sendvid.com/qxkhxlma",
        imagen: "../assets/img/recientes/fast_x.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/100kitzjPuV3Fr8QF5PUJM7IJRAUVLZ8q/view",
        imagen: "../assets/img/recientes/Gato con botas.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1v4RT9hTjRJYdloqxO6S6WmUPVVLAtSdm/view?usp=sharing",
        imagen: "../assets/img/recientes/guardians_of_the_galaxy_vol_3-466272381-large.jpg",
    },
    {
        URL: "https://vimeo.com/846078032?share=copy",
        imagen: "../assets/img/recientes/homefront.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1wEI3491UboNJ9bmW3aYtL6ck6ebXtp5i/view?usp=sharing",
        imagen: "../assets/img/recientes/Predestination.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1MC9cuz3G9gJf4cL5uHW_-XNGFGPLncpc/view?usp=sharing",
        imagen: "../assets/img/recientes/Prisioners(2013).jpg",
    },
    {
        URL: "https://drive.google.com/file/d/11oabvpqO3GMKwHctaP410Xi_Z-h14iWv/view?usp=sharing",
        imagen: "../assets/img/recientes/scarface.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1ZCY4SNvhhb5ZDb1HYMP59l4fKte4994O/view?usp=sharing",
        imagen: "../assets/img/recientes/shutter_island.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1H2rKom-64In1lIXllPSIGMCwoJpdSWmq/view?usp=sharing",
        imagen: "../assets/img/recientes/spider_man_into_the_spider_verse.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/16AFroH_a8nhxa6K_3w2kVg-YP_4wVB8c/view?usp=sharing",
        imagen: "../assets/img/recientes/whiplash.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1_PXzifviIZctCg6_1vV3JJ8TWL8KNjn1/view?t=2s",
        imagen: "../assets/img/recientes/zombieland-565000159-large.jpg",
    },

];
const contenido4 = document.getElementById("contenedor-video4");//agrega un id en html
for (let index4 of contenedor4) {
    contenido4.innerHTML += `
    <a class="extrenos_recientes"  href="${index4.URL}">
        <img src="${index4.imagen}" alt="">
    </a>
`;
}
window.addEventListener('DOMContentLoaded', contenido4);

/*Agregando img y url contenedor 3 - OVAS Y ESPECIALES*/
const contenedor5 = [
    {
        URL: "https://drive.google.com/file/d/1rzM_ezCZxg5pwfr_7mMqa1PdHdJ1xlzF/view?usp=sharing",
        imagen: "../assets/img/recientes/1408.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1xfEyEzwpvfEmic2GbY8oqn01TlAsDYm1/view?usp=sharing",
        imagen: "../assets/img/recientes/Akira.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1FoF7ed_h10sXsKrKh1g8TozKcErRqR7R/view?usp=sharing",
        imagen: "../assets/img/recientes/BabyDrive.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1kW-C-gztVPs10LampJNZeW7mv-oQn_PB/view?usp=sharing",
        imagen: "../assets/img/recientes/Drive.jpg",
    },
    {
        URL: "https://sendvid.com/qxkhxlma",
        imagen: "../assets/img/recientes/fast_x.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/100kitzjPuV3Fr8QF5PUJM7IJRAUVLZ8q/view",
        imagen: "../assets/img/recientes/Gato con botas.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1v4RT9hTjRJYdloqxO6S6WmUPVVLAtSdm/view?usp=sharing",
        imagen: "../assets/img/recientes/guardians_of_the_galaxy_vol_3-466272381-large.jpg",
    },
    {
        URL: "https://vimeo.com/846078032?share=copy",
        imagen: "../assets/img/recientes/homefront.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1wEI3491UboNJ9bmW3aYtL6ck6ebXtp5i/view?usp=sharing",
        imagen: "../assets/img/recientes/Predestination.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1MC9cuz3G9gJf4cL5uHW_-XNGFGPLncpc/view?usp=sharing",
        imagen: "../assets/img/recientes/Prisioners(2013).jpg",
    },
    {
        URL: "https://drive.google.com/file/d/11oabvpqO3GMKwHctaP410Xi_Z-h14iWv/view?usp=sharing",
        imagen: "../assets/img/recientes/scarface.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1ZCY4SNvhhb5ZDb1HYMP59l4fKte4994O/view?usp=sharing",
        imagen: "../assets/img/recientes/shutter_island.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1H2rKom-64In1lIXllPSIGMCwoJpdSWmq/view?usp=sharing",
        imagen: "../assets/img/recientes/spider_man_into_the_spider_verse.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/16AFroH_a8nhxa6K_3w2kVg-YP_4wVB8c/view?usp=sharing",
        imagen: "../assets/img/recientes/whiplash.jpg",
    },
    {
        URL: "https://drive.google.com/file/d/1_PXzifviIZctCg6_1vV3JJ8TWL8KNjn1/view?t=2s",
        imagen: "../assets/img/recientes/zombieland-565000159-large.jpg",
    },

];
const contenido5 = document.getElementById("contenedor-video5");//agrega un id en html
for (let index5 of contenedor5) {
    contenido5.innerHTML += `
    <a class="extrenos_recientes"  href="${index5.URL}">
        <img src="${index5.imagen}" alt="">
    </a>
`;
}
window.addEventListener('DOMContentLoaded', contenido5);