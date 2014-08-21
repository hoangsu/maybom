<?php get_header(); ?>


<div class="wrapper-body">
  <?php get_sidebar();?>
  <div id="main-content">
    <div id="con-main-content">
      <?php if ( have_posts() ) : while ( have_posts()): the_post();?>
      <div id="contenbg">
        <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
      </div>
      <div class="block-tintuc-content">
        <div class="block-tintuc-trong">
          <div class="news-title">
            <h1>
              <?php the_title();?>
            </h1>
          </div>
          <div class="news-details">
            <?php the_content();?>
          </div>
          <div class="clear-left"> &nbsp;</div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="fb-comments" data-numposts="5" data-colorscheme="light" data-width="100%"></div>
        <div class="other-news">
          <?php
$category= get_the_category(); // assign the variable as current category
$categoryvariable = $category[0]->term_id;
$query= 'cat=' . $categoryvariable. '&orderby=rand&posts_per_page=10'; // concatenate the query
query_posts($query); // run the query
?>
          <h4> Các bài viết khác</h4>
          <ul class="other-news">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <li> <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
              <?php the_title(); ?>
              </a> </li>
            <?php endwhile; ?>
            <?php endif ?>
          </ul>
        </div>
      </div>
      <div class="block-boot-content"></div>
    </div>
  </div>
  <div class="clear-both"> </div>
</div>
<?php get_footer();?>
