<?php get_header(); ?>

<style>
    <?php include 'CSS/header_style.css'; ?>
</style>

<div id="coming-soon-banner">
    <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamurai_mobile.png" alt="honeysamurai" id="coming-soon-banner-img">
</div>

<main id="coming-soon-main"> 
    <!--<div class="header-img" id="alien-header-img">
        <img src="<?php echo get_template_directory_uri(); ?>/IMG/alien-monster.png" alt="Alien Monster" id="alien-monster">
    </div>-->
    <div class="title-box" id="coming-soon-title-box">
        <h1 class="page-heading" id="coming-soon-page-heading">Coming Soon!</h1>
    </div>
</main>
    
    <div class="back-to-top" id="coming-soon-back-to-top">
        <a href="<?php echo site_url('/coming-soon'); ?>">Back To Top</a>
    </div>

<?php get_footer(); ?> 