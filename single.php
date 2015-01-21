<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<article>

			<h2><?php the_title(); ?></h2>

			<?php the_content(); ?>

			<p class="date">Posted <?php the_time('F Y') ?></p>

		</article>

		<div class="afterpost">

			<?php the_tags( '<div class="tags"><ul><li><span>', '</span></li><li><span>', '</span></li></ul></div>'); ?>	

			<?php if ( !in_category('work') && comments_open( $post->ID ) ) comments_template(); ?>

		</div>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>