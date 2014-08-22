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
      <div class="block_left">
        <div class="top_left">
          <div class="title_sv"> Danh mục sản phẩm </div>
        </div>
        <div class="bot_left">
          <ul>
            <li><a href="#" title="Elevators" class="dcjq-parent">Máy bơm công nghiệp</a> </li>
            <li><a href="#" title="Escalators" class="dcjq-parent">Máy bơm tăng áp</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="img_logo"> <img src="/wp-content/uploads/2014/08/panasonic.png" > <img src="/wp-content/uploads/2014/08/lo_go_pedrollo_1.gif" ></div>
    </div>
    <div class="right_sv">
      <div class="img_pro"><?php include (TEMPLATEPATH . '/banner.php'); ?>    </div>
      <div class="txt">
        <div class="text_titl"> Tìm kiếm </div>
         <?php if ( have_posts() ) : while ( have_posts()): the_post();?>

        <div class="group_pr">
          <div class="pro_sp_pr">
            <div class="pro_pr">
              <div class="block_img">  <a title="<?php the_title_attribute(); ?>" class="news-title1" href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('thumbnail'); ?>
                </a></div>
            </div>
            <div class="bongtt"> </div>
            <div class="pro-name22">
              <p class="pr_a"><a title="<?php the_title_attribute(); ?>" class="news-title1" href="<?php the_permalink(); ?>">
                  <?php the_title() ?></a></p>
               <p><?php the_excerpt_max_charlength(60); ?></p>
            </div>
          </div>
        </div>
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
<?php get_footer();?>
