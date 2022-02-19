<?php get_header();?>
<!-------------------->
<section id="slider_cat"data-aos="fade-up"data-aos-duration="2000">
   <div class="container slider_cat_container">
      <div class="row">
         <div class="col">
            <!-------------------->
            <div class="home_page_right">
               <div class="slider_wrap slick-single-item">
                  <?php
                     global $post;
                     $args=array(
                     'posts_per_page'  =>-1,
                     'post_type'     =>'slider_item',
                     'page'        =>$paged,
                     'order'       =>'DESC');        
                       $allInfo= get_posts($args);
                       foreach ($allInfo as $post):setup_postdata($post);
                       $bannerImageURL= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'slider_item');      
                       ?>
                  <div class="slider_single_item">
                     <div class="slider_image">
                        <img src="<?php echo $bannerImageURL[0];?>"> 
                     </div>
                  </div>
                  <?php endforeach;?>
                  <?php wp_reset_query();?>   
               </div>
               <!------------>
            </div>
            <!-------------------->
            <!----right end----->
            <div class="home_page_left main_sidebar">
               <?php get_template_part('sidebar-for-homepage'); ?>
               <?php get_template_part('sidebar-slider'); ?> 
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Product slider -->
<?php get_template_part('all-product-slider'); ?> 
<?php get_template_part('cat-name-slider'); ?> 
<!-- Product slider -->
<section id="service_short"data-aos="fade-up"data-aos-duration="2000">
   <div class="container">
      <div class="row">
         <div class="col-md-3 support_info_wrap">
            <div class="support_info">
               <h2><i class="fas fa-truck"></i>  Free Delivery</h2>
            </div>
         </div>
         <div class="col-md-3 support_info_wrap">
            <div class="support_info">
               <h2><i class="far fa-smile"></i>  Customer Satisfaction</h2>
            </div>
         </div>
         <div class="col-md-3 support_info_wrap">
            <div class="support_info">
               <h2><i class="fas fa-headset"></i>  24/7</h2>
            </div>
         </div>
         <div class="col-md-3 support_info_wrap">
            <div class="support_info">
               <h2><i class="fas fa-redo"></i>  365 Days for free return</h2>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_template_part('before-footer-widget'); ?> 
<?php get_footer();?>
