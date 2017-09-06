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

      <div class="row">

        <!--  TODO: Responsive collapse for header-top -->
        <!--  TODO: Dynamic header-top padding  -->
        
        <div class="col pt-4 pb-4 header-top">

<!--      TODO: Dynamic logo height, logo/title margin -->
      
          <div class="d-flex text-center justify-content-center site-logo">
            
            <a href="<?php if ( is_front_page() && ! is_home() ) echo '#'; else echo get_site_url()?>">
              <?php
                the_custom_logo();
              ?>
            </a>
            
          </div>
          
          <h1 class="d-flex flex-column align-items-center mt-3 mb-0 site-branding">
            
            <a href="<?php if ( is_front_page() && ! is_home() ) echo '#'; else echo get_site_url()?>">

              <span class="d-block text-center site-title"><?php bloginfo( 'name' ); ?></span>
              
              <small class="d-block text-center site-description">
                <?php
                $description = get_bloginfo( 'description', 'display' );
  
                if ( $description || is_customize_preview() ) : ?>
                  <?php echo $description; ?>
                <?php endif;
                ?>
              </small>
              
            </a>
            
          </h1>
          
        </div>


      </div>
      
      <div class="row">

        <!-- TODO: Dynamic navbar padding -->

        <nav class="col navbar navbar-expand-lg navbar-dark bg-dark w-100">
          
          <div class="container">
            
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse w-100" id="navbarNav">

              <!-- TODO: Typography control styling -->
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