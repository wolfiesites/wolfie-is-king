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
    $css = preg_replace('/\/\*.*?\*\//s', '', $css); // Remove comments
    $css = preg_replace('/\s+/', ' ', $css); // Remove extra spaces
    $css = preg_replace('/\s?([,:;{}])\s?/', '$1', $css); // Remove spaces around delimiters
    return $css;
}

// in kc sections define section and include it using this function like: kc_get_template($template_slug);
function kc_get_template($slug) {
    global $kc_front;
    global $post;

    $template = get_page_by_path($slug, OBJECT, 'kc-section');
    $template_id = $template->ID;

    // css templatki
    $css_of_template = get_post_meta($template_id, 'kc_data', true)['css'];
    // merge css template and post template
    $kc_front->add_header_css($css_of_template); // dodaje niby css do instancji ale już po wyrenderowaniu css, hmm jak wyrenderować nowy css ?
    $kc_global_css = kc_minify_css($kc_front->get_global_css()); // mam css tego wpisu,
    // append and render template style
    $kc_front->front_head(kc_minify_css($css_of_template));

    $raw_kc_content = get_post_meta($template->ID, 'kc_raw_content', true); 
    echo $kc_front->do_shortcode('<div class="kc_clfw"></div>'.$raw_kc_content); // pierwszy człon naprawia kingcomposer'a layout strech templatki
}