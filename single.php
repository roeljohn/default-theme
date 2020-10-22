<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
	<!-- do stuff ... -->
	<?php the_title(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>