<?php get_header(); ?>
	
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
			<div class="row">
				<div class="large-8 columns large-centered">
					<h3><?php the_title(); ?></h3>
					<?php
						if ( has_post_thumbnail() ) { 
							the_post_thumbnail();
						}
						
						the_content(); 
					?>
				</div>
			</div>
			<div class="row">
				</hr>
			</div>
			<?php endwhile; endif; ?>
		</section>
	</main>

<?php get_footer(); ?>
