<?php

require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';



function calling_our_resources(){
	
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',array( 'jquery' ), '4.3.1', true);

	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',array(), '4.3.1','all');

    wp_enqueue_style('bootstrap_style' , get_template_directory_uri() . '/css/bootstrap.min.css', '', '' );
	wp_enqueue_style('main_style' , get_template_directory_uri() . '/css/main.css', '', '1.0.0' );

	wp_enqueue_style('style_css' , get_stylesheet_uri(), '' , '1.0.0 ');

    wp_enqueue_style('responsiv_style' , get_template_directory_uri() . '/css/responsive.css', '', '1.0.0' );

    
	
}
add_action('wp_enqueue_scripts' , 'calling_our_resources');


register_nav_menus( array(
    'primary' => __( 'Main Menu', '' ),
     'top_menu' => __( 'Top Menu', '' ),
) );

//this is for dynamic headr img
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('post-thumbnails');
//custom excerpt
function custom_excerpt(){  
   return 15;
}
add_action('excerpt_length','custom_excerpt');

/* slider*/
function main_slider(){ 
    register_post_type('slider_item',   
    array(
    'labels'            => array(   
    'name'              =>('slider'),
    'singular_name'     =>('slider'),
    'menu_name'         =>('Main Slider'),
    'name_admin_bar'    =>('Add New slider'),
    'all_items'         =>('All Slider'),
    'add_new'           =>('Add New'),
    'add_new_item'      =>('Add Slider'),
    'edit_item'         =>('Edit Slider'),
    'view_item'         =>('View Slider'),
    'search_items'      =>('Search Slider') 
    ),
    'public'        => true,
    'has_archive'   => true,
    'rewrite'       => array('slug'=>'slider_item'),
    'menu_position' => 8,
    'menu_icon'     => 'dashicons-video-alt',
    'supports'      => array('title','thumbnail','editor')  
    )   
    );  
}
add_action('init','main_slider');

function slider_text(){ 
    register_taxonomy(  
    'main_slider_cat',
    'slider_item',
    array(  
    'hierarchical'      =>true,
    'label'             =>'Slider Category',
    'query_var'         =>true,
    'rewrite'           =>array(    
    'slug'              =>'slider-category',
    'with_fornt'        =>true
    )   
    )   
    );  
}
add_action('init','slider_text');

/* slider sidebar*/
function slider_item_sidebar(){ 
    register_post_type('slider_item_sidebar',   
    array(
    'labels'            => array(   
    'name'              =>('slider'),
    'singular_name'     =>('slider'),
    'menu_name'         =>('Sidebar Slider'),
    'name_admin_bar'    =>('Add New slider'),
    'all_items'         =>('All Slider'),
    'add_new'           =>('Add New'),
    'add_new_item'      =>('Add Slider'),
    'edit_item'         =>('Edit Slider'),
    'view_item'         =>('View Slider'),
    'search_items'      =>('Search Slider') 
    ),
    'public'        => true,
    'has_archive'   => true,
    'rewrite'       => array('slug'=>'slider_item_sidebar'),
    'menu_position' => 8,
    'menu_icon'     => 'dashicons-admin-collapse',
    'supports'      => array('title','thumbnail','editor')  
    )   
    );  
}
add_action('init','slider_item_sidebar');

function slider_item_sidebar_text(){ 
    register_taxonomy(  
    'main_slider_cat',
    'slider_item_sidebar',
    array(  
    'hierarchical'      =>true,
    'label'             =>'Slider Category',
    'query_var'         =>true,
    'rewrite'           =>array(    
    'slug'              =>'slider-category',
    'with_fornt'        =>true
    )   
    )   
    );  
}
add_action('init','slider_item_sidebar_text');

/*review*/
function review_item_sidebar(){ 
    register_post_type('review_item_sidebar',   
    array(
    'labels'            => array(   
    'name'              =>('slider'),
    'singular_name'     =>('slider'),
    'menu_name'         =>('Review Slider'),
    'name_admin_bar'    =>('Add New slider'),
    'all_items'         =>('All Slider'),
    'add_new'           =>('Add New'),
    'add_new_item'      =>('Add Slider'),
    'edit_item'         =>('Edit Slider'),
    'view_item'         =>('View Slider'),
    'search_items'      =>('Search Slider') 
    ),
    'public'        => true,
    'has_archive'   => true,
    'rewrite'       => array('slug'=>'review_item_sidebar'),
    'menu_position' => 7,
    'menu_icon'     => 'dashicons-buddicons-buddypress-logo',
    'supports'      => array('title','thumbnail','editor')  
    )   
    );  
}
add_action('init','review_item_sidebar');

/*Nav Slider*/
function nav_sidebar(){ 
    register_post_type('nav_sidebar',   
    array(
    'labels'            => array(   
    'name'              =>('slider'),
    'singular_name'     =>('slider'),
    'menu_name'         =>('Nav Slider'),
    'name_admin_bar'    =>('Add New slider'),
    'all_items'         =>('All Slider'),
    'add_new'           =>('Add New'),
    'add_new_item'      =>('Add Slider'),
    'edit_item'         =>('Edit Slider'),
    'view_item'         =>('View Slider'),
    'search_items'      =>('Search Slider') 
    ),
    'public'        => true,
    'has_archive'   => true,
    'rewrite'       => array('slug'=>'nav_sidebar'),
    'menu_position' => 7,
    'menu_icon'     => 'dashicons-controls-repeat',
    'supports'      => array('title','','')  
    )   
    );  
}
add_action('init','nav_sidebar');

