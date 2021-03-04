<?php get_header(); ?>

<style>
    <?php include 'CSS/header_style.css'; ?>
</style>

<style>
<?php include 'CSS/diary_style.css'; ?>
</style>

<div id="mobile-banner">
    <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamurai_mobile.png" alt="honeysamurai" id="honeysamurai-mobile">
</div>

<div id="title-box">
<h1 class="page-heading">My Diary</h1></div>

<main>

<section>

<?php 

while(have_posts()) {
    the_post();


?>

    <div class="card">
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
                <a href="<?php the_permalink(); ?>">
                    <p>
                        <?php echo get_the_category_list(', '); ?>
                    </p>
                </a>
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

<div class="pagination">
    <?php echo paginate_links(); ?>
</div>

<div class="subscribe-container">
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
        <div class="container">
            <input type="submit" value="Subscribe" id="subscribe-btn">
        </div>
  </form>
</div>

</main>

<div class="back-to-top">
    <a href="<?php echo site_url('/diary'); ?>">Back To Top</a>
</div>
    


<?php get_footer(); ?>