<?php get_header(); ?>

<div class="news_detail content_page">
<div class="inner">
  <h1 class="title">
    <?php the_title(); ?>
  </h1>

  <div class="content_article" id="content" >
  <?php if(have_posts()) : while(have_posts()) : the_post();  ?>
    <?php the_content(); ?>
 <?php endwhile; endif; ?>
  </div>
</div>
<!-- /.container -->

<?php get_footer(); ?>
