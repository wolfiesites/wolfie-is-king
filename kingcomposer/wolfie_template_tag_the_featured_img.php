<?php 
extract($atts);

$output = $css_data = $css = '';
$css_classes = apply_filters( 'kc-el-class', $atts );

$post_id = isset($post_id) ? $post_id : get_the_ID();

// css
$css_class = implode(' ', $css_classes);
$element_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';

if( !empty( $css_data ) )
    $element_attributes[] = 'style="' . esc_attr( trim( $css_data ) ) . '"';

// Display the featured image
if (has_post_thumbnail($post_id)) {
    echo get_the_post_thumbnail($post_id, 'full', array('alt' => 'Featured Image', 'class' => $css_class));
} else {
    $image_html = wp_get_attachment_image($atts['default_featured_img'], 'full', false, array('class' => $css_class));
    echo $image_html;
}
?>
