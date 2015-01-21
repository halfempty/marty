<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<div class="page" role="main">

		<div id="content">

<?php $i = 0; while (have_posts()) : the_post(); ?>

	<div class="post <?php if ( $i == 0 ) echo 'first'; ?>">

		<?php if ( has_post_thumbnail() ) : ?>
			<a class="thumbnail" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a> 
		<?php endif; ?>


		<?php if ( !is_page() ) : ?>
			<h2>
				<?php if ( !is_single() ) { ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php } ?>
				<?php the_title(); ?>
				<?php if ( !is_single() ) { ?></a><?php } ?>
			</h2>

		<?php endif; ?>


				<?php the_excerpt(); ?>

	</div>

<?php $i = 1; endwhile; ?>

<?php if ( is_single() || is_page() && !is_page('opportunities') ) : ?>
	<?php the_tags( '<div class="tags"><h3>Tagged:</h3><ul><li><span>', '</span></li><li><span>', '</span></li></ul></div>'); ?>	
<?php endif; ?>

<?php if ( is_single() && !in_category('work') && comments_open( $post->ID ) ) comments_template(); ?>

</div>

</div>

<?php if ( !is_single() ) pagination( $wp_query, get_category_link( get_query_var('cat') ) ); ?>

<?php else : ?>

	<div class="page" role="main">

		<div id="content">
			<div class="post first">

<h2>Page Not Found</h2>

<p>The pool on the roof must have a leak.</p>

<p><img src="http://martyspellerberg.com/files/2013/08/rr-square-2.png" style="width: 100%" alt="" /></p>

</div>

</div>

</div>


<?php endif; ?>



<?php get_footer(); ?>