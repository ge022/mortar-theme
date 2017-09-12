
<?php if ( footer_enabled() ) : ?>

  <footer>
    
    <div class="container-fluid">
      
      <div class="row">
        
        <div class="col text-center d-flex flex-column align-items-center footer-top">
          
          <a class="home-link" href="<?php if ( is_front_page() && ! is_home() ) echo '#top'; else echo esc_url( home_url( '/' ) ); ?>">HOME</a>
          
          <ul class="list-inline contact-info">
            <li class="list-inline-item site-title">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php
                  bloginfo( 'name' );
                ?>
              </a>
            </li>
            <li class="list-inline-item">
              <address>
                <a class="site-address" href="#google-maps" target="_blank"><?php echo get_theme_mod( 'site_address' ); ?></a>
              </address>
            </li>
            <li class="list-inline-item">
              <address>
                <a class="site-email" href="mailto:<?php echo get_theme_mod( 'site_email' ) ;?>"><?php echo get_theme_mod( 'site_email' ) ;?></a>
              </address>
            </li>
          </ul>
        
        </div>
        
      </div>
      
      <div class="row">
        
        <div class="col text-center d-flex justify-content-center bottom-bar">
          
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