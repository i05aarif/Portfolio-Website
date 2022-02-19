<?php get_header(); ?>
<div class="container">
   <div class="row">
      <?php 
         if(have_posts()) : ?>
      <div class="page_heading">
         <h2>
            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
            <?php _e('Archive For'); ?> '<?php echo single_cat_title(); ?>' <?php _e('Category'); ?>                                    
            <?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>
            <?php _e('Archive For'); ?> <?php single_tag_title(); ?> <?php _e('Tag'); ?>
            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
            <?php _e(' Archive For '); ?> <?php the_time('F jS, Y'); ?>                                        
            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            <?php _e('Archive For'); ?> <?php the_time('F, Y'); ?>                                    
            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            <?php _e('Archive For'); ?> <?php the_time('Y'); ?>                                        
            <?php /* If this is a search */ } elseif (is_search()) { ?>
            <?php _e('Search Results'); ?>                            
            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
            <?php _e('Archive For'); ?> '<?php echo get_the_author(); ?>' 
            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <?php _e('Blog Archives'); ?>                                        
            <?php } ?>							
         </h2>
      </div>
      <?php   
         while(have_posts()) : the_post(); ?>
      <div class="col-md-4">
         <div class="blog_f_img">
            <?php the_post_thumbnail();?>
         </div>
         <div class="blog_title">
            <a href="<?php the_permalink();?>">
               <h2><?php the_title();?></h2>
            </a>
         </div>
         <div class="blog_p">
            <p>  <?php the_excerpt();?></p>
         </div>
      </div>
      <?php	endwhile;
         else:
         echo 'No Posts Found';
         endif;
         
         ?>	
   </div>
</div>
<?php get_footer(); ?>
