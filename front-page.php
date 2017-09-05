<?php get_header(); ?>

<!-- TODO: Dynamic container width -->
<!-- TODO: Wrap content in row -->
<main id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

<!--  <h2>H2 heading</h2>-->
<!--  -->
<!--  <p>-->
<!--    Morbi a sodales dolor. Phasellus dictum neque sed dui tincidunt maximus in ut velit. Vestibulum pretium lacinia efficitur. Donec ut iaculis justo, et semper neque. Cras iaculis, ipsum nec viverra euismod, nulla augue cursus nibh, a consectetur ex mi id magna. Donec eros lectus, faucibus eget faucibus tincidunt, ornare vel metus. Ut gravida porttitor suscipit. In magna risus, sodales in lorem convallis, sollicitudin gravida nisi. Quisque pulvinar eros et eros dapibus feugiat. Maecenas finibus et erat non condimentum. Nunc pulvinar ultricies tortor ac aliquet. Donec a mi lectus. Duis vitae cursus arcu.-->
<!--  </p>-->
<!--  --><?php //echo do_shortcode('[ecs-list-events]'); ?>
  
  <?php
  while ( have_posts() ) : the_post();
//    echo '<div class="row">';
    the_content();
//    echo '</div>';
  endwhile; // End of the loop.
  ?>

</main>

<?php get_footer(); ?>
