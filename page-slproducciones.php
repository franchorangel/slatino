<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slproducciones.css">
<nav class="page-nav">
  <a href="<?php echo get_post_type_archive_link('nosotros'); ?>" id="nav-nosotros"></a>
  <a href="<?php echo get_post_type_archive_link('servicios'); ?>" id="nav-servicios"></a>
  <a href="<?php echo get_post_type_archive_link('noticias'); ?>" id="nav-noticias"></a>
  <a href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>" id="nav-contacto"></a>
</nav>
<div id="contenido">
  <div id="titulo"><img src="<?php bloginfo('template_directory'); ?>/images/guia-seccion-servicios.png" alt="Servicios" /></div>
  <div id="text-cont">
    <div id="servicios">
	    <div id="header-sl"></div>
        <div id="texto-sl">
            <h1>NUESTROS SERVICIOS</h1>
            <p style="padding-top: 30px;">
                Creamos experiencias únicas para satisfacer las necesidades globales de entretenimiento de nuestros clientes, 
                a través de asesoría integral y transparente, de la mano de profesionales comprometidos con la calidad e innovación. 
            </p>
            <p>
                Nuestra prioridad es cumplir todas las exigencias de nuestros clientes, que se sientan completamente complacidos y confiados 
                que sus invitados disfrutarán de una experiencia inolvidable. Para lograr eso, ponemos a la orden todos nuestros servicios:
            </p>
            <div id="wrap-ul">
                <ul>
                    <li>Sistemas de Audio</li>    
                    <li>DJ's</li>
                    <li>Decoración de Espacios</li>
                    <li>Estructuras Truss</li>
                    <li>Tarimas y Sobretarimas</li>
                    <li>Salones de Eventos</li>
                </ul>
                <ul>
                    <li>Iluminación LED y Robótica</li>
                    <li>Estaciones Lounge con Puff's</li>
                    <li>Telas Tensadas con LED's</li>
                    <li>Dj Setup</li>
                    <li>Conceptualización</li>
                    <li>Festejos</li>
                </ul>
            </div>
            <h1>PROMOCIONES DE JUNIO Y JULIO</h1>
            <div class="tabla">
            <div class="row">
                <div class="cell cell-region top">
                    <h2>Live it up</h2>
                    <h4>Bs. 13.500 (sin iva)</h4>
                </div>
                <div class="cell cell-info top">
                    <p>-Para 50 invitados</p>
                    <p>-Sistema básico de Audio y Dj</p>
                    <p>-Efectos básicos de iluminación para pista de baile</p>
                    <p>-5 horas de celebración</p>
                </div>
            </div>
            <div class="row">
                <div class="cell cell-region">
                    <h2>PartyLicius</h2>
                    <h4>Bs. 19.500 (sin iva)</h4>
                </div>
                <div class="cell cell-info">
                    <p>-Para 50 invitados</p>
                    <p>-Sistema básico de Audio y Dj</p>
                    <p>-Efectos completos de iluminación para pista de baile. Incluye iluminacion robotica</p>
                    <p>-Máquina de humo</p>
                    <p>-Iluminación LED decorativa para locación</p>
                    <p>-6 horas de celebración</p>
                </div>
            </div>
            <div class="row">
                <div class="cell cell-region">
                    <h2>Exclusive Party</h2>
                    <h4>Bs. 29.500 (sin iva)</h4>
                </div>
                <div class="cell cell-info">
                    <p>-Para 100 invitados</p>
                    <p>-Sistema de Audio Boost y Dj</p>
                    <p>-Efectos completos de iluminación para pista de baile</p>
                    <p>-Máquina de humo</p>
                    <p>-Iluminación LED decorativa para locación</p>
                    <p>-Jelly Shots para hora loca</p>
                    <p>-6 horas de celebración</p>
                </div>
            </div>
            <div class="row">
                <div class="cell cell-region bottom">
                    <h2>Prograduaciones</h2>
                    <h2>15 años</h2>
                    <h2>Bodas</h2>
                    <h2>Eventos<br /> Corporativos</h2>
                </div>
                <div class="cell cell-info bottom">
                    <p style="text-align: center;">Preguntar por nuestras</p>
                    <p style="text-align: center;">promociones especiales</p>
                </div>
            </div>
        </div>
            <h1 style="margin-bottom: 20px;">INFORMACIÓN DE CONTACTO</h1>
            <p style="padding-top: 0; text-align: center;">Instagram y Twitter: @slproducciones</p>
            <p style="padding-top: 0;text-align: center;">Email: SLproducciones@solarlatino.com.ve</p>
            <p style="padding-top: 0;text-align: center;">Teléfono: 0414 - 300 3397 / 0212 - 944 1580 </p>
        </div>
    </div>
  </div>
</div>
<script>
jQuery(document).ready(function($) {
	$(window).load(function() {
    $('#titulo').css('height', $('#text-cont').height() + 10);
  });
});
</script>
<?php get_footer(); ?>
