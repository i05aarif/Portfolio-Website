<?php 
   /*
      Template Name: Full Width Template No Top Banner
   */
   

get_header();?>
<!-------------------->
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
