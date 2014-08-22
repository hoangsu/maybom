<?php
/**
 * Related Products
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

$related = $product->get_related( $posts_per_page );

if ( sizeof( $related ) == 0 ) return;

$args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => $posts_per_page,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) );

$products = new WP_Query( $args );

$woocommerce_loop['columns'] = $columns;

if ( $products->have_posts() ) : ?>

	<div class="related products">

		<h2><?php _e( 'Sản phẩm liên quan', 'woocommerce' ); ?></h2>
		<ul class="product-list3">
		<?php woocommerce_product_loop_start(); ?>

			<?php while ( $products->have_posts() ) : $products->the_post(); ?>

				<li>
                <?php $postDate = get_the_date('j F Y');
				$todaysDate = date('j F Y');?>
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>" class="p-name">
                  <?php the_title(); ?>
                  </a></h2>
                <div class="p-img-wrapper">
                  <?php if(($todaysDate-$postDate) <= 10 ){ ?>
                  <span class="sp_moi" ><img src='<?php bloginfo("template_url")?>/images/new.gif' alt='Sản phẩm mới' /></span>
                  <?php }?>
                  <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                  <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" width="160px" height="160px"/>'; ?>
                  </a>
                  <?php $meta_values = get_post_meta( get_the_ID(), '_featured',true);?>
                  <?php if($meta_values=='yes'){ ?>
                  <span class="sp_Hot"><img src='<?php bloginfo("template_url")?>/images/hot.gif' alt='Sản phẩm hot' /></span>
                  <?php } ?>
                </div>
                <?php ?>
                <?php $price = get_post_meta( get_the_ID(), '_regular_price',true);
					  $sale = get_post_meta( get_the_ID(), '_sale_price', true); 
					  ?>
                <p class="p-price">Giá KM: <span class="price-new"><b><?php if($sale == '') {?>Liên hệ <?php } else { echo $sale; }?></b></span></p>
                <p class="p-price">Giá cũ: <span class="price-old"><b><?php if($price == '') {?>Liên hệ <?php } else { echo $price; }?></b></span></p>
              </li>

			<?php endwhile; // end of the loop. ?>
		</ul>
		<?php woocommerce_product_loop_end(); ?>

	</div>

<?php endif;

wp_reset_postdata();
