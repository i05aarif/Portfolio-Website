<?php get_header();?>
		
	<div class="container">
  <div class="row">
  	<div class="col-md-9">
  	 <?php   
            if(have_posts()) : 
            while(have_posts()) : the_post(); ?>                    
			    		 <div class="blog_title">
                      <a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
                    </div> 
			    		 	<div class="blog_single_img">
                       <?php the_post_thumbnail();?>
               </div>
							<p><?php the_content();?></p>

    		<?php endwhile;?>
        <?php endif;?>
        </div>
        <div class="col-md-3">
        	<?php get_template_part('blog-sidebar'); ?> 
           <?php get_template_part('sidebar-slider'); ?> 
        </div>

  </div>
</div>



	

	<?php get_template_part('before-footer-widget'); ?>
	
	<?php get_footer();?>