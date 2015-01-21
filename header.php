<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php 
	wp_title( '&ndash;', true, 'right' );
	bloginfo( 'name' ); 
	$site_description = get_bloginfo( 'description', 'display' );

	if ( $paged >= 2 || $page >= 2 )
		echo ' &ndash; ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
	?></title>

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-114.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-72.png" />
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-57.png" />
	<meta name="application-name" content="Marty Spellerberg"/> 
	<meta name="msapplication-TileColor" content="#ebebeb"/> 
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-144.png"/>

	<meta name="viewport" content="initial-scale=1.0, width=device-width" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>
<body>
<div class="fullpage">
	<div class="layout">

		<h1><a href="<?php echo get_option('home'); ?>/">Marty Spellerberg</a></h1>

		<div class="header">
			<div class="headerpadding">
				<a class="close"><span>Close</span></a>
				<ul>
					<li <?php if ( is_category('blog') || is_home() ) echo 'class="selected"' ?>><a href="/">All</a></li>
					<li <?php if ( is_tag('artists') ) echo 'class="selected"' ?>><a href="/tag/artists" class="tag">Artists</a></li>
					<li <?php if ( is_tag('museums') ) echo 'class="selected"' ?>><a href="/tag/museums" class="tag">Museums</a></li>
					<li <?php if ( is_tag('wordpress') ) echo ' class="selected"' ?>><a href="/tag/wordpress" class="tag">WordPress</a></li>
					<!-- <li class="line <?php if ( is_page('opportunities') ) echo 'selected' ?>"><a href="/opportunities">Opportunities</a></li> -->
					<li class="line"><a href="mailto:marty@martyspellerberg.com">Email</a></li>
				</ul>
			</div>
		</div>
