<?php get_header(); ?>

<?php if (have_posts()) : ?>


	<?php if ( is_tag() ) : ?>

		<?php
			global $query_string;
			query_posts( $query_string . '&posts_per_page=-1' ); 
			?>

		<p class="tagtitle">#<?php single_tag_title(); ?></p>
	<?php endif; ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<article>
			<h2><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h2>

			<?php if ( has_post_thumbnail() ) : ?>
				<figure>
					<a class="thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a> 
				</figure>
			<?php endif; ?>

			<?php the_excerpt(); ?>

		</article>

	<?php endwhile; ?>

	<div class="afterpost">
		<?php the_posts_pagination(array(
			'mid_size' => 100,
		)); ?>
	</div>

<?php endif; ?>

<?php get_footer(); ?>
