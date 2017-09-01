<?php get_header(); ?>

<main id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
  <h2>Page</h2>
  <?php
    while ( have_posts() ) : the_post();
      the_content();
    endwhile; // End of the loop.
  ?>
  
</main>

<?php get_footer(); ?>
