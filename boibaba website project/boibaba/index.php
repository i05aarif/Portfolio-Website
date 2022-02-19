<?php get_header();?>
<!-------------------->
<div class="container">
  <div class="row">
      <div class="col-md-8">
        <div class="row">
          <?php   
            if(have_posts()) : 
            while(have_posts()) : the_post(); ?>
                <div class="col-md-6">                
                   <div class="blog_f_img">
                       <?php the_post_thumbnail();?>
                   </div>
                    <div class="blog_title">
                      <a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
                    </div> 
                    <div class="post_meta">
                       <?php the_time('M d, Y'); ?> / <?php the_category(', '); ?>
                    </div>
                   <div class="blog_p">
                      <p>  <?php the_excerpt();?></p>
                   </div> 
                </div>
                 <?php endwhile;?>
                  <?php endif;?>  

          </div>
       </div>

              
    <div class="col-md-4">
         <?php get_template_part('blog-sidebar'); ?> 
         <?php get_template_part('customer-review'); ?> 
    </div>
  </div>
</div>







<?php get_template_part('before-footer-widget'); ?>  
    

<?php get_footer();?>