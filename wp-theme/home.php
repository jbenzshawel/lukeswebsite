<?php 
/*
Template Name: Home Page Template
*/

get_header(); 

?>
	
	<main>	
		<section class="banner">	
			<div class="slick-slider">
				<div><img src="http://placehold.it/960x420" alt="placeholder" /></div>
				<div><img src="http://placehold.it/960x420" alt="placeholder" /></div>
				<div><img src="http://placehold.it/960x420" alt="placeholder" /></div>
			</div>
		</section>

		<section class="posts">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="large-8 columns large-centered">
					<h3><?php the_title(); ?></h3>
					<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?> 
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
		</section>
	</main>

<?php get_footer(); ?>
