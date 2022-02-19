<?php get_header();?>
<!-------------------->
<div class="about_bg_img">
  <img src="<?php echo get_template_directory_uri();?>/img/10.jpg">
</div>
<div class="container">
  <div class="row">
    <div class="col-md-8">
        <?php   
            if(have_posts()) : 
            while(have_posts()) : the_post(); ?>
             <div class="row about_content">
               <div class="col-sm-4 about_f_img">
                  <?php the_post_thumbnail();?>
               </div>
               <div class="col-sm-8 about_p">
                  <p> <?php the_content(); ?></p>
               </div>       
             </div>

               <?php endwhile;?>
            <?php endif;?>
    </div>
    <div class="col-md-4">
         <?php get_template_part('customer-review'); ?> 
    </div>
  </div>
</div>







<?php get_template_part('before-footer-widget'); ?>  
    

<?php get_footer();?>