<?php /* Template Name: Full Width with no Header and Footer */ ?>

<?php
add_filter( 'header_enabled', '__return_false' );
add_filter( 'footer_enabled', '__return_false' );
?>

<?php get_header(); ?>

<main id="post-<?php the_ID(); ?>" <?php post_class('container-fluid'); ?>>
  
  <?php
  while ( have_posts() ) : the_post();
    the_content();
  endwhile; // End of the loop.
  ?>

</main>

<?php get_footer(); ?>

