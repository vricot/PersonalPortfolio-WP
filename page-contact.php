<?php get_header(); ?>

<style>
<?php include 'CSS/header_style.css'; ?>
</style>


    <div id="contact-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamurai_mobile.png" alt="honeysamurai" id="contact-banner-img">
    </div>

    <div class="title-box" id="contact-title-box">
    <h1 class="page-heading" id="contact-page-heading">Contact</h1></div>

<main id="contact-main">
    <div class="contact-container">
        <div class="envelope-container">
            <img src="<?php echo get_template_directory_uri(); ?>/IMG/mail_flying.gif" alt="Anime girl with flying love letters" id="envelope-img">
        </div>
        <div class="description-container">
        <p>I am open to modeling, software employment, and will provide the following services at a commissioned rate:</p>
            <ul>
             <li>Custom Web Design & Development</li>
             <li>Custom Illustrations and Small Animations</li>
            </ul>
            <p>If you are an agent, employer, business, freelancer, or misc. interested in working with me please reach out to my email <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamuraiproductionsemail.png" alt="image of email" id="email-address">! xoxo♥</p>
           <br><p>Otherwise feel free to drop me a message below with love, feedback, suggestions, anything! xoxo</p>
        </div>
    <div class="contact-form-container">
        <?php echo do_shortcode( '[contact-form-7 id="86" title="Honeysamurai Contact Form"]' ); ?> 

    </div> 
</main>
    
    <div class="back-to-top" id="contact-back-to-top">
        <a href="<?php echo site_url('/contact'); ?>">Back To Top</a>
    </div>

    <?php get_footer(); ?>