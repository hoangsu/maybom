<?php 
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
add_image_size( 'member-thumb-grid', 312, 219, true );
add_image_size( 'member-thumb-list', 155, 67, true ); 
add_image_size( 'category-thumb-list', 247, 215, true ); 

register_nav_menus(array(
		'primary' => 'Main Menu',
		'left' => 'Left Menu'
	));

if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'Left Sidebar',
		'before_title' => '<div class="hot-news-header">',
		'after_title' => '</div>',
		'before_widget' => '<div id="thongke12">',
		'after_widget' => '<div class="right-block-bottom"></div></div>'
	));
	};
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'Footer',
		'before_widget' => '',
		'after_widget' => ''
	));
	};
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'List all products',
		'before_widget' => '',
		'after_widget' => ''
	));
	};
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//function custom_excerpt_length( $length ) {
	//return 30;
//}
//add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );

		if ( $excut < 0 ) {
			echo trim(mb_substr( $subex, 0, $excut ));
		} else {
			echo $subex;
		}
		echo '...';
	} else {
		echo $excerpt;
	}
}
add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs) {

 unset($tabs['reviews']);

 return $tabs;
}
function remove_loop_button(){
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
}
add_action('init','remove_loop_button');

// Display Fields
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );
 
// Save Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );
function woo_add_custom_general_fields() {
 
  global $woocommerce, $post;
  
  echo '<div class="options_group">';
  
  // Custom fields will be created here...
  // Text Field
woocommerce_wp_text_input( 
	array( 
		'id'          => '_text_field', 
		'label'       => __( 'Tình trạng', 'woocommerce' )
	)
);
  echo '</div>';
	
}
function woo_add_custom_general_fields_save( $post_id ){
	
	// Text Field
	$woocommerce_text_field = $_POST['_text_field'];
	if( !empty( $woocommerce_text_field ) )
		update_post_meta( $post_id, '_text_field', esc_attr( $woocommerce_text_field ) );}
?>
