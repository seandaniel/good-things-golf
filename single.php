<?php get_header(); ?>
<div class="wrapper">
  <section>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>

        <div class="entry-content">
          <?php the_content(); ?>
          <?php wp_link_pages(array(
            'before' => '<div class="page-link"> Pages: ',
            'after' => '</div>'
          )); ?>
        </div><!-- .entry-content -->

      <div class="home-container">
        <a href="<?php echo get_home_url(); ?>" title="Home"><i class="fa-solid fa-house" aria-hidden="true"></i></a>
      </div>


    <?php endwhile; // end of the loop. ?>

  </div> <!-- /.content -->


</section>

<?php get_footer(); ?>