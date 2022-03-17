<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- google fonts  -->
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo get_site_url() . "/wp-content/themes/starter-theme/styles/styles.css"?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="wrapper">
    <h1><a href="<?php get_home_url(); ?>"><?php echo get_bloginfo(); ?></a></h1>
  </div> 
</header>

<main id="maincontent">

    <!-- <?php wp_nav_menu( array(
      'theme_location' => 'primary',
      'container_class' => 'menu'
    )); ?> -->
