
<?php if ( footer_enabled() ) : ?>

  <footer>
    
    <div class="container-fluid">
      
      
      <div class="row">
      
        <div class="col footer-top d-flex flex-column align-items-center">
        
          <a class="mb-3" href="<?php if ( is_front_page() && ! is_home() ) echo '#'; else echo get_site_url()?>">HOME</a>
          
          <ul class="list-inline site-info mb-3">
            <li class="list-inline-item mr-2 mb-2">Brand name</li>
            <li class="list-inline-item mr-2 mb-2"><address>1355 Market St, Suite 900. San Francisco, CA 94103</address></li>
            <li class="list-inline-item mb-2"><address>contact@example.com</address></li>
          </ul>
        
        </div>
        
      </div>
      
      <div class="row">
        
        <div class="col bottom-bar d-flex justify-content-center">
  
          <?php if ( has_nav_menu( 'social-menu-bottombar' ) ) : ?>
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
          <?php endif ?>
        
        </div>
      
      </div>
      
    </div>
  
  </footer>

<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>