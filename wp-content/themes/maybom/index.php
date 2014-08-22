<?php get_header(); ?>

<div id="wrap">
  <div id="page" class="clearfix">
    <div class="homeslider">
     <?php include (TEMPLATEPATH . '/homeslider.php'); ?>    </div>
  </div>
  <div class="bong_mo"> </div>
  <div class="ix_text">
    <div class="img_id"> <a href="/"> <img src="<?php bloginfo('template_url')?>/images/gioithieu.png"> </a> </div>
    <div class="text_gt"> 
      <?php dynamic_sidebar('Giới thiệu công ty')?>
    </div>
  </div>
  <div class="block_content">

    
    <div class="show_index">
      <div class="left_main">
        <div class="name">Phương châm</div>
        <div class="loaisp"> <?php dynamic_sidebar('Người VN dùng hàng VN'); ?></div>
        <div class="bongmo"> </div>
      </div>
      <div class="right_main">
        <div class="name_ct">địa chỉ</div>
        <div class="rht_ct">
          <div class="text_ct">
            <div class="pr_img"> <img src="<?php bloginfo('template_url')?>/images/phone.png" width="46" height="49" /> </div>
            <div class="text_add">
             <?php dynamic_sidebar('địa chỉ')?>
            </div>
            <div class='bg_dot'>&nbsp;</div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<?php get_footer();?>