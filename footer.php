
<?php if ( footer_enabled() ) : ?>

  <footer>
    
    <div class="container-fluid">
      
      <div class="row">
      
        <!-- TODO: Dynamic footer-top padding -->
        
        <div class="col d-flex flex-column align-items-center bg-dark pt-4 pb-4 footer-top">

          <!-- TODO: Dynamic back-to-top and list-item margins -->
          
          <a class="mb-4 back-to-top" href="<?php if ( is_front_page() && ! is_home() ) echo '#top'; else echo get_site_url()?>">HOME</a>
          
          <ul class="list-inline site-info">
            <li class="list-inline-item mr-2 mb-3">BRAND NAME</li>
            <li class="list-inline-item mr-2 mb-3"><address>1355 Market St, Suite 900. San Francisco, CA 94103</address></li>
            <li class="list-inline-item mb-3"><address>contact@example.com</address></li>
          </ul>
        
        </div>
        
      </div>
      
      <div class="row">
        
        <div class="col d-flex justify-content-center bg-secondary bottom-bar">

          <!-- TODO: Dynamic social icon font size, and nav-link margin -->

          <?php
              wp_nav_menu( array(
                'menu' => 'social-menu-bottombar',
                'theme_location' => 'social-menu-bottombar',
                'container' => false,
                'menu_class' => 'list-inline',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker()
              ));
            ?>
        
        </div>
      
      </div>
      
    </div>
  
  </footer>

<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>