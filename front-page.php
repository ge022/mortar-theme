<?php get_header(); ?>

<!-- TODO: Dynamic container width -->
<!-- TODO: Wrap content in row -->
<main id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

  <h2>Front page</h2>
  
  <?php echo do_shortcode('[ecs-list-events]'); ?>
  
  <?php
  while ( have_posts() ) : the_post();
//    echo '<div class="row">';
    the_content();
//    echo '</div>';
  endwhile; // End of the loop.
  ?>

</main>

<?php get_footer(); ?>
