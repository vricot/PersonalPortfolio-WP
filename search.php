<?php get_header(); ?>

<style>
<?php include 'CSS/header_style.css'; ?>
</style>

<div id="no-results-banner">
    <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamurai_mobile.png" alt="honeysamurai" id="no-results-banner-img">
</div>

<div class="title-box" id="no-results-title-box">
<h1 class="page-heading" id="no-results-page-heading">Search Results for "<?php echo get_search_query(); ?>"</h1></div>

<main id="no-results-main">

<?php if(have_posts()) { ?>

<section>

<?php 

while(have_posts()) {
    the_post();


?>

    <div class="card" id="search-results-card">
        <div class="card-image">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image" style="max-width: 90%;" class="thumbnail">
            </a>
        </div>
        <div class="card-description">
            <a href="<?php the_permalink(); ?>">
                <h3>
                    <?php the_title(); ?>
                </h3>
            </a>
            <div class="card-meta">
                Posted by <?php the_author(); ?> <br> <?php the_date(); ?> <?php the_time(); ?>
                <?php if(get_post_type() == 'post') { ?>
                <a href="#"><?php echo get_the_category_list(', ') ?></a>
                <?php } ?>
            </div>
            <p>
                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="btn-readmore">
                Read More
            </a>
        </div>
    </div>
    
<?php } 
    
    wp_reset_query(); 

?>

</section>

<?php } else { ?>

   <div class="no-results">
    <i><h2>Couldn't find anything :( Did you mistype something? </h2></i>
    <div class="dont-worry">
    <h3>Don't worry!</h3>
    <h3>Check out the following links:</h3>
    </div>
    <div class="check-links">
    <ul>
    <li> <a href="<?php echo site_url('/about') ?>">About</a></li>
    <li> <a href="<?php echo site_url('/work') ?>">Work</a></li>
    <li> <a href="<?php echo site_url('/diary') ?>">Diary</a></li>
    <li> <a href="<?php echo site_url('/contact') ?>">Contact</a></li>
    </ul>
    </div>
   </div>

<?php } ?>



<div class="pagination">
    <?php echo paginate_links(); ?>
</div>

<div class="subscribe-container" id="no-results-subscribe">
    <form action="action_page.php">
        <div class="container">
            <h3>Subscribe to stay up to date!</h3>
        </div>
        <div>
            <input type="text" placeholder="Name" name="name" required>
            <input type="text" placeholder="Email address" name="mail" required>
            <label>
                <input type="checkbox" checked="checked" name="subscribe">
            </label>
        </div>
        <div class="container" id="no-results-submit">
            <input type="submit" value="Subscribe" id="subscribe-btn">
        </div>
  </form>
</div>

</main>

<div class="back-to-top" id="no-results-back-to-top">
    <a href="<?php echo site_url('/diary'); ?>">Back To Top</a>
</div>
    


<?php get_footer(); ?>