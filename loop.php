<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

 <ul class="content-ul">

	<?php while ( have_posts() ) : the_post(); ?>

		<li>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<a href="<?php the_permalink(); ?>" title="View <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
					<?php echo get_the_post_thumbnail($post_id, 'full'); ?>
					<h2 class="entry-title"><?php the_title(); ?></h2>
				</a>
			</article><!-- #post-## -->
		</li>
		
	<?php endwhile; // End the loop. Whew. ?>

</ul>



<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<section class="next-prev-container">
		<?php echo get_previous_posts_link('<i class="fa-solid fa-arrow-left"></i> Older Posts'); ?>
  	<?php echo get_next_posts_link('More Posts <i class="fa-solid fa-arrow-right"></i>'); ?>
	</section>
<?php endif; ?>
