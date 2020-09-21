<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name') ?>">

  <?php
  /* Theme color for browsers that support it
  <meta name="theme-color" content="#000">
  */
  ?>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>

  <?php if (is_search()) { ?>
   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

  <?php if ( is_singular() && comments_open() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Raleway:ital,wght@0,300;0,400;1,400&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>

  <?php if ( function_exists( 'wp_body_open' ) ) {
  	wp_body_open();
  } ?>

  <?php // Header
  get_template_part('parts/global/site-header');

  // Main Content ?>
  <main>
