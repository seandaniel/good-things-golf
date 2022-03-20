<?php get_header(); ?>
<div class="wrapper">
 
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <section class="item-level-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages(array(
          'before' => '<div class="page-link"> Pages: ',
          'after' => '</div>'
        )); ?>
      </div><!-- .entry-content -->
      <h1><?php the_title(); ?></h1>
      <h2><?php echo get_the_date(); ?></h2>

      <div class="home-container">
        <a href="<?php echo get_home_url(); ?>" title="Home"><i class="fa-solid fa-circle-arrow-left"></i></a>
      </div>


  <?php endwhile; // end of the loop. ?>

</section> <!-- /.content -->

<?php get_footer(); ?>