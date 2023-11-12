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

// in kc sections define section and include it using this function like: kc_get_template($template_slug);
function kc_get_template($slug) {
    global $kc_front;
    global $post;

    $template = get_page_by_path($slug, OBJECT, 'kc-section');
    // $post = $template; // przelacz na query template'a

    $raw_kc_content = get_post_meta($template->ID, 'kc_raw_content', true); 
    echo $kc_front->do_shortcode('<div class="kc_clfw"></div>'.$raw_kc_content); // pierwszy człon naprawia kingcomposer'a layout strech templatki
}