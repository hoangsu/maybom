<?php get_header(); ?>

<div class="wrapper-body">
  <?php get_sidebar();?>
  <div id="main-content">
    <div id="con-main-content">
      <div id="contenbg"> <?php single_cat_title();?></div>
      <div class="block-tintuc-content">
        <div class="block-tintuc-trong">
          <div class="news-list1">
            <ul>
              <?php if ( have_posts() ) : while ( have_posts()): the_post();?>
              <li> <a title="<?php the_title_attribute(); ?>" class="news-title1" href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('thumbnail'); ?>
                </a>
                <h2><a title="Mua thanh lý nội thất văn phòng" class="news-title1" href="<?php the_permalink(); ?>">
                  <?php the_title() ?>
                  </a></h2>
                <p class="posted-time1"> </p>
                <div class="news-desc1">
                  <?php the_excerpt(); ?>
                </div>
                <a title="Mua thanh lý nội thất văn phòng" class="view-details1" href="/DV/40/mua-thanh-ly-noi-that-van-phong.html"> Xem chi tiết...</a>
                <div class="article_seperator"> &nbsp;</div>
              </li>
              <?php endwhile; ?>
            </ul>
            <?php else:  ?>
            <p>
              <?php _e('Sorry, no posts matched your criteria.'); ?>
            </p>
            <?php endif; ?>
          </div>
          <div class="clear-left"> &nbsp;</div>
          <div class="pager">
            <div>
              <?php
global $wp_query;

$big = 999999999; // need an unlikely integer
if ( $wp_query->max_num_pages > 1 ) {?>
        <span style="border: 1px solid #ccc; padding: 5px 10px;">Trang</span><span>
<?php    } 
echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>
              </span></div>
          </div>
        </div>
      </div>
      <div class="block-boot-content"></div>
    </div>
  </div>
  <div class="clear-both"> </div>
</div>
<?php get_footer();?>
