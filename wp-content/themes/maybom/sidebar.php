
<div id="right-content">
  <div class="searchbar">
    <div class="hot-news-header">Tìm kiếm </div>
    <div class="right-block-body1">
      <div class="right-trong-body">
        <?php get_search_form();?>
      </div>
    </div>
    <div class="right-block-bottom">
                    </div>
  </div>
  <div id="hot-news">
    <div class="hot-news-header"> Thanh lý nội thất </div>
    <div class="right-block-body">
      <div class="right-trong-body">
        <div class="news-list">
          <?php wp_nav_menu( array('theme_location' => 'left','menu_class' => 'left-menu')); ?>
        </div>
      </div>
    </div>
    <div class="right-block-bottom"> </div>
  </div>
  <?php dynamic_sidebar( 'Left Sidebar' ); ?>
</div>
