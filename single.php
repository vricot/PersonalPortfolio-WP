<? get_header(); 
while(have_posts()) {
    the_post();
?>

<style>
<?php include 'CSS/header_style.css'; ?>
</style>

<style>
<?php include 'CSS/single_style.css'; ?>
</style>

    <div id="post-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamurai_mobile.png" alt="honeysamurai" id="post-banner-img">
    </div>

    <div class="title-box" id="post-title-box">
    <h1 class="page-heading" id="post-page-heading"><?php the_title(); ?></h1></div>

    <main id="post-main">
    
    
    <div id="post-containter">
        <section id="diarypost">
            <div class="card" id="post-card">
                <div class="card-meta-diarypost">
                <?php the_date(); ?> <?php the_time(); ?>
                <div class="category-title" id="post-category-title"><a href="<?php the_permalink(); ?>">
                    <p>
                        <?php echo get_the_category_list(', '); ?>
                    </p>
                </a></div>
                </div>
                <div class="card-image" id="post-card-image">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image" style="max-width: 90%;">
                </div>
                <div class="card-description" id="post-card-description">
                    <h3>
                        Dear Diary,
                    </h3>
                    <?php the_content(); ?>
                </div>
            </div>
            
            <div id="comments-section">
                <?php 
                
                $fields   =  array(
                    'author' => 
                                '<input placeholder="Name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' />',
                    'email'  => 
                                '<input placeholder="Email" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />',  
                );

                $args = array(
                    'title_reply' => '<h4>Leave A Comment</h4>',
                    'fields' => $fields,
                    'comment_field' => 
                    '<textarea placeholder="Your Comment" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
                    '</textarea>',
                    'comment_notes_before' => '<p class="comment-notes">Your email address will not be published. All fields are required.</p>'
                );
                
                comment_form($args); 
                
                $comments_number = get_comments_number();
                if($comments_number !=0) {
                    ?>

                    <div class="comments">
                    <h3>What others are saying</h3>
                    <ol class="all-comments">
                        <?php
                        $comments = get_comments(array(
                            'post_id' => $post->ID,
                            'status' => 'approve'
                        ));
                        wp_list_comments(array(
                            'per_page' => 15
                        ), $comments);
                        ?>
                    </ol>
                    </div>

                    <?php
                }
                
                ?>
            </div>
        </section>

        <?php } ?>

    </div>

    </main>
    
    <div class="back-to-top" id="post-back-to-top">
        <a href="<?php echo site_url('/single'); ?>">Back To Top</a>
    </div>

<?php get_footer(); ?>