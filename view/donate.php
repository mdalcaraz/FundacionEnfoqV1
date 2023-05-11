<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/styleDonate.css" />
    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/138553a863.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../assets/img/logoFondoBlanco.png">
    <title>
        <?php echo $WEB['Name']; ?>
    </title>
</head>

<body>
    <!-- <MARCOS> -->
    <nav class="nav">

        <a href="./" class="link_nav__logo"><img class="nav__logo" src="./assets/img/logo.png" alt="Logo"></a>

        <ul class="nav__lista">
            <a href="./#Inicio">
                <li class="li-indicador">Inicio</li>
            </a>
            <a href="./#Conocenos">
                <li class="li-indicador">Conocenos</li>
            </a>
            <a href="./#AreasDetrabajo">
                <li class="li-indicador">Áreas de Trabajo</li>
            </a>
            <a href="./#Participa">
                <li class="li-indicador">Participa</li>
            </a>
            <a href="#">
                <li class="li-indicador">Donar</li>
            </a>
        </ul>

    </nav>

    <!-- </MARCOS> -->
    <main class="l-main container">

        <article class="article-container">

            <section class="article-section">
                <div class="bank-data-container">
                    <div class="bank-data-title-container ">
                        <h2 class="title-text">Datos Bancarios</h2>
                    </div>
                    <div class="bank-data-text-container">
                        <p><b>BBVA </b> (Banco Francés)</p>
                        <p><b>Cta. Cte. en Pesos</b></p>
                        <p><b>Alias: </b>DONAR.ENFOQ</p>
                        <p><b>CBU: </b>0170283720000001225325</p>
                        <p><b>RAZON SOCIAL: </b>FUNDACION ENFOQ</p>
                        <p><b>TEL: </b>(+549) 2616678903</p>
                        <p>Te agradecemos que completes el formulario con tus datos o envíes el comprobante de
                            la transacción por Mail a: contacto@fundacionenfoq.org WhatsApp a: (+549)
                            2616678903.</p>
                    </div>
                </div>
            </section>

            <section class="article-section">

                <form class="donation-form" id="donationForm">

                    <div class="donation-form-input">
                        <label for="name">Nombre y Apellido</label>
                        <input type="text" name="name" id="donationName">
                    </div>

                    <div class="donation-form-input-phone">
                        <div class="donation-form-input donation-form-input-area">
                            <label for="prefix">Prefijo</label>
                            <input type="text" id="donationPhonePrefix" name="prefix" value="+54" size="3">
                        </div>

                        <div class="donation-form-input donation-form-input-area">
                            <div>
                                <label for="area">Area</label>
                            </div>
                            <div>
                                <input type="text" name="area" id="donationPhoneArea" maxlength="4" size="2">
                            </div>
                        </div>

                        <div class="donation-form-input donation-form-input-phone-number">
                            <div>
                                <label for="phone">Telefono</label>
                            </div>
                            <div>
                                <input type="text" name="phone" maxlength="7" size="10" id="donationPhone">
                            </div>
                        </div>
                    </div>

                    <div class="donation-form-input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="donationEmail">
                    </div>

                    <div class="donation-form-input">
                        <div>
                            <label for="info">
                                <p>Quiero recibir informacion de la fundacion por correo</p>
                            </label>
                        </div>
                        <div>
                            <input type="checkbox" name="info" id="donationInfo" class="donation-form-checkbox">
                        </div>
                    </div>
                    <div class="donation-form-errors" id="donationFormErorrs">
                    </div>

                    <div class="donation-form-input donation-form-button-container">
                        <button class="donation-form-button" id="donationFormSubmit" disabled>ENVIAR</button>
                    </div>
                </form>
            </section>

            <section class="article-section">
                <div class="donation-reminder">
                    <p>Te recordamos que las donaciones a Fundacion EnfoQ son deducibles del impuesto a las Ganancias
                        según el Art. 81 de la Ley N°20.628.</p>
                </div>
            </section>

        </article>


    </main>
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




    <script type="module" src="assets/js/app.js"></script>
</body>

</html>