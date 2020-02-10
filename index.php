<?php
/**
 * Página de Index
 *
 * @package Framework CCSS 2020
 * @version 1.0
 * @since Febrero 2020
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="assets/css/cajaStyle.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome-free-5.12.0-web/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">

    <title>CCSS\ | Caja Costarricense de Seguro Social</title>
</head>

<body class="light-theme">

    <!----------     Inicio Navbar    ---------->

    <header>
        <div class="navbar-fixed">
            <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                  <a id="logo-container" class="logo-fixed" href="index.php" >
                    <i  class="logo"> </i><span>CCSS</span> </a>
                   <ul class="right botonera botonera-fixed ">
                     <li> <a href="#"><i class="left btn-accesibilidad"> <img src="assets/images/navbar/disca.svg" style="height: 25px;">  </i></a></li>
                     <li><a href="javascript:void(0)" class="btn-menu">
                         <div class="toggle-wrap">
                         <span>Menú</span>
                           <span class="toggle-bar"></span>
                         </div>
                       </a>
                     </li>
                   </ul>
                </div>
            </nav>

            <!----------  Se incluye el menu principal  ---------->
            <div class="menu">
              <?php include 'inc/menu.php';?>
            </div>

        </div>
    </header>
    <!----------     Fin Megamenu    ---------->

    </div>
    <div class="dropserviciosdown">
        <button class="dropserviciosbtn"> <img src="assets/images/serviciosdigitales.svg" alt="" style="width: 200px; margin-left: 10%;  margin-top: 5%;">
          <br>
        <h7 style="color: white;  line-height: 22px; width: 250px;">Desplegá todos nuestros <br>servicios aquí!  <i class="material-icons">expand_more</i></h7>
      </button>
        <div class="dropserviciosdown-content" center>
            <a center href="#">Citas Medicas</a>
            <a center href="#">Oficina Virtual</a>
            <a center href="#">Pensiones</a>
        </div>
    </div>

    <!----------     Inicio Slider    ---------->

    <div class="slider">
        <ul class="slides">
            <li>
                <img src="assets/images/slider/sli2.jpg">
                <div class="caption right-align">
                    <h4>En CCSS nos preocupamos por <br> el bienestar de su familia.</h4>
                </div>
            </li>
            <li>
                <img src="assets/images/slider/corazonSlider1.jpg">
                <div class="caption right-align ">
                    <h4>Disfrute de todos los beneficios que <br> le brinda el sitio virtual de CCSS</h4>
                </div>
            </li>
            <li>
                <img src="assets/images/slider/sli3.jpg">
                <!-- random image -->
                <div class="caption right-align">
                    <h4>Recuerde pagar sus cuatas patronales a tiempo.</h4>
                </div>
            </li>
        </ul>
    </div>
    <!----------     Final Slider       ---------->

    <!----------     Inicio Parallax    ---------->
    <div class="parallax-container valign-wrapper">

        <div class=" container-fluid  ">
            <div class="row sectionservices">
                <div class="headerservicios col s12 m12 l5 xl4 light center">
                    <h4 class="headservicios1 center ">Nuestros Servicios Digitales.</h4>
                    <hr>
                    <br><br>
                    <h6 class="header ">Ponemos a su disposición nuestras plataformas digitales con el fin de agilizar procesos y simplificar su vida.</h6>
                </div>

                <div class="col s12 m12 l7 xl8  ">
                    <div class="row">
                        <div class="columnaiconos  col s12 m4 l6 xl6">
                            <div class="icon-block">
                                <div id="options_0" class="options_calculadora">
                                    <i class=" options_culculadora_icon">
                  <img class="iconosservicios" src="assets/images/icons/calculator.svg">
                </i>
                                    <div class="titulosserv">
                                        <h7>Calculadora de Cuotas</h7>
                                    </div>


                                </div>
                            </div>
                        </div>



                        <div class="columnaiconos col s12 m4 l6 xl6 ">
                            <div class="icon-block">
                                <div id="options_0" class="options_incapacidades">
                                    <i class=" options_incapacidades_icon">
                  <img class="iconosservicios" src="assets/images/icons/incapacidades.svg">
                </i>
                                    <div class="titulosserv">
                                        <h7>Consulta de ncapacidades</h7>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="columnaiconos col s12 m4 l6 xl6 ">
                            <div class="icon-block">
                                <div id="options_0" class="options_morosidad">
                                    <i class=" options_morosidad_icon">
                  <img class="iconosservicios" src="assets/images/icons/bill.svg">
                </i>
                                    <div class="titulosserv">
                                        <H7>Consulta de Morosidad</H7>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="columnaiconos col s12 m4 l6  xl6">
                            <div class="icon-block">
                                <div id="options_0" class="options_agenda">
                                    <i class=" options_agenda_icon">
                  <img class="iconosservicios" src="assets/images/icons/event.svg">
                </i>
                                    <div class="titulosserv">
                                        <h7>Agenda Patronal</h7>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="columnaiconos col s12 m4 l6 xl6">
                            <div class="icon-block">
                                <div id="options_0" class="options_derechos">
                                    <i class=" options_derechos_icon">
                  <img class="iconosservicios" src="assets/images/icons/files-and-folders.svg">
                </i>
                                    <div class="titulosserv">
                                        <h7>Validación de Derechos</h7>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="columnaiconos col s12 m4 l6 xl6 ">
                            <div class="icon-block">
                                <div id="options_0" class="options_aseguramiento">
                                    <i class=" options_aseguramiento_icon">
                  <img class="iconosservicios" src="assets/images/icons/staff.svg">
                </i>
                                    <div class="titulosserv">
                                        <h7>Aseguramiento Contributivo</h7>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="columnaiconos col s12 m4 l6 xl6 ">
                            <div class="icon-block">
                                <div id="options_0" class="options_aseguramiento">
                                    <i class=" options_aseguramiento_icon">
                  <img class="iconosservicios" src="assets/images/icons/document.svg">
                </i>
                                    <div class="titulosserv">
                                        <h7>Aseguramiento Contributivo</h7>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="assets/images/servicios-digitales.jpg"></div>

    </div>
    <!----------     Final Parallax e iconos de parallax    ---------->

    <!----------     Inicio Banner Informativo    ---------->
    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center" data-aos="fade-up">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4 class="titulo">Actualizamos Nuestra Web</h4>
                    <hr>
                    <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien
                        id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed
                        ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                </div>
            </div>
        </div>
    </div>

    <!----------     Final Baner Informativo    ---------->

    <!----------     Inicio LinksDirectos    ---------->
    <div class="linksdirectos">
        <div class="row">
            <div class="imagenlinksdirectos links col s12 m6" style="background-image:url('assets/images/fam.jpg');"></div>
            <div class="titulolinksdirectos col s12 m6">
                <h4 data-aos="zoom-in-down">Simplificación de Trámites</h4>
                <hr>

                <br><br>
                <div class="linksdirectoslista container">
                    <a href="#">
                        <h5 data-aos="zoom-in-up"> <i class="material-icons">chevron_right</i> Planes de Mejora</h5>
                    </a><br>
                    <a href="#">
                        <h5 data-aos="zoom-in-up"> <i class="material-icons">chevron_right</i> Aseguramiento Contributivo</h5>
                    </a><br>
                    <a href="#">
                        <h5 data-aos="zoom-in-up"> <i class="material-icons">chevron_right</i> Firma Digital</h5>
                    </a><br>
                    <a href="#">
                        <h5 data-aos="zoom-in-up"> <i class="material-icons">chevron_right</i> Validar Derechos</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!----------     Final Simplificacion de transmites/linksdirectos    ---------->

    <!----------     Seccion informativo/noticias    ---------->
    <section class="noticias">
        <div class="row">
            <div class="col s12 m12 xl12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h4>Resumen Noticias</h4>
                <hr>
                <br> <br>
            </div>
            <div class="noticia destacada col s12 m12 l6" style="background-image:url('assets/images/noticias/noticia-1.jpg');">
                <a href="https://www.ccss.sa.cr/noticias/blog_noticia?5-ideas-claves-para-cumplir-los-propositos-de-ano-nuevo">
                    <div class="contenido">
                        <h5>04 Febrero, 2020</h5>
                        <h4>Uno de cada 5 ticos podría tener cáncer en algún momento de su vida</h4>
                        <p>Leer más</p>
                    </div>
                    <div class="overlay"></div>
                </a>
            </div>

            <div class="noticia anterior col s12 m6 l3" style="background-image:url('assets/images/noticias/noticia-2.jpg');">
                <a href="#">
                    <div class="contenido">
                        <h5>03 Febrero, 2020</h5>
                        <h4>Nueva terapia ataca el dolor en pacientes con cáncer</h4>
                        <p>Leer más</p>
                    </div>
                    <div class="overlay"></div>
                </a>
            </div>
            <div class="noticia anterior col s12 m6 l3" style="background-image:url('assets/images/noticias/noticia-3b.jpg');">
                <a href="#">
                    <div class="contenido">
                        <h5>20 Enero, 2020</h5>
                        <h4>CCSS espera conceder este año 11 mil nuevas pensiones no contributivas</h4>
                        <p>Leer más</p>
                    </div>
                    <div class="overlay"></div>
                </a>
            </div>

            <div class="noticia col anterior col s12 m6 l3" style="background-image:url('assets/images/noticias/noticia-3.jpg');">
                <a href="#">
                    <div class="contenido">
                        <h5>15 Enero, 2020</h5>
                        <h4>5 ideas claves para cumplir los propósitos de año nuevo</h4>
                        <p>Leer más</p>
                    </div>
                    <div class="overlay"></div>
                </a>
            </div>

            <div class="noticia col anterior col s12 m6 l3" style="background-image:url('assets/images/noticias/noticia-5.jpg');">
                <a href="#">
                    <div class="contenido">
                        <h5>04 Enero, 2020</h5>
                        <h4 class="cs-text-truncate">Junta Directiva de la CCSS acuerda objetar proyecto de ley que pretende que trabajadores retiren recursos de pensión complementaria</h4>
                        <p>Leer más</p>
                    </div>
                    <div class="overlay"></div>
                </a>
            </div>
        </div>
    </section>
    <!----------     Final noticias    ---------->


    <!----------    Inicio de zona de Mapa y Contactenos   ---------->
    <div class="mapa">
        <div class="row">
            <div class="col s12 m6 l6" style="text-align: center; margin-top: 25vh;">
                <h4>Horario y Ubicación</h4>
                <hr>
                <br><br>
                <h6 style="letter-spacing: 2px; line-height: 1.8;">Oficinas centrales <br> Lunes-Viernes de 7:00am a 4:00pm<br> Av. Segunda entre calles 5 y 7<br> Central Telefonica: 2539-0000</h6>
            </div>
            <div class="col s12 m6 l6" style="background-size: cover;  height: 50%; width:50%;" data-aos="fade-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.015736160357!2d-84.07798738510151!3d9.932647092897337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e366e902b129%3A0xd77689b5536197d4!2sCaja%20Costarricense%20de%20Seguro%20Social!5e0!3m2!1ses-419!2scr!4v1580482299623!5m2!1ses-419!2scr"
                    width="850vh" height="610vh" frameborder="0" style="border:0; background-size: cover;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>


    <!----------     Final Zona de Mapa y contactenos    ---------->

    <!----------     Inicio Zona de Contactenos    ---------->

    <div class='section content'>
        <div class="cuadrado"></div>
    </div>

    <div class="contactenos center">
        <h4>Contáctenos</h4>
        <hr>
        <h5 class="header col12 s12 light center"></h5>Ponemos a disposición el siguiente formulario para que nos exprese sus consultas sobre algún tema en particular.</h5>
        <div class="row contactenos" data-aos="flip-up">

        <form method="post" action="bat/rd-mailform.php" class="mailform off2 rd-mailform">
                            
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s4">
                        <input id="cedula" type="text" class="validate">
                        <label for="cedula">Cédula</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="nombre" type="text" class="validate">
                        <label for="nombre">Nombre Completo</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="asunto" type="text" class="validate">
                        <label for="asunto">Asunto</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="correo" type="text" class="validate">
                        <label for="correo">Correo Electrónico</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="telefono" type="text" class="validate">
                        <label for="telefono">Teléfono</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Mensaje</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mfControls col s12">
                        <button class="btn waves-effect waves-light cs-blue" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!----------     Final Zona de Contactenos   ---------->



    <!----------     Inicio Zona de Directorios    ---------->

    <div id="contact" class="contact" style="background-image:url('assets/images/directorio.jpg'); background-size: cover; height:100%; ">
        <div class="overlay"></div>
        <div class="rgba-black-strong py-5">
            <div class="container cs-tarjetas ">
                <div class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <!--   Icon Section   -->
                    <div class="row">
                        <div class="col s12 m6 l3">
                            <div class="icon-block" data-aos="zoom-in">
                                <h2 class="center light-blue-text"><i class="material-icons cs-material-icons-circle">phone_iphone</i></h2>
                                <div class="card-panel teal  cs-card-panel">
                                    <h5 class="center">Directorio telefonico
                                    </h5>
                                    <p class="light center">Catálogo telefónico de las diferentes unidades institucionales.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="icon-block" data-aos="zoom-in">
                                <h2 class="center light-blue-text"><i class="material-icons cs-material-icons-circle">dns</i></h2>
                                <div class="card-panel teal  cs-card-panel">
                                    <h5 class="center">Directorio Electronico
                                    </h5>
                                    <p class="light center">Correos electrónicos para recepción de documentos con firma digital.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="icon-block" data-aos="zoom-in">
                                <h2 class="center light-blue-text"><i class="material-icons cs-material-icons-circle">question_answer</i></h2>
                                <div class="card-panel teal  cs-card-panel">
                                    <h5 class="center">Directorio Electronico
                                    </h5>
                                    <p class="light center">Correos electrónicos para recepción de documentos con firma digital.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="icon-block" data-aos="zoom-in">
                                <h2 class="center light-blue-text"><i class="material-icons cs-material-icons-circle">supervisor_account</i></h2>
                                <div class="card-panel teal  cs-card-panel">
                                    <h5 class="center">Preguntas Frecuentes
                                    </h5>

                                    <p class="light center">Apartado con las respuestas a las consultas y/o dudas más frecuentes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!----------     Final Zona de directorios     ---------->

    <!----------  Se incluye el footer  ---------->
      <?php include 'inc/footer.php';?>

</body>

</html>
