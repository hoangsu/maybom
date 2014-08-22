<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $product;
?>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
 <?php $price = get_post_meta( get_the_ID(), '_regular_price',true);
					  $sale = get_post_meta( get_the_ID(), '_sale_price', true); 
					  ?>
                <p class="p-price">Giá KM: <span class="price-new"><b><?php if($sale == '') {?>Liên hệ <?php } else { echo $sale."đ"; }?></b></span></p>
                <p class="p-price">Giá cũ: <span class="price-old"><b><?php if($price == '') {?>Liên hệ <?php } else { echo $price."đ"; }?></b></span></p>
	<!-- <p class="price"><?php echo $product->get_price_html(); ?></p> -->
	<?php $product_status = get_post_meta( get_the_ID(), '_stock_status',true);?>
	<p>Kho hàng: <?php if ($product_status == 'instock') { echo "Còn hàng";} else {echo "Hết hàng";}?></p>
	<meta itemprop="price" content="<?php echo $product->get_price(); ?>" />
	<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
	<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />
<p class="status">Tình Trạng : <?php echo get_post_meta( $post->ID, '_text_field', true );?></p>
<div class="fb-like" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
</div>