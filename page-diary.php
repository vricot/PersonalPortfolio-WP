<?php get_header(); ?>

<style>
    <?php include 'CSS/header_style.css'; ?>
</style>

<div id="diary-banner" class="banner"> 
    <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamurai_mobile.png" alt="honeysamurai" id="diary-banner-img" class="banner-img">
</div>

<div class="title-box" id="diary-title-box">
<h1 class="page-heading" id="diary-page-heading">My Diary</h1></div>

<main id="diary-main">

<section>

<?php 
 
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
);

$blogposts = new WP_Query($args);

while($blogposts->have_posts()) {
    $blogposts->the_post();


?>

    <div class="card" id="diary-card">
        <div class="card-image" id="diary-card-image">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image" style="max-width: 90%;" class="thumbnail">
            </a>
        </div>
        <div class="card-description" id="diary-card-description">
            <a href="<?php the_permalink(); ?>">
                <h3>
                    <?php the_title(); ?>
                </h3>
            </a>
            <div class="card-meta" id="diary-card-meta">
                Posted by honeysamurai <br> <?php the_date(); ?> <?php the_time(); ?>
                <a href="<?php the_permalink(); ?>">
                    <p>
                        <?php the_category(); ?>
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
    <a href="#">Prev</a>&nbsp;
    <a href="#">4</a>&nbsp;
    <a href="#">5</a>&nbsp;
    <a href="#">6</a>&nbsp;
    <a href="#">Next</a>
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
            <input type="submit" value="Subscribe">
        </div>
  </form>
</div>

</main>

<div class="back-to-top" id="diary-back-to-top">
    <a href="<?php echo site_url('/diary'); ?>">Back To Top</a>
</div>
    


<?php get_footer(); ?>