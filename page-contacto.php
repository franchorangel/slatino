<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/contacto.css">
<?php wp_enqueue_script('mapas-api', 'https://maps.googleapis.com/maps/api/js?sensor=false'); ?>
<?php wp_enqueue_script('mapa', get_template_directory_uri().'/js/mapa.js', array('mapas-api'), '1.0'); ?>
<nav class="page-nav">
  <a href="<?php echo get_post_type_archive_link('nosotros'); ?>" id="nav-nosotros"></a>
  <a href="<?php echo get_post_type_archive_link('servicios'); ?>" id="nav-servicios"></a>
  <a href="<?php echo get_post_type_archive_link('noticias'); ?>" id="nav-noticias"></a>
  <a href="<?php echo get_post_type_archive_link('contacto'); ?>" id="nav-contacto"></a>
</nav>
<div id="contenido">
  <div id="titulo"><img alt="Contacto" src="<?php bloginfo('template_directory'); ?>/images/guia-seccion-contacto.png" /></div>
  <div id="text-cont">
	<div id="mapa"></div>
	<div id="info">
		<h1>Contacto</h1>
		<h2>Email</h2>
		<a href="mailto:solarlatino@gmail.com"><p>solarlatino@gmail.com</p></a>
		<h2>Teléfonos</h2>
		<p>0212-9441580</p>
		<h2>Twitter</h2>
		<a href="https://www.twitter.com/SolarLatino" target="_blank"><p>@solarlatino</p></a>
		<h2>Instagram</h2>
		<a href="https://instagram.com/solarlatino" target="_blank"><p>@solarlatino</p></a>
		<h2>Facebook</h2>
		<a href="https://www.facebook.com/pages/Academia-de-Baile-Solar-Latino/238222949554489" target="_blank"><p>Academia Solar Latino (Grupo Oficial)</p></a>
		<h2>Dirección</h2>
		<p>Qta Menedor, calle San mateo con Av. Ppal Sorocaima, La Trinidad, Caracas, Venezuela.<br />A media cuadra del edificio de Procter & Gamble.</p>
	    <h2>Horarios</h2>
		<p>Lunes a Viernes: 3pm - 8pm
        <br />Sábados: 11am - 7pm</p>
    </div>
  </div>
</div>
<?php get_footer(); ?>
