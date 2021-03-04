<?php get_header(); ?>

<style>
  <?php include 'CSS/header_style.css'; ?>
</style>

<div id="home-banner">
    <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamurai_mobile.png" alt="honeysamurai" id="home-banner-img">
</div>

<div id="enter">
<p><a href="<?php echo site_url('/about'); ?>">enter</a></p>
</div>

<?php get_footer(); ?>