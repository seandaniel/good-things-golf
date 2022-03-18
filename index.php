<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="wrapper">

<?php //content ?>
  <ul class="content-ul">
      <?php get_template_part( 'loop', 'index' );	?>
  </ul>

  <!-- <?php get_sidebar(); ?> -->

</div> 

<?php get_footer(); ?>