<?php
/*
Template Name: Work
*/
?>
<?php get_header(); ?>

<div class="page" role="main">

	<div id="content">
			<div class="post first">

	<p class="intro">Interactive media consulting <span>for artists and museums.</span></p>

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

						<?php the_content(); ?>

			<?php endwhile; ?>
		<?php else : ?>
			<p>Page not found.</p>
		<?php endif; ?>

<?php
		$args = array(
		'orderby' => 'menu_order', // Allows users to set order of subpages
		'order' => 'DESC',
		'post_parent' => $post->ID,
		'post_type' => 'page',
		'numberposts'     => 100,
		'post_status' => 'publish'
		); $postslist = get_posts($args);
		foreach ($postslist as $post) : setup_postdata($post); ?>
			<div class="piece">
			<h3 class="entry-title off"><a><?php the_title(); ?><span></span></a></h3>

<div class="entry-content">
			<?php the_content(); ?>
			</div>
			
			</div>
		<?php endforeach; ?>


	</div>
	</div>
	</div>

<?php get_footer(); ?>