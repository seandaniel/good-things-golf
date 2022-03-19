<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- google fonts  -->
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/d9461c25c6.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo get_site_url() . "/wp-content/themes/starter-theme/styles/styles.css"?>" />
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="wrapper">
    <section class="h1-container">
      <a href="<?php echo get_home_url(); ?>">
        <h1><?php echo get_bloginfo(); ?></h1>
        <img src="<?php echo get_template_directory_uri() . "/styles/golf-hole-logo.svg" ?>" alt="A golf flag">
      </a>
    </section>
  </div> 
</header>

<main id="maincontent">

    <!-- <?php wp_nav_menu( array(
      'theme_location' => 'primary',
      'container_class' => 'menu'
    )); ?> -->
