
<?php
/**
 * Template para las páginas del sitio
 *
 * @package CCSS 2020
 * @version 1.0
 * @since Febrero 2020
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

  <title>CCSS | Transparencia</title>
</head>

<body>

<section class="encabezado_area gradient-background-overlay" style="background-image: url('bg-transparencia.jpg');">

 <a id="logo-container" class="logo-fixed" href="index.php" ><i  class="logo"> </i><span>CCSS</span> </a>

  <ul class="right botonera botonera-fixed ">
    <li> <a href="#"><i class="left btn-accesibilidad"> <img src="images/navbar/disca.svg" style="height: 25px;">  </i></a></li>
    <li><a href="javascript:void(0)" class="btn-menu">
        <span>Menú</span>
        <div class="toggle-wrap">
          <span class="toggle-bar"></span>
        </div>
      </a>
    </li>
  </ul>

  <div class="menu">
    <?php include 'inc/menu.php';?>
  </div>

    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col s6 m12 l12">
                <div class="encabezado_area_content center">
                    <div class="sticky encabezado_content">
                        <h2>Transparencia</h2>
                       <nav class="breadcrumb-page">
          					    <div class="nav-wrapper">
          					      <div class="col s12">
          					        <a href="ccss.html" class="breadcrumb">Inicio</a>
          					        <a href="#!" class="breadcrumb current">Transparencia</a>

          					      </div>
          					    </div>
          					  </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<section class="introduccion">
  <div class="container">

    <div class="row center pt-3">
        <div class="col l12 offset-lg-1">
          <h2 >Estamos en el <i class="fas fa-heart" style="color: red;display:inline;font-size:45px;"></i> de la gente</h2>
          <h3>79 años aportando al desarrollo de Costa Rica</span></h3>

        </div>
      </div>

    <div class="row">
      <div class="col m12">
        <p>La Caja es una sola institución, diseminada a lo largo y ancho del territorio nacional la cual, por medio de sus servicios de salud, de pensiones y de prestaciones sociales, produce bienestar a la población costarricense.</p>
      </div>
    </div>

  </div>
</section>

<section>
    <div class="lista-enlaces">
        <div class="row mt-60">
            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                    <a href="https://www.ccss.sa.cr/audiencias">
                        <div class="service-desc">
                            <h4>Audiencias públicas</h4>
                            <h5>Lista de la Audiencias públicas</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                  <a href="https://www.ccss.sa.cr/auditoria">
                    <div class="service-desc">
                        <h4>Auditorías</h4>
                        <h5>Informes de Auditoría</h5>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                  <a href="https://www.ccss.sa.cr/comisiones">
                    <div class="service-desc">
                        <h4>Comisiones técnicas SIEI</h4>
                        <h5>Área gestión de medicamentos - PEC</h5>
                    </div>
                  </a>
                </div>
            </div>

             <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/cultura#memorias">
                    <div class="service-desc">
                        <h4>Cultura Organizacional</h4>
                        <h5>Memorias Institucionales</h5>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col l3 m6 sm-margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/frap">
                    <div class="service-desc">
                        <h4>FRAP</h4>
                        <h5>Documentos</h5>
                    </div>
                  </a>
                </div>
            </div>

            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/gerentes">
                    <div class="service-desc">
                        <h4>Gerentes</h4>
                        <h5>Grupo Gerencial</h5>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/financiero">
                    <div class="service-desc">
                        <h4>Información financiera</h4>
                        <h5>Lista de documentos financieros</h5>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/presupuesto">
                    <div class="service-desc">
                        <h4>Información presupuestaria</h4>
                        <h5>Lista de documentos presupuestarios</h5>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/informes_gestions">
                    <div class="service-desc">
                        <h4>Informes finales de gestión</h4>
                        <h5>Lista de informes</h5>
                    </div>
                  </a>
                </div>
            </div>

            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/jefaturas">
                    <div class="service-desc">
                        <h4>Jefaturas</h4>
                        <h5>Jerarcas y titulares subordinados</h5>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/junta">
                    <div class="service-desc">
                        <h4>Junta Directiva</h4>
                        <h5>Actas e Integrantes</h5>
                    </div>
                  </a>
                </div>
            </div>

            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/licitaciones">
                    <div class="service-desc">
                        <h4>Licitaciones</h4>
                        <h5>Unidades programáticas</h5>
                    </div>
                  </a>
                </div>
            </div>

            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/morosidad?act=0">
                    <div class="service-desc">
                        <h4>Morosidad</h4>
                        <h5>Patrono al día / Consulta Morosidad</h5>
                    </div>
                  </a>
                </div>
            </div>

            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/plan_institucional">
                    <div class="service-desc">
                        <h4>Plan anual institucional</h4>
                        <h5>Lista de planes institucionales</h5>
                    </div>
                  </a>
                </div>
            </div>

            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/planes_compra">
                    <div class="service-desc">
                        <h4>Planes anuales de compra</h4>
                        <h5>Lista de planes de compra</h5>
                    </div>
                  </a>
                </div>
            </div>

            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/portafolio_proyectos/#p=1">
                    <div class="service-desc">
                        <h4>Portafolio de proyectos GTI</h4>
                        <h5>Proyectos de inversión en Infraestructura y Tecnologías</h5>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/proveedores-sancionados">
                    <div class="service-desc">
                        <h4>Proveedores Sancionados</h4>
                        <h5>Listado de Proveedores</h5>
                    </div>
                  </a>
                </div>
            </div>

            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/confianzas">
                    <div class="service-desc">
                        <h4>Puestos de confianza</h4>
                        <h5>Nombramientos</h5>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col l3 m6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="services-block-three">
                   <a href="https://www.ccss.sa.cr/convenios-compras">
                    <div class="service-desc">
                        <h4>Solución Institucional</h4>
                        <h5>Convenios de compras</h5>
                    </div>
                  </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="catalogo-tramites">
  <!----------     Inicio Parallax    ---------->
  <div class="parallax-container valign-wrapper">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 center">
          <h2 class="headservicios1 center">Catálogo de Trámites</h4>
          <hr>

          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit pellentesque lectus, ac gravida metus cursus at.</h6>
        </div>
      </div>

      <div class="row categorias">

          <div class="columnaiconos  col s12 m4 l4 xl4">
            <div class="icon-block">
              <a href="https://www.ccss.sa.cr/tramites?cat=113">
              <div id="options_0" class="options_calculadora">
                <i class=" options_culculadora_icon">
                  <img class="iconosservicios" src="images/icons/calculator.svg">
                </i>
                <div class="titulosserv">
                  <h7>Asegurados Voluntarios</h7>
                </div>
              </div>
            </a>
            </div>
          </div>

          <div class="columnaiconos col s12 m4 l4 xl4 ">
            <div class="icon-block">
              <a href="https://www.ccss.sa.cr/tramites?cat=113">
              <div id="options_0" class="options_incapacidades">
                <i class=" options_incapacidades_icon">
                  <img class="iconosservicios" src="images/icons/incapacidades.svg">
                </i>
                <div class="titulosserv">
                  <h7>Aseguramiento</h7>
                </div>

              </div>
            </a>
            </div>
          </div>

          <div class="columnaiconos col s12 m4 l4 xl4 ">
            <div class="icon-block">
              <a href="https://www.ccss.sa.cr/tramites?cat=113">
              <div id="options_0" class="options_morosidad">
                <i class=" options_morosidad_icon">
                  <img class="iconosservicios" src="images/icons/bill.svg">
                </i>
                <div class="titulosserv">
                  <H7>Compras Bienes y Servicios</H7>
                </div>
              </div>
            </a>
            </div>
          </div>

          <div class="columnaiconos col s12 m4 l4 xl4 ">
            <div class="icon-block">
              <a href="https://www.ccss.sa.cr/tramites?cat=113">
              <div id="options_0" class="options_morosidad">
                <i class=" options_morosidad_icon">
                  <img class="iconosservicios" src="images/icons/bill.svg">
                </i>
                <div class="titulosserv">
                  <H7>Patronos</H7>
                </div>
              </div>
            </a>
            </div>
          </div>

          <div class="columnaiconos col s12 m4 l4 xl4 ">
            <div class="icon-block">
              <a href="https://www.ccss.sa.cr/tramites?cat=113">
              <div id="options_0" class="options_morosidad">
                <i class=" options_morosidad_icon">
                  <img class="iconosservicios" src="images/icons/bill.svg">
                </i>
                <div class="titulosserv">
                  <H7>Servicios de Salud</H7>
                </div>
              </div>
            </a>
            </div>
          </div>

          <div class="columnaiconos col s12 m4 l4 xl4 ">
            <div class="icon-block">
              <a href="https://www.ccss.sa.cr/tramites?cat=113">
              <div id="options_0" class="options_morosidad">
                <i class=" options_morosidad_icon">
                  <img class="iconosservicios" src="images/icons/bill.svg">
                </i>
                <div class="titulosserv">
                  <H7>Servicios en linea</H7>
                </div>
              </div>
            </a>
            </div>
          </div>

          <div class="columnaiconos col s12 m4 l4 xl4 ">
            <div class="icon-block">
              <a href="https://www.ccss.sa.cr/tramites?cat=113">
              <div id="options_0" class="options_morosidad">
                <i class=" options_morosidad_icon">
                  <img class="iconosservicios" src="images/icons/bill.svg">
                </i>
                <div class="titulosserv">
                  <H7>Trabajadores Asalariados</H7>
                </div>
              </div>
            </a>
            </div>
          </div>

          <div class="columnaiconos col s12 m4 l4 xl4 ">
            <div class="icon-block">
              <a href="https://www.ccss.sa.cr/tramites?cat=113">
              <div id="options_0" class="options_morosidad">
                <i class=" options_morosidad_icon">
                  <img class="iconosservicios" src="images/icons/bill.svg">
                </i>
                <div class="titulosserv">
                  <H7>Trabajadores Independientes</H7>
                </div>
              </div>
            </a>
            </div>
          </div>

        </div>
    </div>
    <div class="parallax"><img src="tramites.jpg"></div>

  </div>
  <!----------     Final Parallax e iconos de parallax    ---------->

</section>

<section class="bg-light-gray">
    <div class="container">

        <div class="row">
            <div class="col lg6 m-12">
                <div class="section-heading title-style6 half left">

                    <h4>Our mission is to deliver true results for your business.</h4>

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col xl6 m-12 sm-margin-30px-bottom">

                <p class="sm-width-85">Nemo enim enim voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>

                <a href="javascript:void(0)" class="butn theme medium"><span>Read more</span></a>
            </div>

            <div class="col xl5 m12 offset-lg-1 offset-md-0">

                <div class="progress-text">
                    <div class="row">
                        <div class="col m6">Business Strategy</div>
                        <div class="col m6 text-right">18%</div>
                    </div>
                </div>
                <div class="custom-progress progress">
                    <div role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width:18%" class="animated custom-bar progress-bar slideInLeft"></div>
                </div>
                <div class="progress-text">
                    <div class="row">
                        <div class="col m6">Finance Consultancy</div>
                        <div class="col m6 text-right">30%</div>
                    </div>
                </div>
                <div class="custom-progress progress">
                    <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%" class="animated custom-bar progress-bar slideInLeft"></div>
                </div>
                <div class="progress-text">
                    <div class="row">
                        <div class="col m6">Investment Plan</div>
                        <div class="col m6 text-right">50%</div>
                    </div>
                </div>
                <div class="custom-progress progress">
                    <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%" class="animated custom-bar progress-bar slideInLeft"></div>
                </div>
                <div class="progress-text">
                    <div class="row">
                        <div class="col m6">Investment Banking</div>
                        <div class="col m6 text-right">80%</div>
                    </div>
                </div>
                <div class="custom-progress progress sm-no-margin-bottom">
                    <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:80%" class="animated custom-bar progress-bar slideInLeft"></div>
                </div>

            </div>
        </div>
    </div>
</section>


<?php include 'inc/footer.php';?>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<!--script src="js/jquery-ui.min.js"></script-->
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>


<!-- MENNU PRINCIPAL --->
<script type="text/javascript" src="js/mega-menu.js"></script>
<script>
  jQuery('.dropdown-button').megaMenu({
    inDuration: 300,
    outDuration: 150,
    hover: false
  });

  jQuery(window).scroll(function(){
    var sticky = jQuery('.sticky'),
        navbar = jQuery('.menu-page'),
        scroll = jQuery(window).scrollTop();

    if (scroll >= 100) {
      sticky.addClass('fixed');
      navbar.addClass('navbar-default-fixed');

    }
    else {
      sticky.removeClass('fixed');
      navbar.removeClass('navbar-default-fixed');
    }
  });

</script>

<!---  ANIMACIONES GREENSOCK JS ----->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function () {

    var menuCCSS = jQuery('.menu-ccss');

    var tlMenu = gsap.timeline({paused: true});
    tlMenu.to(menuCCSS, 0.5, {top: '85px',display: "block", duration: 3.5, ease: "slow"});

    jQuery('.toggle-wrap').on('click', function() {
       jQuery(this).toggleClass('active');

       if (menuCCSS.hasClass('open')) {
         tlMenu.reverse();
          menuCCSS.removeClass('open');
       }else{
         tlMenu.play();
        menuCCSS.addClass('open');
       }

     });

  });

</script>
<!----->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>
</body>
</html>
