<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<div class="page" role="main">

		<div id="content">

		<?php while (have_posts()) : the_post(); ?>

			<div class="post first">
				<?php the_content(); ?>
			</div>

		<?php endwhile; ?>

		</div>

	</div>

<?php endif; ?>

<?php get_footer(); ?>