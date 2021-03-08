<?php get_header(); ?>

<style>
<?php include 'CSS/header_style.css'; ?>
</style>

<div id="fashion-banner">
    <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamurai_mobile.png" alt="honeysamurai" id="fashion-banner-img">
</div>

<div class="header-img">
    <img src="<?php echo get_template_directory_uri(); ?>/IMG/fashion_resized_500x367.gif" alt="Sailor Moon Girl Puts On Makeup" id="makeup-gif" class="header-img-content">
</div>

<div class="title-box" id="fashion-title-box">
    <h1 class="page-heading" id="fashion-page-heading">Fashion Princess</h1>
</div>

<main id="fashion-main">
  
    <section class="buttons-section">
       <a href="https://www.instagram.com/honeysamurai/" target="_blank">
           <div id="portfolio-button" class="button" class="fashion-button">
               <h3>Instagram</h3>
           </div>
        </a>
        <a href="https://www.youtube.com/channel/UC4qNK2-mUhiCyHeW2yIVZSw" id="youtube-link" target="_blank">
            <div id="youtube-button"
            class="button" class="fashion-button">
                <h3>YouTube</h3>
            </div>
         </a> 
         <a href="<?php echo site_url('/coming-soon'); ?>" id="compcard-link">
            <div id="compcard-button" class="button" class="fashion-button">
                <h3>Comp Card</h3>
            </div>
         </a> 
         <a href="<?php echo site_url('/contact'); ?>" id="contact-link">
            <div id="contact-button" class="button" class="fashion-button">
                <h3>Contact for Work</h3>
            </div>
         </a>
    </section>
</main>
    
    <div class="back-to-top" class="work-back-to-top" id="fashion-back-to-top">
        <a href="<?php echo site_url('/fashion-princess'); ?>">Back To Top</a>
    </div>

      <?php get_footer(); ?>
    