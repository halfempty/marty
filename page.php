<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<article>
			<?php the_content(); ?>
		</article>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>