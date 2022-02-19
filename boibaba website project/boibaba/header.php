<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php if (is_single() || is_page()) { wp_title('',true); } elseif(is_front_page()) { bloginfo('description'); } else { bloginfo('description'); } ?> | <?php bloginfo('name');?></title>
      <!-- fabicon -->
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/fab.png"/>
      <!-- fabicon -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- AoS-->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <?php wp_head(); ?>
   </head>
   <body <?php body_class();?>>
    <section class="sticky-top logo_menu_bg">
       <div class="container">
          <div class="row">
             <div class="col-md-3">
                <div class="logo">
               <?php $logoimg=get_header_image();?>
               <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $logoimg;?>"></a>
            </div>
            <!-- menu_responsive -->
            <div class="menu_responsive ">
               <?php
                  $args = array(
                    'theme_location' => 'top_menu'
                  );
                  
                  wp_nav_menu( $args ); ?>
            </div>
             </div>

             <div class="col-md-6">
                 <div class="product_search"><?php aws_get_search_form( true ); ?></div>
             </div>
             <div class="col-md-3">
                <div class="cart_menu">
                   <?php
                  $args = array(
                    'theme_location' => 'top_menu'
                  );
                  
                  wp_nav_menu( $args ); ?>
                </div>
             </div>
          </div>
       </div>
    </section>





      <!-- Nav Area -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light nav_menu_bg">
         <div class="container">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <?php 
                  wp_nav_menu( array(
                  'theme_location'  => 'primary',
                  'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id'    => 'navbarSupportedContent',
                  'menu_class'      => 'navbar-nav',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
                  
                  ) );    
                  ?>   
            </div>
         </div>
      </nav>
      <!-- Nav Area End -->
