<?php get_header(); ?>
<div id="wrap">
  <div class="trant"> 
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>  </div>
  <div class="block_main_sv">
    <div class="left_sv">
          <?php dynamic_sidebar('Bài viết mới nhất')?>
      <div class="img_logo"> <img src="/wp-content/uploads/2014/08/panasonic.png" > <img src="/wp-content/uploads/2014/08/lo_go_pedrollo_1.gif" ></div>
    </div>
    <div class="right_sv">
      <div class="img_pro"><?php include (TEMPLATEPATH . '/banner.php'); ?>    </div>
      <div class="txt">
        <div class="text_titl"><?php the_title(); ?></div>
        <div class="text_sc_detail">
          <?php if ( have_posts() ) : while ( have_posts()): the_post();?>
          <?php the_content();?>
           <?php endwhile; ?>
            <?php else:  ?>
            <p>
              <?php _e('Sorry, no posts matched your criteria.'); ?>
            </p>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>
