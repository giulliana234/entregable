<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiones</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400&display=swap');
   
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-family: 'Poppins', sans-serif;
    font-size: 10px;
    color: rgb(8, 8, 8);
    scroll-behavior: smooth;
}

body {
    overflow-x: hidden;
    background-color: #fff;
}

section {
    padding: 3.9rem 0;
    overflow: hidden;
}

img {
    width: 100%;
    max-width: 100%;
}

a {
    text-decoration: none;
}

p {
    font-size: 1.6rem;
}

.container {
    width: 100%;
    max-width: 122.5rem;
    margin:  0 auto;
    padding: 0 2.4rem;
}

header {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    background-image: linear-gradient(to bottom, rgba(0,0,0,.5), transparent);
}
.nav {
    height: 7.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.menu-toggle {
    color: rgb(240, 236, 236);
    font-size: 2.2rem;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 2.5rem;
    cursor: pointer;
    z-index: 1500;
}

.fa-times {
    display: none;
}

.nav-list {
    list-style: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 80%;
    height: 100vh;
    background-color: #252525;
    padding: 4.4rem;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    z-index: 1250;
    transform: translateX(-100%);
   
}

.nav::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, .8);
    z-index: 1000;
    opacity: 0;
    transform: scale(0);
    transition: opacity .5s;

}

.open .fa-times {
    display: block;
}

.open .fa-bars {
    display: none;
}

.open .nav-list {
    transform: translateX(0);
}
.open .nav::before{
    opacity: 1;
    transform: scale(1);
}

.logo {
    color: #fff;
    font-size: 2rem;
    font-weight: 600;
}

.nav-item {
    border-bottom: 2px solid rgba(255, 255, 255, .3);
}



.nav-link:hover {
    color: #0af167;
}

.hero {
    width: 100%;
    height: 70vh;
    background: url("https://www.hotelvinasqueirolo.com/blog/wp-content/uploads/2019/07/los-5-mejores-destinos-turisticos-del-peru-A-1066x546.jpg") center no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    text-align: center;
}

.h2-sub {
    font-size: 3rem;
    font-family: 'Poppins', sans-serif;
    color: #0066cc;
    font-weight: 600;
    line-height: 3.0;
}

.fil {
    text-transform: uppercase;
    font-size: 3rem;
}

.head {
    color: #fff;
    font-size: 3.7rem;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    font-weight: 900;
    letter-spacing: 3.5rem;
}

.yeah{
    color: #000000;
    font-size: 4.7rem;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    font-weight: 900;
    letter-spacing: 0.0rem;
}

.he-des h5 {
    color: #fff;
    font-size: 1.4rem;
    font-weight: 100;
    text-transform: uppercase;
    margin-bottom: 1.2rem;
    letter-spacing: 3px;
    margin-right: -3px;
}




.global {
    text-align: center;
    margin-top: 3.9rem;
}

.dis-sto .global {
    margin-top: 6.9rem;
}

.global .circle {
    color: #3bcc75;
    margin: 2.4rem 0;
}

.hea-dark {
    color: #090909;
    letter-spacing: .7rem;
    margin-right: -.7rem;
}

.global .h2-sub {
    letter-spacing: -1px;
    line-height: .42;
}

.res-info {
    text-align: center;
}

.res-des {
    margin-bottom: 3rem;
}

.res-des p {
    line-height: 1.6;
    margin-bottom: 2.4rem
}

.bt {
    min-height: 65vh;
    display: flex;
    align-items: center;
}

.image-group {
    width: 100%;
    max-width: 100%;
   
}

.disco .res-des {
    padding-top: 3rem;
    margin-bottom: 0;
}

footer {
    padding: 7.9rem 0;
    background-color: #252525;
    color: #fff;
    text-align: center;
    position: relative;
}

.footer-content {
    overflow: hidden;
}

.footer-content h4 {
    font-size: 1.9rem;
    text-transform: uppercase;
    font-weight: 100;
    letter-spacing: 3px;
    margin-bottom: 3rem;
}

.social-icons {
    list-style: none;
    margin-bottom: 5.4rem;
    display: flex;
    justify-content: center;
}

.social-icons i {
    font-size: 2rem;
    color: #fff;
    padding: .2rem 1rem;
    
}

.news-form {
    width: 100%;
    position: relative;
    display: flex;
    justify-content: center;

}

.news-input {
    width: 100%;
    max-width: 25rem;
    padding: 1rem;
    border-radius: .4rem;
}
.news-btn {
    background: transparent;
    border: none;
    color: #252525;
    cursor: pointer;
    font-size: 1.6rem;
    padding: 1px .6rem;
    position: absolute;
    top: 30%;
    margin-left: 20.5rem;
}

