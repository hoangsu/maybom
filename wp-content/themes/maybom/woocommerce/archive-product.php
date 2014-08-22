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
          <ul class="accordion cateUl" id="accordion-2">
            <li class="dcjq-parent-li"><a href="#" title="Elevators" class="dcjq-parent">Máy bơm công nghiệp<span class="dcjq-icon"></span></a> </li>
            <li class="dcjq-parent-li"><a href="#" title="Escalators" class="dcjq-parent">Máy bơm tăng áp<span class="dcjq-icon"></span></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="img_logo"> <img src="/wp-content/uploads/2014/08/panasonic.png" > <img src="/wp-content/uploads/2014/08/lo_go_pedrollo_1.gif" ></div>
    </div>
    <div class="right_sv">
      <div class="img_pro"><?php include (TEMPLATEPATH . '/banner.php'); ?>    </div>
      <div class="txt">
        <div class="text_titl"> Máy bơm </div>
        <div class="group_pr">
          <div class="pro_sp_pr">
            <div class="pro_pr">
              <div class="block_img"> <a href="#"> <img src="wp-content/uploads/2014/08/pw.jpg" height="126" width="206" alt="" title=""></a> </div>
            </div>
            <div class="bongtt"> </div>
            <div class="pro-name22">
              <p class="pr_a"><a href="#">Máy bơm tăng áp ...</a></p>
              <p style="line-height: 18px;width: 216px;margin-top: 5px;">Máy bơm nước tăng áp APP PW series</p>
            </div>
          </div>
        </div>
      </div>
      <div class="more"> <a href="san-pham/78-thang-may/"></a> </div>
    </div>
  </div>
</div>
<?php get_footer();?>
