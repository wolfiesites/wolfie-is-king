<?php

$title = $interval = $open_mouseover = $class = $navigation = $auto_play = $auto_height = $auto_play = $tab_nav_class = $title_slider = '';
extract( $atts );

$css_class = apply_filters( 'kc-el-class', $atts );


$css_class = array_merge($css_class, array( 'sk_tabs', 'group' ));

if( isset( $css ) && !empty( $css ) )
	$css_class[] = $css;

if( isset( $class ) && !empty( $class ) )
	$css_class[] = $class;

if( $type == 'vertical_timeline' ){
	
	$css_class[] = 'sk_vertical_timeline';

	$tab_nav_class = '';

}
else if( $type == 'horizontal_timeline' ){
	
	$css_class[] = 'kc-tabs-slider';

	$css_class[] = 'sk_horizontal_timeline';

	$tab_nav_class = '';
	
}
else {
	$tab_nav_class = 'sk_timeline_nav';
}

$tabs_option_data[] = 'class="'. esc_attr( implode(' ', $css_class) ) .'"';

?>
<div <?php echo implode( ' ', $tabs_option_data ); ?>>
	<div class="kc_wrapper ui-tabs kc_clearfix">
		<div class="timeline-window">
			<?php echo do_shortcode( str_replace('sk_tabs#', 'sk_tabs', $content ) ); ?>
		</div><!-- /timeline-window -->
		<div></div>
	</div>
</div>



<?php 
/*--------------------------------------------------------------
# enqueue scripts and set options
--------------------------------------------------------------*/
wp_enqueue_script( 'sk-waypoints');
?>

<script type="text/javascript">
	jQuery(document).ready(function($){ 

//activate waypoints
var right = true;
var waypoints = $('.sk_tab').waypoint(function(direction) {
	var t = this;
		//toggleClass
		if(t.element.classList.value.includes('active') ) {
			// t.element.classList.remove('active');
		} else {
			var el = t.element;
			if(right) {
				el.classList.add('active');
				el.querySelector('.sk_tab_content').classList.add('animated', 'fadeInLeft');
				right = false;
			} else {
				el.classList.add('active');
				el.querySelector('.sk_tab_content').classList.add('animated', 'fadeInRight');
				right = true;
			}
		}
		//add class and remove from others certain class
		// ways.removeClass('active');
		// if(t.element.classList.value.includes('active') ) {

		// } else {
		// 	t.element.classList += ' active';
		// }
	}, {
		offset: '80%'
	})
});

</script>

