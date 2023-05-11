<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/app.css" />

    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/138553a863.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../assets/img/logoFondoBlanco.png">
    <title>
        <?php echo $WEB['Name']; ?>
    </title>
</head>

<body>
    <!--===== Nav =====-->

    <!-- <MARCOS> -->
    <nav class="nav">

        <a href="#Inicio" class="link_nav__logo"><img class="nav__logo" src="./assets/img/logo.png" alt="Logo"></a>

        <ul class="nav__lista">
            <a href="#Inicio">
                <li class="li-indicador">Inicio</li>
            </a>
            <a href="#Conocenos">
                <li class="li-indicador">Conocenos</li>
            </a>
            <a href="#AreasDetrabajo">
                <li class="li-indicador">Áreas de Trabajo</li>
            </a>
            <a href="#Participa">
                <li class="li-indicador">Participa</li>
            </a>
            <a href="./Donar" target="_Blank">
                <li class="li-indicador">Donar</li>
            </a>
        </ul>

    </nav>

    <!-- </MARCOS> -->

    <!-- <Agustin> -->
    <!--===== banner =====-->
    <div id='Inicio'>
        <section class="home" id='H'>
            <div class="box__banner">
                <img class="banner__img" id="banner__img" src="assets/img/EnfoQ.jpg" alt="Fundacion Enfoque">
            </div>
        </section>
    </div>
    <main class="l-main container">
        <!--===== ABOUT =====-->
        <div class="container" id='Conocenos'>
            <section class="about section" id="about rotulo">
                <div class="about__container bd-grid">
                    <div class="about__container-text">
                        <h2 class="section-title">Conocenos</h2>
                        <div class="circles"></div>
                        <p class="about__text">Somos una institución privada sin ánimo de lucro, que trabaja por la
                            <span>inclusión y la
                                promoción de la igualdad</span>, potenciando el talento como herramienta de inclusión y
                            desarrollo para personas en situación de vulnerabilidad por razones de índole
                            personal, educativa, capacidades diferentes, salud, género o entornos sociales, que las
                            colocan
                            en inferioridad de condiciones o directamente, las alejan de la posibilidad de obtener
                            <span>
                                un bienestar equilibrado y sostenible.
                            </span>
                        </p>
                    </div>
                    <div>
                        <img src="assets/img/conocenos.png" class="about__img" alt="about">
                    </div>

                </div>

            </section>
            <section>
                <div class="info container">
                    <h1 class="info__titulo">Nos enfocamos en el <span class="info__span-bold"> desarrollo integral y
                            sostenible de las personas</span></h1>
                    <h2 class="info__subtitulo">Acompañamos a cada persona en su procesos de desarrollo y bienestar.
                    </h2>
                </div>
                <div class="info-container container grid-Card">
                    <div class="cards-info">
                        <img class="img-nuestro" src="assets/img/mision.png">
                        <h1>Nuestra <span>Mision</span></h1>
                        <p>Brindar herramientas para el <span>fortalecimiento de las capacidades intelectuales y emocionales</span> propias de cada persona, mediante la movilización de los propios recursos y los de su entorno.</p>
                    </div>
                    <div class="cards-info">
                        <img class="img-nuestro" src="assets/img/vision.png">
                        <h1>Nuestra <span>Vision</span></h1>
                        <p>Construir una <span>cultura de solidaridad centrada en la persona</span> y la necesidad de lograr mejores y más dignas condiciones de vida, de trabajo, de igualdad de derechos y participación social para todos.</p>
                    </div>
                    <div class="cards-info">
                        <img class="img-nuestro" src="assets/img/valores.png">
                        <h1>Nuestros <span>Valores</span></h1>
                        <p>Somos una organización ágil y eficiente, dando protagonismo a la sociedad civil y <span> promoviendo el verdadero desarrollo sostenible.</span>
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <!-- </Agustin> -->

        <!-- <Agustin> -->
        <!-- ===== WORK =====-->
        <div id='AreasDetrabajo'>
            <section class="work section container" id="work">
                <h2 class="section-title ">Áreas de tabajo</h2>
                <div class="circles"></div>
                <!-- 1 -->
                <div class="work__container bd-grid">
                    <div class="work__img ">
                        <img alt="sliderImage" src="assets/img/inclusion.png">
                    </div>
                    <div class="work__text">
                        <h1 class="work__text-titulo">Desarrollo Inclusivo</h1>
                        <h2 class="work__text-subtitulo">Cooperación al bienestar psiquicio de las personas.</h2>

                        <ul class="work__listado">
                            <p>Mediante programas y proyectos provemos:</p>
                            <li>
                                <p>
                                    el desarrollo humano, social y ecónomico, acorde con la dignidad de las persona
                                </p>
                            </li>
                            <li>
                                <p>
                                    respeto por la identidad cultural grupo sociales
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 2 -->
                <div class="work__container bd-grid hidden">
                    <div class="work__img ">
                        <img alt="sliderImage" src="assets/img/Slide2.png">
                    </div>
                    <div class="work__text">
                        <h1 class="work__text-titulo">Educación</h1>
                        <h2 class="work__text-subtitulo">Cooperación Cultural y Educativa:

                        </h2>

                        <ul class="work__listado">
                            <li>
                                <p>
                                    incentivando el acceso a la educación de personas de escasos recursos;
                                </p>
                            </li>
                            <li>
                                <p>
                                    en los diferentes niveles educativos: Primario, Secundario, Terciario, Formación
                                    Profesional y Educación Universitaria
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 3 -->
                <div class="work__container bd-grid hidden">
                    <div class="work__img ">
                        <img alt="sliderImage" src="assets/img/Slide3.png">
                    </div>
                    <div class="work__text">
                        <h1 class="work__text-titulo">Formación y
                            Capacitación</h1>
                        <h2 class="work__text-subtitulo">Voluntariado y Acción Social: </h2>

                        <ul class="work__listado">
                            <p>Mediante programas y proyectos provemos:</p>
                            <li>
                                <p>
                                    el desarrollo humano, social y ecónomico, acorde con la dignidad de las persona
                                </p>
                            </li>
                            <li>
                                <p>
                                    respeto por la identidad cultural grupo sociales
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 4 -->
                <div class="work__container bd-grid hidden">
                    <div class="work__img ">
                        <img alt="sliderImage" src="assets/img/Slide4.png">
                    </div>
                    <div class="work__text">
                        <h1 class="work__text-titulo">Asesoramiento personal, empresarial e institucional
                        </h1>
                        <h2 class="work__text-subtitulo">Educación para el desarrollo personal y emocional de la
                            Ciudadanía
                            Global:
                        </h2>

                        <ul class="work__listado">
                            <li>
                                <p>
                                    que brinde herramientas para el autoconocimiento;
                                </p>
                            </li>
                            <li>
                                <p>
                                    con actitudes y valores capaces de generar una cultura solidaria.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <section class="paginacion">
                    <ul>
                        <li>
                            <p class="num slideAct">1</p>
                        </li>
                        <li>
                            <p class="num ">2</p>
                        </li>
                        <li>
                            <p class="num ">3</p>
                        </li>
                        <li>
                            <p class="num ">4</p>
                        </li>
                    </ul>
                </section>

            </section>
            <!-- </Agustin> -->
        </div>
        <!-- <Agustin> -->
        <!--===== CONTACT =====-->
        <section class="container participar" id="Participa">
            <h2 class="section-title">¿Cómo puedo participar?</h2>
            <div class="circles"></div>
            <div class="participar--box">
                <div class="participar--card">
                    <img class="participar--img" alt="hombre levantando la mano" src="assets/img/hombre.png">
                    <h1>Voluntario</h1>
                    <p>Si quieres colaborar con tu tiempo poniendo tus habilidades y competencias al servicio de la fundacion, podes comunicarte con nosotros: <span>contacto@fundacionenfoq.org</span> </p>

                </div>
                <div class="participar--card">
                    <img class="participar--img" alt="donacion aportar" src="assets/img/Donante.png">
                    <h1>Donante Individual</h1>
                    <p>Sumate como padrino o madrina de un estudiante o colabora con el importe que quieras y
                        puedas, tu aporte nos permite llegar a cada vez mas jovenes con nuestros programas</p>
                </div>
                <div class="participar--card">
                    <div class="particiar--card__flex">
                        <img class="participar--img__flex" alt="empresa" src="assets/img/EMPRESA.png">
                        <h2>Empresa</h2>
                    </div>
                    <ul class="participar--ul">
                        <div>
                            <li>
                                <p>
                                    Sumate con tu empresa como Padrino Coporativo.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Apadriná una escuela completa acompañando el desarrollo del grupo.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ofrecé tu empresa como espacio de práctica educativa.
                                </p>
                            </li>
                        </div>
                        <div>
                            <li>
                                <p>
                                    Como voluntario brindá capacitaciones en temas de inserción laboral.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Contrata jóvenes a traves del Servicio de Empleo
                                </p>
                            </li>
                        </div>

                    </ul>
                </div>
                <div class="participar--card">
                    <div class="particiar--card__flex">
                        <img class="participar--img__flex" src="assets/img/instituto.png">
                        <h2>Instituciones Educativas</h2>
                    </div>
                    <ul class="participar--ul">
                        <div>
                            <li>
                                <p>
                                    Canalizando sus acciones solidarias y/o curriculares dentro de los programas de la Fundación
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ayudándonos a difundir nuestras campañas y generando nuevas que aporten insumos para nuestros programas.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Organizando eventos con las familias que generen fondos para financiar algún programa.
                                </p>
                            </li>
                        </div>
                        <div>
                            <li>
                                <p>
                                    Brindando las instalaciones para realizar eventos de recaudación y/o conferencias de interés.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Abriendo las puertas de la institución para invitar a las familias a sumarse como voluntarios en los programas que la Fundación ofrece.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Abriendo espacios a la Fundación para la promoción y desarrollo de programas inclusivos.
                                </p>
                            </li>
                        </div>

                    </ul>
                </div>
            </div>
        </section>
        <!-- </Agustin> -->
    </main>

    <!--===== FOOTER =====-->
    <footer class="footer">

        <h2 class="h2footer">Contacto</h2>
        <div id="contentFooter">
            <div class="divuno__conten">
                <ul class="colFooter">
                    <li class="liFooter"><i class="fa-brands fa-whatsapp fa-lg"></i><a href="" class="linkFooter"><span>(+549) 2616678903</span></a></li>
                    <li class="liFooter"><i class="fa-sharp fa-solid fa-location-dot"></i><a href="" class="linkFooter"><span>9 de julio 1190 - 1P Of.8 - Ciudad de Mendoza</span></a></li>
                    <li class="liFooter"><i class="fa-regular fa-envelope fa-lg"></i><a href="" class="linkFooter"><span>contacto@fundacionenfoq.org</span></a></li>
                </ul>
                <ul class="colFooter">
                    <li class="liFooter"><i class="fa-brands fa-linkedin fa-lg"></i><a href="" class="linkFooter"><span>Fundacion-enfoq</span></a></li>
                    <li class="liFooter"><i class="fa-brands fa-instagram fa-lg"></i><a href="" class="linkFooter"><span>Fundacion.enfoq</span></a></li>
                    <li class="liFooter"><i class="fa-brands fa-facebook-f fa-lg"></i><a href="" class="linkFooter"><span>Fundacion Enfoq</span></a></li>
                </ul>
            </div>
            <div class="frase">
                <h3><i>Creamos valor para que lo esencial se vuelva visible</i></h3>
            </div>
    </footer>





    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/scroll.js"></script>
</body>

</html>