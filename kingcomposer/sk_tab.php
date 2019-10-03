<?php
/**
 * sk_tab shortcode
 **/
 
$tab_id = $title = '';
extract( $atts );

$css_class = apply_filters( 'kc-el-class', $atts );

$css_class = array_merge($css_class, array( 'sk_tab', 'ui-tabs-panel', 'kc_ui-tabs-hide', 'kc_clearfix' ));

if( empty( $tab_id ) || (strpos( $tab_id,'%time%' ))){
	$tab_id = sanitize_title( $title );
}else{
	$tab_id = esc_attr( $tab_id );
}

if( isset( $class ) )
	array_push( $css_class, $class );

$output = '<div id="' . $tab_id . '" class="' . esc_attr( implode( ' ', $css_class ) ) . '"><div class="sk_tab_content"><h3>' . $atts['title'] . '</h3>'.
		( ( '' === trim( $content ) ) 
		? __( 'Empty tab. Edit page to add content here.', 'kingcomposer' ) 
		: do_shortcode( str_replace('sk_tab#', 'sk_tab', $content ) ) ).
	'</div><div class="timeline-bar"><div class="timeline-point"></div></div><div class="empty-col"></div></div>';

echo $output;