<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/servicios.css">
<script>
jQuery(document).ready(function($) {
	$('#text-cont div:nth-child(1)').hover(function() {
		$(this).stop(true,false).animate({
			width:639,
			height:540,
		});
		$('.salon-naranja').animate({top:420,left:30});
		$('.salon-amarillo').animate({top:420,left:150});
	},function() {
		$(this).stop(true,false).animate({
			width:292,
			height:262,
		});
		$('.salon-naranja').animate({top:65,left:210});
		$('.salon-amarillo').animate({top:160,left:210});
	});
});
</script>
<nav class="page-nav">
  <a href="<?php echo get_post_type_archive_link('nosotros'); ?>" id="nav-nosotros"></a>
  <a href="<?php echo get_post_type_archive_link('servicios'); ?>" id="nav-servicios"></a>
  <a href="<?php echo get_post_type_archive_link('noticias'); ?>" id="nav-noticias"></a>
  <a href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>" id="nav-contacto"></a>
</nav>
<div id="contenido">
  <div id="titulo"><img src="<?php bloginfo('template_directory'); ?>/images/guia-seccion-servicios.png" /></div>
  <div id="text-cont">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="div-servicios">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
</div>
<?php get_footer(); ?>
