<?php
/**
 * Template para el footer
 *
 * @package Framework CCSS 2020
 * @version 1.0
 * @since Febrero 2020
 */
?>

<!----------     Inicio Footer    ---------->
<footer class="page-footer" style="background-image: url('assets/images/foot.png');">
    <div class="row">
        <div class="col s12 m3 l3 xl3">

            <h5 class="nav__title">Servicios</h5>

            <ul class="nav__ul">
                <li>
                    <a href="#">Aseguramiento contributivo</a>
                </li>

                <li>
                    <a href="#">Firma Digital</a>
                </li>

                <li>
                    <a href="#">Validar Derechos</a>
                </li>

                <li>
                    <a href="#">Módulo Interno</a>
                </li>

            </ul>
        </div>

        <div class="col s12 m3 l3 xl3">
            <h5 class="nav__title">Quiénes somos</h5>

            <ul class="nav__ul">
                <li>
                    <a href="#">Cultura Organizacional</a>
                </li>

                <li>
                    <a href="#">Hospitales | Sucursales</a>
                </li>

                <li>
                    <a href="#">Junta Directiva | Gerentes</a>
                </li>

                <li>
                    <a href="#">Transparencia</a>
                </li>

            </ul>

        </div>

        <div class="col s12 m3 l3 xl3">
            <h5 class="nav__title">Información </h5>
            <ul class="nav__ul">
                <li>
                    <a href="#">Contacto</a>
                </li>

                <li>
                    <a href="#">Contraloría de Servicios</a>
                </li>

                <li>
                    <a href="#">Directorio Teléfonico</a>
                </li>

                <li>
                    <a href="#">Mapa del Sitio</a>
                </li>
            </ul>
        </div>


        <div class="col s12 m3 l3 xl3">

            <h5 class="nav__title">Horario</h5>

            <ul class="nav__ul">
                <li>
                    <a href="#">Oficinas Centrales
            Lunes - Viernes de 7:00 am a 4:00 pm
            Av. segunda entre calles 5 y 7
          </a>
                </li>

                <li>
                    <a href="#">
            Central telefónica: 2539-0000
            Envíe aquí sus consultas</a>
                </li>

                <li>
                    <a href="#">
            Envíe aquí sus consultas</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="social-menu" style="z-index: 99999;">
        <div class="container ">
            <div class="row">
                <div class="col s12 m12 l12 xl12">
                    <div class="socialicon">
                        <a href=""><i class=""> <img src="assets/images//fb.svg" alt=""> </i></a>
                        <a href=""><i class=""> <img src="assets/images//ig.svg"></i></a>
                        <a href=""><i class=""> <img src="assets/images//whatsapp.svg"></i></a>
                        <a href=""><i class=""> <img src="assets/images//yt.svg"></i></a>
                        <a href=""><i class=""> <img src="assets/images//twitter.svg"></i></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © <?php echo date("Y"); ?> Caja Costarricense de Seguro Social | Derechos Reservados
            <a class="grey-text text-lighten-4 right" href="#!">Términos y Condiciones</a>
        </div>
    </div>
</footer>
<!----------     Final Footer    ---------->



<!--  Scripts-->
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/materialize.js"></script>
<script src="assets/js/init.js"></script>

<!-- MENU PRINCIPAL --->
<script type="text/javascript" src="assets/js/mega-menu.js"></script>
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
    tlMenu.to(menuCCSS, 0.5, {top: '80px',display: "block", duration: 3.5, ease: "slow"});

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

<!-- SLIDER --->
<script type="text/javascript">
    jQuery(document).ready(function() {

        jQuery("#s4-workspace").addClass('portada');

        jQuery('.slider').slider({
            indicators: true,
            duration: 600,
            interval: 8000
        });

        jQuery('.btn-next').click(function() {
            jQuery('.slider').slider('next');
            setTimeout(function() {
                console.log('of');
                jQuery('.slider').slider('start');
            }, 800);
        });

        jQuery('.btn-prev').click(function() {
            jQuery('.slider').slider('prev');
            setTimeout(function() {
                console.log('of');
                jQuery('.slider').slider('start');
            }, 800);
        });

        jQuery('.btn-top').bind('click', function(event) {
            event.preventDefault();

            jQuery('html, body').stop().animate({
                scrollTop: jQuery('#continuar').offset().top - 100
            }, 1500, '');

        });

    });
</script>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>
