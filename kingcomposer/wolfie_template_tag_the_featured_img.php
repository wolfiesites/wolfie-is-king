<?php 
extract($atts);
$post_id = isset($post_id) ? $post_id : get_the_ID();

// Display the featured image
if (has_post_thumbnail($post_id)) {
    echo get_the_post_thumbnail($post_id, 'full', array('alt' => 'Featured Image'));
}
?>
