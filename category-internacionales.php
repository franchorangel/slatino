<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/noticias.css">
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
	<div id="nacionales">
	  <h1>Venezuela</h1>
		<?php query_posts('post_type=noticias&category_name=nacionales&posts_per_page=2'); ?>
		<?php while (have_posts()) : the_post(); ?>
		  <a href="<?php the_permalink(); ?>">
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
		  </a>
		<?php endwhile; ?>
	  <a href="<?php echo esc_url(get_category_link(get_cat_ID('Nacionales'))); ?>"><h3>Ver Todas</h3></a>
	</div>
	<div id="internacionales">
	<h1>Internacionales</h1>
		<?php query_posts('post_type=noticias&category_name=internacionales&posts_per_page=4'); ?>
		<?php while (have_posts()) : the_post(); ?>
		  <a href="<?php the_permalink(); ?>">
			<h2 style="padding-left:20px;margin-bottom:10px;"><?php the_title(); ?></h2>
		  </a>
		<?php endwhile; ?>
	  <a href="<?php echo esc_url(get_category_link(get_cat_ID('Internacionales'))); ?>"><h3>Ver Todas</h3></a>
	</div>
	<div id="feed">
		<a class="twitter-timeline" height="205" lang="ES" data-chrome="nofooter" href="https://twitter.com/SolarLatino"  data-widget-id="452571526462574594">Tweets de @SolarLatino</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
  </div>
</div>
<?php get_footer(); ?>