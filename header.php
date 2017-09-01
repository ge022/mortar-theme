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

<!--      TODO: Dynamic logo height, brand logo and title margins -->
      
          <div class="brand-logo d-flex justify-content-center">
            
            <img class="img-fluid" src="http://via.placeholder.com/190x200" alt="Brand logo">
          
          </div>
          
          <h1 class="brand-title d-flex flex-column align-items-center"><span class="brand-title-primary">Brand Title</span><small class="brand-title-secondary">Secondary text</small></h1>
          
        </div>


      </div>
      
      <div class="row">

        <nav class="col navbar navbar-expand-lg navbar-light bg-light w-100">
          
          <div class="container">
            
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse w-100" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home |&nbsp;<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features |&nbsp;</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing |&nbsp;</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
            </div>

          </div>

        </nav>
        
      </div>


      
    </div>
  
  </header>

<?php endif; ?>