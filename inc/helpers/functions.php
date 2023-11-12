<?php

function spero_king_append_dependency( $handle, $dep ){
    global $wp_scripts;

    $script = $wp_scripts->query( $handle, 'registered' );
    if( !$script )
        return false;

    if( !in_array( $dep, $script->deps ) ){
        $script->deps[] = $dep;
    }

    return true;
}

function kc_minify_css($css) {
    // Remove comments
    $css = preg_replace('/\/\*.*?\*\//s', '', $css);

    // Remove new lines and extra spaces
    $css = preg_replace('/\s+/', ' ', $css);

    // Remove spaces around delimiters
    $css = preg_replace('/\s?([,:;{}])\s?/', '$1', $css);

    return $css;
}

// display template or page part from kc-sections
function kc_get_template($slug, $template_global_css_on = true) {
    global $kc_front;
    global $post;

    $template = get_page_by_path($slug, OBJECT, 'kc-section');
    $template_id = $template->ID;

    $section_stretch = '';
    $raw_kc_content = get_post_meta($template->ID, 'kc_raw_content', true); 

    if($template_global_css_on) {
        $section_stretch = '<div class="kc_clfw"></div>';
        // css templatki
        $css_of_template = get_post_meta($template_id, 'kc_data', true)['css'];
        // merge css template and post template
        $kc_front->add_header_css(kc_minify_css($css_of_template)); 
        $kc_global_css = kc_minify_css($kc_front->get_global_css()); // mam css tego wpisu,
        // append and render template style
        $kc_front->front_head(kc_minify_css($css_of_template)); // renderuję wcześniej dodany styl templatki
        echo $kc_front->do_shortcode($section_stretch.$raw_kc_content);
    } else {
        echo do_shortcode($section_stretch.$raw_kc_content);
    }   
}

// use card-post template and display posts
function kc_display_posts($template_card_slug) {
    $args = array(
        'post_type' => 'post', // Display posts
        'posts_per_page' => -1, // Display all posts
        'order' => 'DESC', // Display in descending order
        'orderby' => 'date' // Order by date
    );
    
    $custom_query = new WP_Query($args);
    
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            // post template
            kc_get_template($template_card_slug, false);
    
        endwhile;
        wp_reset_postdata(); // Reset post data to the main loop
    else :
        echo 'No posts found';
    endif;
}