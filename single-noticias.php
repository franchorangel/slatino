<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/single.css">
<script>
jQuery(document).ready(function($) {
	$(window).load(function() {
    $('#titulo').css('height', $('#text-cont').height() + 50);
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
  <div id="titulo">
	<?php
		$category_link = get_post_type_archive_link('noticias');
		if(in_category('Nacionales'))
			$category_link = esc_url(get_category_link(get_cat_ID('Nacionales')));
		if(in_category('Internacionales'))
			$category_link = esc_url(get_category_link(get_cat_ID('Internacionales')))
	?>
	<a href="<?php echo $category_link; ?>" id="volver">&laquo Volver</a>
	<img src="<?php bloginfo('template_directory'); ?>/images/guia-seccion-nosotros.png" />
  </div>
  <div id="text-cont">
		<div id="post-cont">
			<?php while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
		</div>
		<div id="post-nav">
			<div id="prev"><?php previous_post_link(); ?></div>
			<div id="next"><?php next_post_link(); ?></div>
		</div>
		<?php endwhile; ?>
  </div>
</div>
<?php get_footer(); ?>