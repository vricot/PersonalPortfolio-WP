<?php get_header(); ?>

<style>
<?php include 'CSS/header_style.css'; ?>
</style>

    <div id="storyteller-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamurai_mobile.png" alt="honeysamurai" id="storyteller-banner-img">
    </div>

    <div class="header-img">
        <img src="<?php echo get_template_directory_uri(); ?>/IMG/sailor_saturn_camera_resize_500x367.gif" alt="Sailor Saturn in Camera" id="storyteller-sailor-saturn" class="header-img-content">
    </div> 

    <div class="title-box" id="storyteller-title-box">
    <h1 class="page-heading" class="child-page-heading" id="storyteller-page-heading">Storyteller</h1></div>

<main id="storyteller-main">
   
    <section class="buttons-section">
       <a href="https://www.youtube.com/channel/UCD3CuWR6dw8-4jEMQp-fDIQ" id="youtube-link" target="_blank">
           <div id="portfolio-button" class="button" class="storyteller-button">
               <h3>YouTube/Podcasts</h3>
           </div>
        </a>
        <a href="<?php echo site_url('/coming-soon'); ?>" id="illustration-link">
            <div id="illustration-button"
            class="button" class="storyteller-button">
                <h3>Illustration & Animation</h3>
            </div>
         </a> 
         <a href="<?php echo site_url('/diary'); ?>" id="blog-link">
            <div id="resume-button" class="button" class="storyteller-button">
                <h3>Blog</h3>
            </div>
         </a> 
         <a href="<?php echo site_url('/contact'); ?>" id="commission-link">
            <div id="commission-button" class="button" class="storyteller-button">
                <h3>Commissions</h3>
            </div>
         </a>
    </section>
</main>
    
    <div class="back-to-top" class="work-back-to-top" id="storyteller-back-to-top">
        <a href="<?php echo site_url('/storyteller'); ?>">Back To Top</a>
    </div>
        <?php get_footer(); ?>
    
    