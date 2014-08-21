<?php get_header(); ?>

<div class="news_detail content_page">
<div class="inner">
  <h1 class="title">
    <?php the_title(); ?>
  </h1>

  <div class="left_sibar">
      <?php if(get_field('cta_button')==true):?>
      <div class="cta_button">
        <h2 class="widgettitle"><?php the_field('title_cta'); ?></h2>
      <div class="textwidget"><div class="cta_banner">
       <?php the_field('content_cta'); ?></div>
      </div>
    </div>
    <?php endif;?>
    
    <div class="social_block clear">
    <?php include(TEMPLATEPATH . '/social.php')?>
    </div>
  </div>
  <div class="content_article" id="content" >
  <?php if(have_posts()) : while(have_posts()) : the_post();  ?>
    <?php the_content(); ?>
    <?php if ( ! empty( $meta['title'] ) )
$title = $meta['title'];?>
    <?php endwhile; ?>  <?php endif; ?>

    <?php         
$summary = get_field('summary');
$summarySize = size_format(filesize( get_attached_file( $summary['id'] ) ));

$report = get_field('full_report');
$reportSize = size_format(filesize( get_attached_file( $report['id'] ) ));

?>

<?php if($summary || $report) {?>
  <div class="attachments">
    <?php if($summary) {?>
 
      <a href="<?php echo $summary['url'] ?>"><span class="img_file"><img src="<?php bloginfo('template_url')?>/images/file_m.png"/></span>
         <span class="flowhidden_file">
          <span class="title_file">Summary</span><br>
          <span class="size_file"><?php echo $summarySize;?></span>
           </span>
         </a>
         <?php }?>
    <?php if($report) {?>
     <a href="<?php echo $report['url'] ?>"><span class="img_file"><img src="<?php bloginfo('template_url')?>/images/file_m.png"/></span>
         <span class="flowhidden_file">
          <span class="title_file">Full Report</span><br>
          <span class="size_file"><?php echo $reportSize;?></span>
           </span>
         </a>
         <?php }?>
  </div>
<?php }?>

    <?php $attachments = new Attachments( 'attachments' ); /* pass the instance name */ ?>
<?php if( $attachments->exist() ) : ?>
  <div class="attachments">
      <?php while( $attachments->get() ) : ?>
      <a href="<?php echo $attachments->url(); ?>"><span class="img_file"><img src="<?php bloginfo('template_url')?>/images/file_m.png"/></span>
         <span class="flowhidden_file">
          <span class="title_file"><?php echo $attachments->field( 'title' ); ?></span><br>
          <span class="size_file"><?php echo $attachments->subtype(); ?>&nbsp;<span class="size"><?php echo $attachments->filesize(); ?></span></span>
           </span>
         </a>
     
    <?php endwhile; ?>
  </div>
<?php endif; ?>

 <?php if(get_field('website')){?>
       <div class="siteadd">
          <a target="_blank" href="http://<?php the_field('website');?>"><?php the_field('website');?></a>
          </div>
        <?php }?>
  </div>

  <div class="clear btop"> <a href="#header" class="backtotop">top</a></div>
  </div>
</div>
<!-- /.container -->

<?php get_footer(); ?>
<script type="text/javascript">
    jQuery(document).ready(function(e) {
        jQuery('.mejs-mediaelement').each(function(){
            var title = jQuery(this).find('audio').attr('title');
            var a = jQuery(this).next().next().find('.mejs-playpause-button');
            jQuery('<div id="title-audio">'+title+' -</div>').insertAfter(a);
        })
    })
</script>