@media screen and (min-width: 900px) {

    section {
        padding: 7.9rem;
    }

    .menu-toggle {
        display: none;
    }

    .nav {
        justify-content: space-between;
    }

    .nav-list {
        position: initial;
        width: initial;
        height: initial;
        background-color: transparent;
        padding: 0;
        justify-content: initial;
        flex-direction: row;
        transform: initial;
        transition: initial;
    }

    .nav-item {
        margin: 0 2.4rem;
    }

    .nav-item:last-child {
        margin-right: 0;
    }

    .nav-link {
        font-size: 1.3rem;
    }

    .active {
        position: relative;
    }
    .active::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: #fff;
        left: 0;
        bottom: -3px;
    }

    .h2-sub {
        font-size: 3rem;
    }

    .fil {
        font-size: 3rem;
    }
    .head {
        font-size: 4.7rem;
        letter-spacing: .8rem;
    }

    .res-info {
        display: flex;
        align-items: center;
    }

    .res-info > div {
        flex: 1;
    }

    .pad-rig {
        padding-right: 7rem;
    }

    .footer-content {
        max-width: 77.5rem;
        margin: auto;
    }

    .footer-content-about {
        max-width: 51.3rem;
        margin:  0 auto 5.4rem;
    }

    .footer-div{
        display: flex;
        justify-content: space-between;
    }

    .social-media,
    .news-form {
        width: 100%;
        max-width: 27.3rem;
        margin: 0 1rem;
    }

   .news-btn {
       margin-left: 7.5rem;
   }
    
}
</style>


<body>

    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="#" class="logo">SENATI</a>
            </nav>
        </div>
    </header>


    <section class="hero" id="hero">
        <div class="container">
            <h1 class="head">LUGARES TURISTICOS DEL PERÚ</h1>
            <div class="he-des">
            <h1 class="yeah">2022</h1>
            </div>
        </div>
    </section>

    <section class="dis-sto">
        <div class="container">
            <div class="res-info">
                <div>
                    <img src="https://www.munitingomaria.gob.pe/mplp/sites/default/files//parque_0.jpg" alt="">
                </div>
            
                <div class="res-des pad-rig">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">T</span>ingo maria
                        </h2>
                        <h1 class="head hea-dark">la bella durmiente</h1>
                    </div>
                    <p>
                    Ubicado el Suroeste de la ciudad de Tingo María, “La Bella Durmiente” es una cadena montañosa cubierta por un manto verde de frondosa vegetación llamada Puma Ringri (orejas de puma) que en conjunto forman la silueta de una hermosa mujer dormida eternamente por cuya base discurren los ríos Huallaga y Monzón. Su área se inicia a 675 m.s.n.m., Elevándose hasta los 1075 m.s.n.m.
                    Geográficamente se encuentra en la Región de Selva Alta, su clima es calido, húmedo y lluvioso, con mucho calor en épocas de verano e intensas lluvias en invierno.

                    </p>
                </div>
            </div>
        </div>
    </section>
    <hr>

    <section class="disco">
        <div class="container">
            <div class="res-info">
                <div class="res-des">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">H</span>uánuco
                        </h2>
                        <h1 class="head hea-dark">Kotosh</h1>
                    </div>
                    <p>
                    Ubicada a solo 5 kilómetros al oeste de la ciudad de Huánuco, se encuentra el templo de Kotosh, que data del periodo precerámico o arcaico final (11000–6600 a.c.). Su descubrimiento ocurrió en los inicios de la década de 1960, en un estudio realizado por arqueólogos japoneses, quienes fueron dirigidos por Seiichi Izumi, quien logró dejar ver que bajo una edificación llamada “Los Nichitos”, se halló lo que hoy se conoce como “El Templo de las Manos Cruzadas”, llamado así porque en una de sus paredes se encontró dos esculturas que representan un par de manos cruzadas.
                    </p>
                </div>
                <div class="image-group pad-rig">
                    <img src="https://portal.andina.pe/EDPFotografia3/thumbnail/2018/08/14/000525065M.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <hr>

    <section>
        <div class="container">
            <div class="res-info">
                <div class="image-group">
                    <img src="https://denomades.s3.us-west-2.amazonaws.com/blog/wp-content/uploads/2020/08/23173150/sacsayhuaman-768x432.jpg" alt="">
                </div>
                <div class="res-des pad-rig">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">C</span>uzco
                        </h2>
                        <h1 class="head hea-dark">Sacsayhuamán</h1>
                    </div>
                    <p>
                    El complejo arqueológico de Sacsayhuamán es el más grande dentro de la ciudad de Cusco. Aún así, se estima que la estructura actual representa tan solo un 40% de su tamaño original. En Sacsayhuamán encontrarás torreones, túneles y habitaciones construidas con imponentes rocas. ¡En tu visita no olvides pasar por los inmensos toboganes hechos de piedra donde te puedes deslizar!
                    Cómo llegar a Sacsayhuamán: Desde Plaza de Armas te diriges por la calle Suecia, luego Huaynapata y sigues por Resbalosa. Desde la Iglesia de San Cristóbal debes seguir la carretera hasta Sacsayhuamán. Te recomendamos tomar un taxi para llegar, o bien contratar nuestro City Tour Cusco, en donde además visitaremos otros templos y construcciones importantes de la ciudad.
 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <hr>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-about">
                    <h4>consultas</h4>
                    </div>
                    <p>
                        hice mi trabajo entregable con php laravel tarea senati sobre lugares turisticos ya voy mejorando cada vez mas con las clases presenciales, voy a hacer mas proyectos asi.
                    </p>
                </div>
                <div class="footer-div">
                    <div class="social-media">
                        <h4>encuentranos en</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>Noticias</h4>
                        <form action="" class="news-form">
                            <input type="text" class="news-input"
                            placeholder="Escribe tu email"
                            >
                            <button class="news-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>

        const selectElement = function(element) {
            return document.querySelector(element);
        }


        let menuToggle = selectElement('.menu-toggle');
        let body = selectElement('body');

        menuToggle.addEventListener('click', function(){
            body.classList.toggle('open');
        })

    </script>

    
</body>
</html>