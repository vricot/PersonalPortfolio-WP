<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>honeysamurai</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300&family=Press+Start+2P&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <?php wp_head();?>
</head>

<body>
    
<div id="slideout-menu">
<nav>
    <input type="checkbox" id="css-toggle-menu" name="css-toggle-menu" class="css-toggle-menu"> 
<ul class="main">
    <li>
        <a href="<?php echo site_url(''); ?>" class="nav-text"
        <?php if(is_front_page()) echo 'class="active"' ?>
        >welcome</a>
    </li>
    <li>
        <a href="<?php echo site_url('/about'); ?>" class="nav-text" id="slideout-about"
        <?php if(is_page('about')) echo 'class="active"' ?>
        >about</a>
    </li>
    <li>
        <a href="<?php echo site_url('/work'); ?>" class="nav-text" id="slideout-work"
        <?php if(is_page('work')) echo 'class="active"' ?>
        >work</a>
    </li>
    <li>
        <a href="<?php echo site_url('/diary'); ?>" class="nav-text"
        <?php if(get_post_type() == 'post') echo 'class="active"' ?>
        >diary</a>
    <li>
        <a target="_blank" href="https://ko-fi.com/honeysamurai"  class="nav-text">treat me</a>
    </li>
    <li>
        <a href="<?php echo site_url('/contact'); ?>" class="nav-text"
        <?php if(is_page('contact')) echo 'class="active"' ?>
        >contact</a>
    </li>
    </li>
    <li>
        <a target="_blank" href="https://www.facebook.com/honeysamurai" class="icon" id="facebook">
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
        </a>
        <a target="_blank" href="https://www.instagram.com/honeysamurai/" class="icon" id="instagram">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a target="_blank" href="https://www.youtube.com/channel/UC4qNK2-mUhiCyHeW2yIVZSw?view_as=subscriber">
         <div class="icon" id="youtube">
          <i class="fa fa-youtube-play" aria-hidden="true"></i>
        </a>
        <a target="_blank" href="https://github.com/vricot">
         <div class="icon" id="github">
            <i class="fa fa-github" aria-hidden="true"></i>
        </a>
        <a href="<?php echo site_url('/contact'); ?>" class="icon" id="email"> 
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
        </a>
    </li>
    <li><div id="slideout-searchbox" class="searchbox-slidemenu">
            <?php get_search_form(); ?>
        </div>
    </li>
</ul>
<label for="css-toggle-menu" id="css-toggle-menu"></label> 
</nav>
</div>

<nav>  
<div id="menu-icon">
    <i class="fa fa-bars"></i>
</div>
<div id="left-nav">
<ul>
    <li>
        <a class="<?php if(is_front_page()) echo 'active' ?>" href="<?php echo site_url(''); ?>" class="nav-text"
        >welcome</a>
    </li>
    <li>
        <a href="<?php echo site_url('/about'); ?>" class="nav-text
        <?php if(is_page('about')) echo 'active' ?>"
        >about</a>
    </li>
    <li>
        <a href="<?php echo site_url('/work'); ?>" class="nav-text
        <?php if(is_page('work')) echo 'active' ?>"
        >work</a>
    </li>
    <li>
        <a href="<?php echo site_url('/diary'); ?>" class="nav-text
        <?php if(get_post_type() == 'post') echo 'active'?>">diary</a>
    </li>
    </div>
    <div id="right-nav">
    <li>
           <a target="_blank" href="https://www.facebook.com/honeysamurai" class="icon" id="facebook">
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
            </a>
    </li>
    <li>
            <a target="_blank" href="https://www.instagram.com/honeysamurai/" class="icon" id="instagram">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
    </li>
    <li>
                <a target="_blank" href="https://www.youtube.com/channel/UC4qNK2-mUhiCyHeW2yIVZSw?view_as=subscriber">
                    <div class="icon" id="youtube">
                     <i class="fa fa-youtube-play" aria-hidden="true" style="padding-bottom:2px;"></i>
            </a>
    </li>
    <li>
        <a target="_blank" href="https://github.com/vricot">
            <div class="icon" id="github">
             <i class="fa fa-github" aria-hidden="true" style="padding-bottom: 2px;"></i>
    </a>
</li>
    <li>
            <a href="<?php echo site_url('/contact'); ?>" class="icon" id="email"> 
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </a>
   </li>
    <li>
        <a target="_blank" href="https://ko-fi.com/honeysamurai"  class="nav-text">treat me</a>
    </li>
    <li>
        <a href="<?php echo site_url('/contact'); ?>" class="nav-text <?php if(is_page('contact')) echo 'active' ?>">contact</a>
    </li>&nbsp;
    <li>
        <a href="#">
            <i class="fa fa-search" aria-hidden="true"id="search-icon"></i>
        </a></li>
</ul>
</nav>
<div id="searchbox">
    <?php get_search_form(); ?>
</div>
</div>