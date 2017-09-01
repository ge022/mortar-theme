<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php if ( header_enabled() ) : ?>

  <header id="top">
  
    <div class="container-fluid">
    
<!--  TODO: Responsive collapse for header top -->
      
      <div class="row">
        
        <div class="col header-top">

<!--      TODO: Dynamic logo height, site logo and title margins -->
      
          <div class="site-logo d-flex justify-content-center">
            
            <a href="<?php if ( is_front_page() && ! is_home() ) echo '#'; else echo get_site_url()?>">

              <img class="img-fluid" src="http://via.placeholder.com/190x200" alt="Site logo">
              
            </a>
            
          
          </div>
          
          <h1 class="site-title d-flex flex-column align-items-center">
            <span class="site-title-primary">Brand Name</span>
            <small class="site-title-secondary">Secondary text</small>
          </h1>
          
        </div>


      </div>
  
      <?php if ( has_nav_menu( 'social-menu-topbar' ) ) : ?>
      
      <?php endif; ?>
      
      <div class="row">

        <nav class="col navbar navbar-expand-lg navbar-light bg-light w-100">
          
          <div class="container">
            
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse w-100" id="navbarNav">
  
              <?php
                wp_nav_menu( array(
                  'menu' => 'main-menu',
                  'theme_location' => 'main-menu',
                  'depth' => 2,
                    'container' => false,
                    'menu_class' => 'navbar-nav mx-auto',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker()
                ));
              ?>
              
            </div>

          </div>

        </nav>
        
      </div>


      
    </div>
  
  </header>

<?php endif; ?>