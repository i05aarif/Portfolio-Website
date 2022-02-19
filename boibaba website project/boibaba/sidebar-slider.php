<div class="sidebar_page_heading">
   <h2>Best Deal</h2>
</div>
<div class="slider_sidebar_wrap slick-single-sidebar">
   <?php
      global $post;
      $args=array(
      'posts_per_page'  =>-1,
      'post_type'     =>'slider_item_sidebar',
      'page'        =>$paged,
      'order'       =>'DESC');        
        $allInfo= get_posts($args);
        foreach ($allInfo as $post):setup_postdata($post);
        $bannerImageURL= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'slider_item_sidebar');      
        ?>
   <div class="slider_single_sidebar">
      <div class="slider_single_sidebar_image">
          <?php 
            $link = get_field('sidebar_slider_link');
            if( $link ): ?>
         <a href="<?php echo esc_url( $link ); ?>"> <img src="<?php echo $bannerImageURL[0];?>"> </a>
         <?php endif; ?>
      </div>
      <div class="sidebar_slider_content">
         <p><?php the_content();?></p>
      </div>
   </div>
   <?php endforeach;?>
   <?php wp_reset_query();?>   
</div>