//woocom theme support
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 4; //  products per row
	}
}


//Widgets Register multiple sidebar
function reg_sidebar(){
	
	register_sidebar(array(
	'name' => 'Home Category Sidebar',
		'id' => 'shop_sidebar',
		'before_widget' => '<div class="all_cat_wrap">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="shop_sidebar_h2">',
		'after_title' => '</h2>',
	
	));
    register_sidebar(array(
    'name' => 'Shop Category Sidebar',
        'id' => 'shop_page_sidebar',
        'before_widget' => '<div class="all_cat_wrap">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="shop_sidebar_h2">',
        'after_title' => '</h2>',
    
    ));
    register_sidebar(array(
    'name' => 'Main Sidebar Two',
        'id' => 'shop_sidebar2',
        'before_widget' => '<div class="side_widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="side_widgets_h2">',
        'after_title' => '</h2>',
    
    ));
     register_sidebar(array(
    'name' => 'Blog Sidebar',
        'id' => 'sidebar_blog',
        'before_widget' => '<div class="side_widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="side_widgets_h2">',
        'after_title' => '</h2>',
    
    ));
     register_sidebar(array(
    'name' => 'Footer Widgets First',
        'id' => 'footer_widgets_1st',
        'before_widget' => '<div class="footer_widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer_widgets_h2">',
        'after_title' => '</h2>',
    
    ));
       register_sidebar(array(
    'name' => 'Footer Widgets Second',
        'id' => 'footer_widgets_2st',
        'before_widget' => '<div class="footer_widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer_widgets_h2">',
        'after_title' => '</h2>',
    
    ));
         register_sidebar(array(
    'name' => 'Footer Widgets Third',
        'id' => 'footer_widgets_3rd',
        'before_widget' => '<div class="footer_widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer_widgets_h2">',
        'after_title' => '</h2>',
    
    ));
   
}
add_action('widgets_init','reg_sidebar');


/**
 * Change several of the breadcrumb defaults
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}
/**
 * Remove the breadcrumbs 
 */
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}
add_action( 'init', 'woo_remove_wc_breadcrumbs' );

/**
 * Remove the woocommerce_result_count 
 */

function woocommerce_result_count() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );
}
add_action( 'init', 'woocommerce_result_count' );


/**
 * Remove the woo_pagination 
 */


function woocommerce_pagination() {
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10, 0 );
}
add_action( 'init', 'woocommerce_pagination' );


/**
 * Remove the sorting options 
 */


function woocommerce_catalog_ordering2() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0 );
}
add_action( 'init', 'woocommerce_catalog_ordering2' );




/**
 * Add custom sorting options (asc/desc)
 */
add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby' );
function custom_woocommerce_catalog_orderby( $sortby ) {
	$sortby['menu_order'] 	= 'Position';
	$sortby['price'] 		= 'Price low to high';
	$sortby['rating']		= 'average rating';
	$sortby['price-desc']	= 'Price high to low';
	unset($sortby['popularity']);
	unset($sortby['date']);
	return $sortby;
}

//Custome_pagination

function woo_pagination_custome() {

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) return; 

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
        'prev_text'          => __( '<i class="fas fa-angle-left"></i>', 'class' ),
        'next_text'          => __( '<i class="fas fa-angle-right"></i>', 'class' )
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="pagination-wrap"><ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
       echo '</ul></div>';
        }
}





// Products per page

// Lets create the function to house our form
function woocommerce_catalog_page_ordering() {
?>


<form action="" method="POST" name="results">
<select name="woocommerce-sort-by-columns" id="woocommerce-sort-by-columns" class="sortby" onchange="this.form.submit()">
<?php

// This is where you can change the amounts per page that the user will use feel free to change the numbers and text as you want, in my case we had 4 products per row so I chose to have multiples of four for the user to select.

$shopCatalog_orderby = apply_filters('woocommerce_sortby_page', array(
 ''  => __('Results per page', 'woocommerce'),
                    '12' => __('12 per page', 'woocommerce'),
                    '16' => __('16 per page', 'woocommerce'),
                    '32' => __('32 per page', 'woocommerce'),
                    '500' => __('View All', 'woocommerce'),
));

foreach ( $shopCatalog_orderby as $sort_id => $sort_name )
echo '<option value="' . $sort_id . '" ' . selected( $_SESSION['sortby'], $sort_id, false ) . ' >' . $sort_name . '</option>';
?>
</select>

</form>
<?php

}

// now we set our cookie if we need to
function dl_sort_by_page($count) {
if (isset($_COOKIE['shop_pageResults'])) { // if normal page load with cookie
$count = $_COOKIE['shop_pageResults'];
}
if (isset($_POST['woocommerce-sort-by-columns'])) { //if form submitted
setcookie('shop_pageResults', $_POST['woocommerce-sort-by-columns'], time()+1209600, '/', 'beadsnwire.lukeseall.co.uk/', false); //this will fail if any part of page has been output- hope this works!
$count = $_POST['woocommerce-sort-by-columns'];
}
// else normal page load and no cookie
return $count;
}

add_filter('loop_shop_per_page','dl_sort_by_page');
add_action( '', 'woocommerce_catalog_page_ordering', 20 );


