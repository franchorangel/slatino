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
          Esta primera fase de la competencia se realizó en las principales regiones del país, donde las academias compitieron para optar por un puesto en la Gran Final. Esta etapa clasificatoria consistió en baile social, es decir no coreográfico, siguiendo los lineamientos de cada categoría especificados en el reglamento.
        </p>
        <p> Vale destacar, que por primera vez en Venezuela se realizó la Ronda Clasificatoria con orquestas cubanas en vivo, poniendo a todos los asistentes a bailar, Región Central con Tania Pantoja y Charanga Latina, Región Capital con los 4 y Región Oriental con Tania Pantoja y Maykel Blanco. A continuación se encuentran el listado de grupos y parejas clasificados:
        </p><br />
        <div id="descargables">
            <a href="<?php bloginfo('template_directory'); ?>/archivos/Clasificacion%20Final%20Grupo%20Nuevo%20Talento.pdf" target="_blank">
            <div class="boton">
                <h2>Grupo Nuevo Talento</h2>
            </div>
            </a>
            <a href="<?php bloginfo('template_directory'); ?>/archivos/Clasificacion%20Final%20Pareja%20Libre.pdf" target="_blank">
            <div class="boton">
                <h2 style="padding-top:13px;">Pareja Libre</h2>
            </div>
            </a>
            <a href="<?php bloginfo('template_directory'); ?>/archivos/Clasificacion%20Final%20Pareja%20Novel.pdf" target="_blank">
            <div class="boton">
                <h2 style="padding-top:13px;">Pareja Novel</h2>
            </div>
            </a>
            <a href="<?php bloginfo('template_directory'); ?>/archivos/Clasificacion%20Final%20Pareja%20Nuevo%20Talento.pdf" target="_blank">
            <div class="boton" style="margin-left:217px;">
                <h2>Pareja Nuevo Talento</h2>
            </div>
            </a>
        </div>
        <h3>RONDA FINAL</h3>
        <p>
          Esta es la etapa decisiva, en donde se medirán las principales academias de salsa casino del país en las diferentes categorías. Entre las categorías nuevas tenemos Estilo Chicas, Estilo Hombres y Grupo Cuban Show, los coreógrafos de las academias están trabajando arduamente para romper paradigmas y darle paso a nuevas categorías. Vontaremos con un panel de jueces internacional y nacional, encargados de escoger a los mejores trabajos coreográficos de la jornada. Los asistentes al evento también podrán disfrutar de dos Fiestas Sociales con agrupaciones directamente desde La Habana, Elito Revé y su Charangón y NG La Banda., además de la participación de Dj Timbao y otros Dj's invitados de las diferentes regiones del país. Extendemos la invitación a todas las academias y salseros del país, no dejes de disfrutar dos días llenos de mucho talento, shows, orquestas y baile.
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
                    <p>Fecha: 4 y 5 de julio.</p>
                    <p>Lugar: Monasterio San Charbel, Caracas</p>
                    <p>Fiesta Social: Elito Revé y su Charangón y NG La Banda</p>
                </div>
            </div>
        </div>
       <div id="descargables">
            <a href="<?php bloginfo('template_directory'); ?>/archivos/Planilla%20Grupos%20Performance%20Ronda%20Final.xls">
            <div class="boton" style="height:60px;">
                <h2>Planilla de Inscripción Grupos Performance</h2>
            </div>
            </a>
            <a href="<?php bloginfo('template_directory'); ?>/archivos/Planilla%20Grupos%20Ronda%20Final.xls">
            <div class="boton" style="height:52px;padding-top:15px;">
                <h2>Planilla de Inscripción Grupos</h2>
            </div>
            </a>
            <a href="<?php bloginfo('template_directory'); ?>/archivos/Planilla%20Parejas%20Ronda%20Final.xls">
            <div class="boton" style="height:52px;padding-top:15px;">
                <h2>Planilla de Inscripción Parejas</h2>
            </div>
            </a>
            <a href="<?php bloginfo('template_directory'); ?>/archivos/Reglamento%20Eliminatorias%20CEE%202015.pdf" target="_blank">
            <div class="boton" style="height:40px; padding-top:20px; margin-left:217px;">
                <h2>Reglamento</h2>
            </div>
            </a>
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
