<?php

// Ading feature image support for theme
add_theme_support('post-thumbnails');

// Modify the excerpt
function af_modify_the_excerpt($theExcerpt) {
    //Capturing needed values
    $imageUrl    = esc_url( get_the_post_thumbnail_url() );
    $postUrl     = esc_url( get_the_permalink() ); 
    
    // Modify the excerpt
    $newExcerpt  = $theExcerpt;
    $newExcerpt .= "<div><img class='excerpt-image' src='" . $imageUrl . "' /></div>";
    $newExcerpt .=  "<div><a href='" . $postUrl . "'>View Post</a></div>";

    // Return new excerpt
    return $newExcerpt;
}
add_filter('get_the_excerpt', 'af_modify_the_excerpt');

// Debug and die
function dd($content = '') {
    if ( $content != '' ) {
        var_dump($content);
    }
    die();
}