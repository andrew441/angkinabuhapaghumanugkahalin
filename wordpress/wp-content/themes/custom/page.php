<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>		
		<div class="container">
			<h4 class="page_title"><span class="black"><?php the_title(); ?></span></h4>			
		</div>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<!--do not delete-->
		<?php else : ?>
		Not Found
		Sorry, but you are looking for something that isn't here.
		<!--do not delete-->
	<?php endif; ?>			
	   

<?php get_footer(); ?>