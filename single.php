<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<div class="page" role="main">

		<div id="content">

<?php $i = 0; while (have_posts()) : the_post(); ?>

	<div class="post single <?php if ( $i == 0 ) echo 'first'; ?>">
			<h2>
				<?php if ( !is_single() ) { ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php } ?>
				<?php the_title(); ?>
				<?php if ( !is_single() ) { ?></a><?php } ?>
			</h2>

				<?php the_content(); ?>

				<p class="date">Posted <?php the_time('F Y') ?></p>

	</div>

<?php $i = 1; endwhile; ?>

	<?php the_tags( '<div class="tags"><h3>Tagged:</h3><ul><li><span>', '</span></li><li><span>', '</span></li></ul></div>'); ?>	

<?php if ( !in_category('work') && comments_open( $post->ID ) ) comments_template(); ?>

</div>

</div>

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