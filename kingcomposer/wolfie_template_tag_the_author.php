<?php 
extract($atts);

// Assuming $post_id contains the ID of the post you want to get the author for
// If $post_id is not set, it will default to the global $post object
$post_id = isset($post_id) ? $post_id : get_the_ID();

// Get the author ID of the post
$author_id = get_post_field('post_author', $post_id);

// Get the display name of the author
$author_name = get_the_author_meta('display_name', $author_id);

// Display the author name
echo esc_html($author_name);