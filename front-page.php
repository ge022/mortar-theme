<?php get_header(); ?>

<!-- TODO: Theme customizer dynamic container width -->
<main id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

  <?php
    while ( have_posts() ) : the_post();
      the_content();
    endwhile; // End of the loop.
  ?>

</main>

<?php get_footer(); ?>
