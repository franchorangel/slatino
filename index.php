<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home.css">
<?php wp_enqueue_script('hover-intent', get_template_directory_uri().'/js/jquery.hoverIntent.minified.js'); ?>
<script>
jQuery(document).ready(function($) {
  $('#nosotros').hoverIntent(function() {
    $('#nosotros').addClass('nosotros');
    $('#servicios').removeClass('servicios');
    $('#noticias').removeClass('noticias');
    $('#contacto').removeClass('contacto');
  });
  $('#servicios').hoverIntent(function() {
    $('#servicios').addClass('servicios');
    $('#nosotros').removeClass('nosotros');
    $('#noticias').removeClass('noticias');
    $('#contacto').removeClass('contacto');
  });
  $('#noticias').hoverIntent(function() {
    $('#noticias').addClass('noticias');
    $('#servicios').removeClass('servicios');
    $('#nosotros').removeClass('nosotros');
    $('#contacto').removeClass('contacto');
  });
  $('#contacto').hoverIntent(function() {
    $('#contacto').addClass('contacto');
    $('#servicios').removeClass('servicios');
    $('#noticias').removeClass('noticias');
    $('#nosotros').removeClass('nosotros');
  });
});
</script>
	<div id="secciones">	
		<nav>
			<a href="<?php echo get_post_type_archive_link('nosotros'); ?>" id="nosotros" class="acordeon nosotros"></a>
			<a href="<?php echo get_post_type_archive_link('servicios'); ?>" id="servicios" class="acordeon"></a>
			<a href="<?php echo get_post_type_archive_link('noticias'); ?>" id="noticias" class="acordeon"></a>
			<a href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>" id="contacto" class="acordeon"></a>
		</nav>
	</div>
<?php get_footer(); ?>
