<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0"
	href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon"
	href="<?php echo get_theme_mod( 'upload_favicon' ); ?>" />
<title><?php
/*
 * Print the <title> tag based on what is being viewed.
 */
global $page, $paged;

wp_title ( '-', true, 'right' );

// Add the blog name.
bloginfo ( 'name' );

// Add the blog description for the home/front page.
$site_description = get_bloginfo ( 'description', 'display' );
if ($site_description && (is_home () || is_front_page ()))
	echo " - $site_description";
	
	// Add a page number if necessary:
if ($paged >= 2 || $page >= 2)
	echo ' - ' . sprintf ( __ ( 'Page %s', 'aude' ), max ( $paged, $page ) );

?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- GOOGLE WEB FONTS -->
<link href='http://fonts.googleapis.com/css?family=Kreon'
	rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather'
	rel='stylesheet' type='text/css'>

<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div class="preloader">
  		<div class="preload-status">&nbsp;</div>
	</div>
	<!-- Header -->
	<header class="row site-header">
		<div class="two columns">
		</div>
		<div class="eight columns ">
			<div class="row border-top-normal">
				<a href="<?php echo home_url( '/' ); ?>">
					<h1 class="logo">
					     <?php if (get_theme_mod( 'upload_logo' )) { ?>
					    <img src="<?php echo get_theme_mod( 'upload_logo' ); ?>"
											alt="<?php bloginfo( 'name' );?>" />
					    <?php } else { ?>
					    <?php echo bloginfo( 'name' ); ?>
					    <?php } ?>
				    </h1>
				</a>
				<p class="motto"><?php bloginfo( 'description' );?></p>
			</div>
		</div>
		<div class="two columns fixed">
			<nav class="border-top-normal">
     			<?php
					wp_nav_menu ( array (
							'theme_location' => 'header',
							'container' => '',
							'menu_id' => 'themenu',
							'menu_class' => 'navigation' 
					) );
					?>
				</div>
			</nav>
		</div>
	</header>
	<!-- End Header -->
