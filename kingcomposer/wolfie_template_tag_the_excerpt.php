<?php
extract($atts);

// Assuming $post_id contains the ID of the post you want to get the excerpt for
// If $post_id is not set, it will default to the global $post object
$post_id = isset($post_id) ? $post_id : get_the_ID();

// Get the raw excerpt
$raw_excerpt = get_the_excerpt($post_id);

// Set the desired length of the excerpt (e.g., 20 words)
$excerpt_length = 20;

// Trim the excerpt to the desired length
$trimmed_excerpt = wp_trim_words($raw_excerpt, $excerpt_length);

// Display the excerpt
echo wp_kses_post($trimmed_excerpt);
?>
