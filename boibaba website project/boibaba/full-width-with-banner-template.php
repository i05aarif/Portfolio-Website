<?php 
   /*
      Template Name: Full Width Template With Top Banner
   */
   

get_header();?>
<!-------------------->
<div class="top_banner_for_full_width">
   <?php the_post_thumbnail();?>
</div>
<div class="container">
   <div class="row">
      <?php   
         if(have_posts()) : 
         while(have_posts()) : the_post(); ?>
      <div class="row">
         <div class="col">
            <p> <?php the_content(); ?></p>
         </div>
      </div>
      <?php endwhile;?>
      <?php endif;?>
   </div>
</div>
<?php get_footer();?>
