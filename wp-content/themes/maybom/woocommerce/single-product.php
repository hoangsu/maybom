<?php get_header(); ?>

<div class="wrapper-body">
  <?php get_sidebar();?>
  <div id="main-content">
    <div id="con-main-content">
      <div id="contenbg"> <?php single_cat_title();?></div>
      <div class="block-tintuc-content">
        <div class="block-tintuc-trong">
                    
		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
          <div class="clear-left"> &nbsp;</div>
      
        </div>
      </div>
      <div class="block-boot-content"></div>
    </div>
  </div>
  <div class="clear-both"> </div>
</div>
<?php get_footer();?>
