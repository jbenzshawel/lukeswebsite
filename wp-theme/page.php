<?php get_header(); ?>
	
	<main>	
		<section class="basic-content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="large-12 columns">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
					</div>
	            </div>
			<?php endwhile; endif; ?>
		</section>
	</main>

<?php get_footer(); ?>
