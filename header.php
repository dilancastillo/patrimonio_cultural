<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrimonio cultural inmaterial</title>
    <!-- Íconos de Font Awesome -->
    <link rel="stylesheet" href="./css/all.css">
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Archivo de librería JQuery -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <!-- Archivo javascript personalizado -->
    <script src="./js/main.js"></script>
    <style>
        @import url("./css/fonts.css");

        html,
        body {
            margin: 0%;
            box-sizing: border-box;
            overflow-x: hidden;
        }

        :root {
            /* Colores de la aplicación */
            --text-gray: #3f4954;
            --text-light: #686666da;
            --bg-color: #0f0f0f;
            --white: #ffffff;
            --midnight: #104f55;

            /* Degradado de color */
            --sky: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);

            /* Familia de fuentes de la aplicación */
            --NunitoSans: "NunitoSans", cursive;
            --HindSiliguri: "HindSiliguri", cursive;
        }

        /* ------------Clases globales --------------------*/
        a {
            text-decoration: none;
            color: var(--text-gray);
        }

        .flex-row {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        ul {
            list-style-type: none;
        }

        h1 {
            font-family: var(--HindSiliguri);
            font-size: 2.5rem;
        }

        h2 {
            font-family: var(--HindSiliguri);
        }

        h3 {
            font-family: var(--NunitoSans);
            font-size: 1.3rem;
        }

        button.btn {
            border: none;
            border-radius: 2rem;
            padding: 1rem 3rem;
            font-size: 1rem;
            font-family: var(--NunitoSans);
            cursor: pointer;
        }

        span {
            font-family: var(--NunitoSans);
        }

        .container {
            margin: 0 5vw;
        }

        .text-gray {
            color: var(--text-gray);
        }

        /* -----x-------Clases globales -------------x-----*/

        /* -------------Barra de navegación ----------------*/
        .nav {
            background: white;
            padding: 0 2rem;
            height: 0rem;
            min-height: 10vh;
            overflow: hidden;
            transition: height 1s ease-in-out;
        }

        .nav .nav-menu {
            justify-content: space-between;
        }

        .nav .toggle-collapse {
            position: absolute;
            top: 0%;
            width: 90%;
            cursor: pointer;
            display: none;
        }

        .nav .toggle-collapse .toggle-icons {
            display: flex;
            justify-content: flex-end;
            padding: 1.7rem 0;
        }

        .nav .toggle-collapse .toggle-icons i {
            font-size: 1.4rem;
            color: var(--text-gray);
        }

        .collapse {
            height: 30rem;
        }

        .nav .nav-items {
            display: flex;
            margin: 0;
        }

        .nav .nav-items .nav-link {
            padding: 1.6rem 1rem;
            font-size: 1.1rem;
            position: relative;
            font-family: var(--NunitoSans);
            font-size: 1.1rem;
        }

        .nav .nav-items .nav-link:hover {
            background-color: var(--midnight);
        }

        .nav .nav-items .nav-link:hover a {
            color: var(--white);
        }

        .nav .nav-brand a {
            font-size: 1.6rem;
            padding: 1rem 0;
            display: block;
            font-family: var(--HindSiliguri);
            font-size: 1.6rem;
        }

        .nav .social {
            padding: 1.4rem 0;
        }

        .nav .social i {
            padding: 0 .2rem;
        }

        .nav .social i:hover {
            color: #a1c4cf;
        }

        /* --------x-----Barra de navegación ----------x----*/

        /* --------------------Contenido principal--------------------------- */

        /* ----------------Título del proyecto---------------------- */
        main .site-title {
            background: url('./assets/background-image.jpg');
            background-size: cover;
            height: 110vh;
            display: flex;
            justify-content: center;
        }

        main .site-title .site-background {
            padding-top: 10rem;
            text-align: center;
            color: var(--white);
        }

        main .site-title h1,
        h3 {
            margin: .3rem;
        }

        main .site-title .btn {
            margin: 1.8rem;
            background: var(--sky);
        }

        main .site-title .btn:hover {
            background: transparent;
            border: 1px solid var(--white);
            color: var(--white);
        }

        /* ----------x-----Título del proyecto--------x------------- */

        /* -------------------------Tarjetas de impacto-------------------- */

        /* main .impacto {
            background: url('./assets/Abract01.png');
            background-repeat: no-repeat;
            background-position: right;
            height: 100vh;
            width: 100%;
            background-size: 65%;
        } */

        main .impacto .impacto-post {
            padding-top: 6rem;
        }

        main .impacto-post .impacto-content {
            display: flex;
            flex-direction: column;
            text-align: center;
            width: 80%;
            margin: 3rem 2rem;
            box-shadow: 0 15px 20px rgba(0, 0, 0, 0.2);
        }

        main .impacto-content .impacto-title {
            padding: 2rem 0;
        }

        main .impacto-content .paragraph-impacto {
            padding: .7rem 2rem;
            margin: .5rem;
            display: block;
        }

        section .container .owl-nav {
            position: absolute;
            top: 0%;
            margin: 0 auto;
            width: 100%;
        }

        .owl-nav .owl-prev .owl-nav-prev,
        .owl-nav .owl-next .owl-nav-next {
            color: var(--text-gray);
            background: transparent;
            font-size: 2rem;
        }

        .owl-theme .owl-nav [class*='owl-']:hover {
            background: transparent;
            color: var(--midnight);
        }

        .owl-theme .owl-nav [class*='owl-'] {
            outline: none;
        }

        /* ----------x---------------Tarjetas de impacto----------x-------- */

        /* ------------------Contenido de la página------------------- */

        main .site-content {
            display: grid;
            grid-template-columns: 70% 30%;
        }

        main .post-content {
            width: 100%;

        }

        main .site-content .post-content>.post-image,
        .post-title {
            padding: 1rem 2rem;
            position: relative;
        }

        /* main .site-content .post-content>.post-image,
        .post-info {
            background: var(--sky);
            padding: 1rem;
            position: absolute;
            bottom: 0%;
            left: 20vw;
            border-radius: 3rem;
        } */

        main .site-content .post-content>.post-image>div {
            overflow: hidden;
        }

        main .site-content .post-content>.post-image .img {
            width: 100%;
            transition: all 1s ease;
        }

        main .site-content .post-content>.post-image .img:hover {
            transform: scale(1.3);
        }


        /* ------------x------Contenido de la página------------x----- */

        /* -----------x---------Contenido principal------------x--------------- */

         /* ------------------------Footer------------------------------- */

         footer.footer {
             height: 100%;
             background: var(--bg-color);
             position: relative;
         }

         footer.footer .container {
             display: grid;
             grid-template-columns: repeat(4, 1fr);
         }

         footer.footer .container > div {
             flex-grow: 1;
             flex-basis: 0;
             padding: 3rem .9rem;
         }

         footer.footer .container .about-us h2 {
             color: var(--white);
         }

         footer.footer .impacto-footer div > img {
             display: inline-block;
             width: 25%;
             height: 50%;
             margin: .3rem .4rem;
         }

         footer.footer .follow div i {
                color: var(--white);
                padding: 0 .4rem;
         }

         footer.footer .rights {
            justify-content: center;
            font-family: var(--NunitoSans);
         }

         footer.footer .rights h4 a {
             color: var(--white);
         }

         footer.footer .move-up {
             position: absolute;
             right: 6%;
             top: 50%;
         }

         footer.footer .move-up span {
             color: var(--midnight);
         }

         footer.footer .move-up span:hover {
             color: var(--white);
             cursor: pointer;
         }

        /* ---------------x---------Footer----------------x-------------- */

        /* -----------------Ventana gráfica menor o igual a 750px --------------------*/
        @media only screen and (max-width:750px) {

            .nav .nav-menu,
            .nav .nav-items {
                flex-direction: column;
            }

            .nav .toggle-collapse {
                display: initial;
            }
        }

        /* ---------x--------Ventana gráfica menor o igual a 750px ------------x------*/
    </style>
</head>

<body>

    <!-- --------------------------- Barra de navegación ----------------------------- -->
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="" class="text-gray">Patrimonio cultural inmaterial</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="">Inicio</a>
                    </li>
                    <li class="nav-link">
                        <a href="#impacto">Impacto</a>
                    </li>
                    <li class="nav-link">
                        <a href="#objetivo">Objetivo</a>
                    </li>
                    <li class="nav-link">
                        <a href="">Lorem</a>
                    </li>
                    <li class="nav-link">
                        <a href="">Lorem</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href=""><i class="fas fa-leaf"></i></a>
                <a href=""><i class="fas fa-seedling"></i></a>
                <a href=""><i class="fas fa-leaf"></i></a>
                <a href=""><i class="fas fa-seedling"></i></a>
            </div>
        </div>
    </nav>
    <!-- -----------x---------------- Barra de navegación ----------------x----------- -->