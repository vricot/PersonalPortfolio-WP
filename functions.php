<?php

//adding the CSS and JS files

function honeysamurai_setup() {
    wp_enqueue_style('honeysamurai_fonts', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300&family=Press+Start+2P&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap');
    
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/912ebd9506.js');
    
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0.0', true); 

    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts',  'honeysamurai_setup');
add_filter( 'show_admin_bar', '__return_false' );


// Adding Theme Support 

function honeysamurai_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'honeysamurai_init');

// Projects Post Type

//Commented out for possible future use:

//function honeysamurai_custom_post_type() {
    //register_post_type('project',
    //array(
        //'rewrite' => array('slug' => 'projects'),
        //'labels' => array('name' => 'Projects', 
        //'singular_name' => 'Project',
        //'add_new_item' => 'Add New Project',
        //'edit_item' => 'Edit Project'),
        //'menu-icon' => 'dahicons-clipboards',
        //'public' => true,
        //'has_archive' => true,
        //'supports' => array(
            //'title', 'thumbnail', 'editor', 'excerpt', 'comments')
        //)
    //);
//}

//add_action('init', 'honeysamurai_custom_post_type');

//Move Comment Text Field To Bottom 

function prefix_move_comment_field_to_bottom( $fields ) {
 
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
 
}
add_filter( 'comment_form_fields',      'prefix_move_comment_field_to_bottom', 10, 1 );

//Change Cookie Consent Text

function comment_form_change_cookies_consent( $fields ) {
	$commenter = wp_get_current_commenter();
	$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
	$fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
					 '<label for="wp-comment-cookies-consent">Your modified text here</label></p>';
	return $fields;
}
add_filter( 'comment_form_default_fields', 'comment_form_change_cookies_consent' );


//Filters//

function search_filter($query) {
    if($query->is_search()){
        $query->set('post_type', array('post', 'project'));
    }
}

add_filter('pre_get_posts', 'search_filter');