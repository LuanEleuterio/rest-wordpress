<?php
// Template Name: Sobre
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="container sobre">
		<h2 class="subtitulo"><?php the_title(); ?></h2>

		<div class="grid-8">
			<img src="<?php the_field('foto_rest');?>" alt="<?php the_field('foto_rest_descricao');?>">
		</div>

		<div class="grid-8">
			<h2><?php the_field('titulo_historia');?></h2>
			<?php the_field('historia_info');?>
			<h2><?php the_field('titulo_visao');?></h2>
			<?php the_field('visao_info');?>
			<h2><?php the_field('titulo_valores');?></h2>
			<?php the_field('valores_info');?>
		</div>
	</section>
<?php endwhile; else: endif?>
<?php get_footer(); ?>