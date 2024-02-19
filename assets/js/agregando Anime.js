/*Agregando img y url*/
const anime = [
    {
        URL: "#",
        img: "../assets/img/anime/Tejina-Senpai.jpg",
    },
    {
        URL: "#",
        img: "../assets/img/anime/Tejina-Senpai.jpg",
    },
    {
        URL: "#",
        img: "../assets/img/anime/Tejina-Senpai.jpg",
    },
    {
        URL: "#",
        img: "../assets/img/anime/Tejina-Senpai.jpg",
    },
    {
        URL: "#",
        img: "../assets/img/anime/Tejina-Senpai.jpg",
    },
    {
        URL: "#",
        img: "../assets/img/anime/Tejina-Senpai.jpg",
    },
    {
        URL: "#",
        img: "../assets/img/anime/Tejina-Senpai.jpg",
    },
    {
        URL: "#",
        img: "../assets/img/anime/Tejina-Senpai.jpg",
    },
];

const contenido = document.getElementById("video-contenedor");//agrega un id en html
for (let index of anime) {
    contenido.innerHTML += `
            <a href="${index.URL}"><img src="${index.img}" alt=""></a>
`;
}

// Carga la galería cuando se cargue la página
window.addEventListener('DOMContentLoaded', contenido);