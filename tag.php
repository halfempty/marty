<?php get_header(); ?>

<div class="page" role="main">

	<div id="content">

	<p class="tagtitle">Tagged <strong><?php single_tag_title(); ?></strong></p>

	<?php 
	global $query_string;
	query_posts( $query_string . '&posts_per_page=-1' ); ?>


<?php if (have_posts()) : ?>
	<?php $i = 0; while (have_posts()) : the_post(); ?>

			<div class="post <?php if ( $i == 0 ) echo 'first'; ?>">

				<?php if ( is_tag() && has_post_thumbnail() ) : ?>
					<a class="thumbnail" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a> 
				<?php endif; ?>


				<?php if ( !is_page() ) : ?>
					<h2>
						<?php if ( !is_single() ) { ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php } ?>
						<?php the_title_attribute(); ?>
						<?php if ( !is_single() ) { ?></a><?php } ?>
					</h2>

				<?php endif; ?>

				<?php the_excerpt(); ?>


			</div>


		<?php $i = 1; endwhile; ?>

	<?php endif; ?>

	</div>
</div>


<?php get_footer(); ?>