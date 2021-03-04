<?php get_header() ?>

<style>
<?php include 'CSS/header_style.css'; ?>
</style>


    </div>
        <div id="work-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamurai_mobile.png" alt="honeysamurai" id="work-banner-img">
        </div>
    
    <div class="title-box" id="work-title-box">
    <h1 class="page-heading" id="work-page-heading">choose your fighter</h1></div>

<main id="work-main">
    <section id="work-buttons-section">
        <a href="<?php echo site_url('/web-developer'); ?>" id="web-dev-link">
            <div id="work-web-dev" class="section-div">
                <div class="img-div">
                    <img src="<?php echo get_template_directory_uri(); ?>/IMG/typing_pink_resized_500x367.gif" alt="Typing Gif" id="work-coding">
                </div>
                <div class="caption-div">
                    <h3>Web Developer</h3>
                </div>
            </div>
        </a>
    
        <a href="<?php echo site_url('/storyteller'); ?>" id="storyteller-link">
            <div id="work-storyteller" class="section-div">
                <div class="img-div">
                    <img src="<?php echo get_template_directory_uri(); ?>/IMG/sailor_saturn_camera_resize_500x367.gif" alt="Sailor Saturn posing in front of camera" id="work-sailor-saturn">
                </div>
                <div class="caption-div">
                    <h3>Storyteller</h3>
                </div>
            </div>
        </a>
    
        <a href="<?php echo site_url('/fashion-princess'); ?>" id="fashion-link">
            <div id="work-fashion" class="section-div">
                <div class="img-div">
                    <img src="<?php echo get_template_directory_uri(); ?>/IMG/fashion_resized_500x367.gif" alt="" id="work-sailor-makeup">
                </div>
                <div class="caption-div">
                    <h3>Fashion Princess</h3>
                </div>
            </div>
        </a>
    </section>
</main>
    
    <div class="back-to-top" class="work-back-to-top" id="work-back-to-top">
        <a href="<?php echo site_url('/work'); ?>">Back To Top</a>
    </div>
    

<?php get_footer(); ?>