<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/noticias.css">
<nav class="page-nav">
  <a href="<?php echo get_post_type_archive_link('nosotros'); ?>" id="nav-nosotros"></a>
  <a href="<?php echo get_post_type_archive_link('servicios'); ?>" id="nav-servicios"></a>
  <a href="<?php echo get_post_type_archive_link('noticias'); ?>" id="nav-noticias"></a>
  <a href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>" id="nav-contacto"></a>
</nav>
<div id="contenido">
  <div id="titulo"><img src="<?php bloginfo('template_directory'); ?>/images/guia-seccion-noticias.png"  alt="Noticias"/></div>
  <div id="text-cont">
    <!-- A eliminar??
  <div id="solar-latino">
    <h1>Academia</h1>
    <?php query_posts('post_type=noticias&category_name=academia&posts_per_page=3'); ?>
    <?php while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
      </a>
    <?php endwhile; ?>
  </div>
  <div id="nacionales">
	  <h1>Venezuela</h1>
		<?php query_posts('post_type=noticias&category_name=nacionales&posts_per_page=2'); ?>
		<?php while (have_posts()) : the_post(); ?>
		  <a href="<?php the_permalink(); ?>">
			<h2><?php the_title(); ?></h2>
		  </a>
		<?php endwhile; ?>
	  <a href="<?php echo esc_url(get_category_link(get_cat_ID('Nacionales'))); ?>"><h3>Ver Todas</h3></a>
	</div>
	<div id="internacionales">
	<h1>Internacionales</h1>
		<?php query_posts('post_type=noticias&category_name=internacionales&posts_per_page=4'); ?>
		<?php while (have_posts()) : the_post(); ?>
		  <a href="<?php the_permalink(); ?>">
			<h2><?php the_title(); ?></h2>
		  </a>
		<?php endwhile; ?>
	  <a href="<?php echo esc_url(get_category_link(get_cat_ID('Internacionales'))); ?>"><h3>Ver Todas</h3></a>
	</div>
  -->
	<div id="feed">
		<a class="twitter-timeline" height="150" width="675" lang="ES" data-chrome="nofooter" href="https://twitter.com/SolarLatino"  data-widget-id="452571526462574594">Tweets de @SolarLatino</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
    <div id="casinoenescena">
        <div id="header-casino">
            <div class="logo"></div>
            <div class="logo"></div>
            <h1>CASINO EN ESCENA</h1>
            <h3>CAMPEONATO NACIONAL</h3>
        </div>
        <div id="casino-contenido">
        <p>
            Con más de seis años de trayectoria, el evento Casino En Escena brinda a todos los bailadores y bailarines 
            de salsa casino de Venezuela un espacio para poder compartir y disfrutar de lo más actual del género. 
            De esta manera, ofrece un evento para que toda la comunidad disfrute del arte de la danza, 
            promoviendo actividades recreativas y culturales para todas las edades.
        </p>
        <p>
            Es primordial para nosotros asegurar un festival de alta calidad, que cumpla las exigencias de los competidores, 
            directores y público en general. Por esta razón, nuestra estructura organizacional se basa en: Compromiso, 
            Planificación, Staff Logístico, Responsabilidad y Calidad.
        </p>
        <p>
            Este evento consta de exhibiciones, talleres de baile, fiesta social y lo más esperado por todos: las Competencias; 
            premiando el esfuerzo y desempeño de los directores, coreógrafos y bailarines más destacados del año.
        </p>
        <p>
            Cada edición del campeonato consta de una Ronda Clasificatoria, que se realiza en las principales regiones del país, 
            seguida de una Ronda Final, en donde se escogerán las agrupaciones más destacadas del año.
        </p>
        <p>
            Extendemos la invitación a todas las academias de salsa para que participen en el Casino En Escena 2015. 
            Pueden hacerlo en calidad de competidores, o simplemente como participantes y vivir la experiencia de un 
            festival nacional y poder recibir talleres de baile con instructores de trayectoria, disfrutar de la competencia, 
            exhibiciones y fiestas sociales. 
        </p>
        <h3>RONDA CLASIFICATORIA</h3>
        <p>
            Esta primera fase de la competencia se realiza en las principales regiones del país, donde las academias compiten para 
            optar por un puesto en la Gran Final. Esta etapa clasificatoria consta de baile social, es decir no coreográfico, 
            siguiendo los lineamentos de cada categoría especificados en el reglamento. A continuación se encuentra la información 
            en detalle por región:
        </p>
        <div class="tabla">
            <div class="row row-titulos">
                <div class="cell">
                    <h2>Región</h2>
                </div>
                <div class="cell" style="border-left: none;">
                    <h2>Información</h2>
                </div>
            </div>
            <div class="row">
                <div class="cell cell-region">
                    <h4>Caracas</h4>
                </div>
                <div class="cell cell-info">
                    <p>Fecha: 21 y 22 de marzo.</p>
                    <p>Lugar: Anfiteatro El Hatillo</p>
                    <p>Período de inscripciones: Del 5 de febrero al 8 de marzo</p>
                </div>
            </div>
            <div class="row">
                <div class="cell cell-region">
                    <h4>Central</h4>
                </div>
                <div class="cell cell-info" style="padding-top: 13px; padding-bottom: 27px;">
                    <p>Fecha: 8 de marzo.</p>
                    <p>Lugar: Cámara de Construcción, Maracay</p>
                    <p>Período de inscripciones: Del 5 de febrero al 1 de marzo</p>
                </div>
            </div>
            <div class="row">
                <div class="cell cell-region">
                    <h4>Occidental</h4>
                </div>
                <div class="cell cell-info">
                    <p>Fecha: 25 y 26 de abril.</p>
                    <p>Lugar: Por definir</p>
                    <p>Período de inscripciones: Del 16 de marzo al 18 de abril</p>
                </div>
            </div>
            <div class="row">
                <div class="cell cell-region">
                    <h4>Oriental</h4>
                </div>
                <div class="cell cell-info">
                    <p>Fecha: 2 de mayo.</p>
                    <p>Lugar: Por definir</p>
                    <p>Período de inscripciones: Del 30 de marzo al 25 de abril</p>
                </div>
            </div>
        </div>
        <div id="descargables">
            <a href="<?php bloginfo('template_directory'); ?>/archivos/Reglamento%20Eliminatorias%20CEE%202015.pdf" target="_blank">
            <div class="boton">
                <h2>Reglamento</h2>
            </div>
            </a>
            <a href="<?php bloginfo('template_directory'); ?>/archivos/Planilla%20inscripcion%20Parejas%20Clasificatorio.xls">
            <div class="boton">
                <h2>Planilla de Inscripción Pareja</h2>
            </div>
            </a>
            <a href="<?php bloginfo('template_directory'); ?>/archivos/Planilla%20inscripcion%20Grupos%20Clasificatorio.xls">
            <div class="boton">
                <h2>Planilla de Inscripción Grupo</h2>
            </div>
            </a>
        </div>
        <h3>RONDA FINAL</h3>
        <p>
            Al culminar la primera ronda se obtiene la tabla de academias clasificadas a nivel nacional, las cuales 
            competirán posteriormente en la Gran Final. Más información próximamente.
        </p>
        <div class="tabla">
            <div class="row row-titulos">
                <div class="cell">
                    <h2>Gran Final</h2>
                </div>
                <div class="cell" style="border-left: none;">
                    <h2>Información</h2>
                </div>
            </div>
            <div class="row">
                <div class="cell cell-region">
                    <h4>Gran Caracas</h4>
                </div>
                <div class="cell cell-info">
                    <p style="margin-top: 15px;">Fecha: 20 y 21 de junio.</p>
                    <p>Lugar: Por definir</p>
                </div>
            </div>
        </div>
        <h3>INFORMACION DE CONTACTO</h3>
        <p>
            Instagram y Twitter: @_casinoenescena <br />
            Email: CompetenciaCasinoEnEscena@gmail.com <br />
            Telefono: 0416 - 213 1635
        </p>
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
