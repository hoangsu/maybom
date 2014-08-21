<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes();?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>;charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="Bán máy bơm các loại chất lượng tốt" />
<meta name="keywords" content="Bán máy bơm các loại chất lượng tốt" />
<title><?php bloginfo('name')?></title>

<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet">
<link href="<?php bloginfo('template_url')?>/css/reset.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/gooeymenu.css" />

<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div id="header">
  <div id="logo">
    <div class="baner1">
      <div class="banner">
       <a href="/" class="logo"> <img src="<?php bloginfo('template_url')?>/images/logo.png"/> </a>
        <div class="menu">
               <?php wp_nav_menu( array('theme_location' => 'primary','menu_class' => 'underlinemenu','menu_id' => 'gooeymenu3' )); ?> 
            </div>
        </div>
        <div class="searchLi" id="search_frm">
                  <?php get_search_form();?>        
        </div>
    </div>
    
  </div>
</div>

