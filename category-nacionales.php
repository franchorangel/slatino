<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/archive.css">
<nav class="page-nav">
  <a href="<?php echo get_post_type_archive_link('nosotros'); ?>" id="nav-nosotros"></a>
  <a href="<?php echo get_post_type_archive_link('servicios'); ?>" id="nav-servicios"></a>
  <a href="<?php echo get_post_type_archive_link('noticias'); ?>" id="nav-noticias"></a>
  <a href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>" id="nav-contacto"></a>
</nav>
<div id="contenido">
  <div id="titulo">
    <a href="<?php echo get_post_type_archive_link('noticias'); ?>" id="volver">&laquo Volver</a>
	<img src="<?php bloginfo('template_directory'); ?>/images/guia-seccion-nosotros.png" />
  </div>
  <div id="text-cont">
	<h1>Venezuela</h1>
		<?php query_posts('post_type=noticias&category_name=nacionales&posts_per_page=5'); ?>
		<?php while (have_posts()) : the_post(); ?>
		  <a href="<?php the_permalink(); ?>">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		  </a>
		<?php endwhile; ?>
  </div>
</div>
<?php get_footer(); ?>