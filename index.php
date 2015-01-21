<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php if ( is_tag() ) : ?>
		<p class="tagtitle">Tagged <strong><?php single_tag_title(); ?></strong></p>
	<?php endif; ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<article>

			<?php if ( has_post_thumbnail() ) : ?>
				<a class="thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a> 
			<?php endif; ?>

			<h2><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h2>

			<?php the_excerpt(); ?>

		</article>

	<?php endwhile; ?>

	<div class="afterpost">
		<?php pagination( $wp_query, get_category_link( get_query_var('cat') ) ); ?>
	</div>

<?php endif; ?>

<?php get_footer(); ?>
