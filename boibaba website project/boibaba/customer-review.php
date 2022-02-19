<div class="sidebar_page_heading"><h2>Peoples View!</h2></div>
          <div class="slider_sidebar_wrap slick-single-sidebar">
          <?php
              global $post;
              $args=array(
              'posts_per_page'  =>-1,
              'post_type'     =>'review_item_sidebar',
              'page'        =>$paged,
              'order'       =>'DESC');        
                $allInfo= get_posts($args);
                foreach ($allInfo as $post):setup_postdata($post);
                $bannerImageURL= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'slider_item');      
                ?>
               <div class="slider_single_sidebar">
                    <div class="slider_single_sidebar_image">
                       <img src="<?php echo $bannerImageURL[0];?>">  
                    </div>  
                </div> 
            <?php endforeach;?>
            <?php wp_reset_query();?>   
        </div> 