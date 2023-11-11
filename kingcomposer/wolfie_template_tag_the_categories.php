<?php 
extract($atts);

// Assuming $post_id contains the ID of the post you want to get the categories for
// If $post_id is not set, it will default to the global $post object
$post_id = isset($post_id) ? $post_id : get_the_ID();

// Get an array of category objects for the post
$categories = get_the_category($post_id);

// Check if there are categories
if ($categories) {
    // Find the primary category (if available)
    $primary_category = get_post_meta($post_id, '_yoast_wpseo_primary_category', true);

    if (empty($primary_category) || !in_array($primary_category, wp_list_pluck($categories, 'slug'))) {
        // If there's no primary category or it's not in the list, use the first category
        $primary_category = $categories[0]->slug;
    }

    // Display the primary category
    echo '<a href="' . esc_url(get_category_link(get_cat_ID($primary_category))) . '">' . esc_html($primary_category) . '</a>';

    // Display the rest of the categories
    $other_categories = array_filter($categories, function ($category) use ($primary_category) {
        return $category->slug !== $primary_category;
    });

    foreach ($other_categories as $category) {
        echo ', <a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
    }
}
