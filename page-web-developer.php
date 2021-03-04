<?php get_header(); ?>

<style>
<?php include 'CSS/header_style.css'; ?>
</style>

    <div id="web-dev-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamurai_mobile.png" alt="honeysamurai" id="web-dev-banner-img">
    </div>
    
    <div class="header-img" id="web-dev-header-img">
        <img src="<?php echo get_template_directory_uri(); ?>/IMG/typing_pink_resized_500x367.gif" alt="Typing" id="web-dev-coding" class="header-img-content">
    </div> 

    <div class="title-box" class="child-title-box" id="web-dev-title-box">
    <h1 class="page-heading" class="child-page-heading" id="web-dev-page-heading">Web Developer</h1></div>

<main id="web-dev-main">
    
    <section class="buttons-section">
       <a href="<?php echo site_url('/coming-soon'); ?>" id="portfolio-link">
           <div id="portfolio-button" class="button">
               <h3>Portfolio Website</h3>
           </div>
        </a>
        <a href="https://github.com/vricot" id="github-link" target="_blank">
            <div id="github-button"
            class="button">
                <h3>GitHub</h3>
            </div>
         </a> 
         <a href="<?php echo site_url('/coming-soon'); ?>" id="resume-link">
            <div id="resume-button" class="button" >
                <h3>Resume</h3>
            </div>
         </a> 
         <a href="<?php echo site_url('/contact'); ?>" id="commission-link">
            <div id="commission-button" class="button">
                <h3>Commissions</h3>
            </div>
         </a>
    </section>
</main>
    
    <div class="back-to-top" class="work-back-to-top" id="web-dev-back-to-top">
        <a href="<?php echo site_url('/web-developer'); ?>">Back To Top</a>
    </div>

    <?php get_footer(); ?>
    