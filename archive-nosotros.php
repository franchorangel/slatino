<?php get_header(); ?>
<script>
jQuery(document).ready(function($) {
	$(window).load(function() {
    $('#titulo').css('height', $('#text-cont').height() + 20);
  });
});
</script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/nosotros.css">
<nav class="page-nav">
  <a href="<?php echo get_post_type_archive_link('nosotros'); ?>" id="nav-nosotros"></a>
  <a href="<?php echo get_post_type_archive_link('servicios'); ?>" id="nav-servicios"></a>
  <a href="<?php echo get_post_type_archive_link('noticias'); ?>" id="nav-noticias"></a>
  <a href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>" id="nav-contacto"></a>
</nav>
<div id="contenido">
  <div id="titulo"><img alt="nosotros" src="<?php bloginfo('template_directory'); ?>/images/guia-seccion-nosotros.png" /></div>
  <div id="text-cont">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
</div>
<?php get_footer(); ?>
