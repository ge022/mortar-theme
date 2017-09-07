
<?php if ( footer_enabled() ) : ?>

  <footer>
    
    <div class="container-fluid">
      
      <div class="row">
      
        <!-- TODO: Dynamic footer-top padding -->
        
        <div class="col text-center d-flex flex-column align-items-center bg-dark pt-4 pb-4 footer-top">

          <!-- TODO: Dynamic list-item margins -->
          
          <a class="back-to-top" href="<?php if ( is_front_page() && ! is_home() ) echo '#top'; else echo esc_url( home_url( '/' ) ); ?>">HOME</a>
          
          <ul class="list-inline mt-custom site-info">
            <li class="list-inline-item mr-2 mb-3 site-title">SITE TITLE</li>
            <li class="list-inline-item mr-2 mb-3"><address><a href="#google-maps" target="_blank">1355 Market St, Suite 900. San Francisco, CA 94103</a></address></li>
            <li class="list-inline-item mb-3"><address><a href="mailto:contact@example.com">contact@example.com</a></address></li>
          </ul>
        
        </div>
        
      </div>
      
      <div class="row">
        
        <div class="col text-center d-flex justify-content-center bg-secondary bottom-bar">

          <!-- TODO: Dynamic social icon font size, and nav-link margin -->
          <!-- TODO: Typography control styling -->

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