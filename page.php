<?php get_header(); ?>

<main id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
  <h1>H1 Header</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et orci nisi. Morbi tincidunt mi ut faucibus pellentesque. Pellentesque placerat metus ut nisl egestas, quis cursus ex ullamcorper. Suspendisse potenti. Nullam lobortis consequat purus non ornare. Suspendisse aliquet, nunc nec varius porta</p>
  <h2>H2 Header</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et orci nisi. Morbi tincidunt mi ut faucibus pellentesque. Pellentesque placerat metus ut nisl egestas, quis cursus ex ullamcorper. Suspendisse potenti. Nullam lobortis consequat purus non ornare. Suspendisse aliquet, nunc nec varius porta</p>
  <h3>H3 Header</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et orci nisi. Morbi tincidunt mi ut faucibus pellentesque. Pellentesque placerat metus ut nisl egestas, quis cursus ex ullamcorper. Suspendisse potenti. Nullam lobortis consequat purus non ornare. Suspendisse aliquet, nunc nec varius porta</p>
  <h4>H4 Header</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et orci nisi. Morbi tincidunt mi ut faucibus pellentesque. Pellentesque placerat metus ut nisl egestas, quis cursus ex ullamcorper. Suspendisse potenti. Nullam lobortis consequat purus non ornare. Suspendisse aliquet, nunc nec varius porta</p>
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item disabled"><a class="page-link" href="/about/services">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>
  <?php
    while ( have_posts() ) : the_post();
      the_content();
    endwhile; // End of the loop.
  ?>
  
</main>

<?php get_footer(); ?>
