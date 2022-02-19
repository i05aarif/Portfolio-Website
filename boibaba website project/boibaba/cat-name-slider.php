<section data-aos="fade-up"data-aos-duration="2000">
   <div class="container">
      <div class="page_heading">
         <h2><a href="#">Category Book</a></h2>
      </div>
      <div class="row center">
         <?php
            $args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1,
            'order'           =>'DESC',
            'product_cat'    => 'History'
            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            global $product;
            
            ?>
         <div class="col-md-2 new_book_content">
            <?php wc_get_template_part( 'content', 'product' );?>
         </div>
         <?php
            endwhile;
            
            wp_reset_query(); 
            ?>
      </div>
   </div>
</section>
