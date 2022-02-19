<?php 
   /*
   	Template Name: View Cart Template
   */
   
   
   get_header();?>
<div class="container">
   <?php woocommerce_breadcrumb();?>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-8">
         <?php   while(have_posts()) : the_post(); ?> 
         <div class="thumbnail_img">
            <a href="#"><?php the_post_thumbnail();?></a>
         </div>
         <a href="<?php the_permalink();?>"><?php the_title();?></a></li>
         <p><?php the_content();?></p>
         <?php endwhile;?>
      </div>
      <div class="col-md-4">
         <?php get_sidebar();?>
         <?php get_template_part('sidebar-slider'); ?> 		     
      </div>
   </div>
</div>
<?php get_template_part('before-footer-widget'); ?> 
<?php get_footer();?>
