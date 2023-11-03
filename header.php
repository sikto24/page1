<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>


  <!-- Start Offcanvas Menu -->

  <div class="off-canvas-menu">
  <?php
    wp_nav_menu(
      array(
        'theme_location' => 'menu-2',
        'menu_id'        => 'mobile-menu',
        'menu_class'        => 'mobile-menu-wrapper',
        'container_class'=> 'mobile-menu-container',
      )
    );
  ?>

  </div>

    <!-- End Offcanvas Menu -->


  <!-- ======== Start Top Bar ==========  -->
    <section class="top-bar-area-wrapper">
      <div class="container">
        <div class="row">
          <div class="col ">

            <span class="left-top-bar">
              <a href="tel:7868420320"><i class="fa fa-phone"></i>786-842-0320</a>
            </span>
            <span class="top-line">|</span>
            <span class="right-top-bar">
              <a href="mailto:sales@anncarequipment.com"><i class="fa fa-envelope"></i>sales@anncarequipment.com</a>
            </span>
       
          </div>
        </div>
      </div>
    </section>

  <!-- ======== End Top Bar ==========  -->


  <!-- ======== Start Header ==========  -->

  <header class="header-area-wrapper">
    
    <div class="container">
      <div class="row">
          <div class="col-lg-3 col-md-4 my-auto col-sm-6 col-6">
            <div class="site-logo">
            <?php if(has_custom_logo()){
                  the_custom_logo();
                }else{
                    echo "<h1><a href='".home_url("/")."'>".get_bloginfo('name')."</a></h1>";
                }
                ?>
            </div>
          </div>
          <div class="col-lg-9 col-md-8 my-auto col-sm-6 col-6">

          
            <nav class="main-menu-area">
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'menu-1',
                  'menu_id'        => 'primary-menu',
                )
              );
            ?>

              <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </nav>
          </div>
      </div>
    </div>
  </header>

  <!-- ======== End Header ==========  -->
