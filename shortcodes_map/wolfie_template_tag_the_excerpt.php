<?php 
// todo: use read more button and create button on read more comment
// add ability to set the number of words / characters to control legnth of the text

if (function_exists('kc_add_map')) { 
	kc_add_map(
		array(
			'wolfie_template_tag_the_excerpt' => array(
				'name' => __('the excerpt', 'wolfie-king'),
				'description' => __('', 'wolfie-king'),
				'icon' => 'skicon sk_icon_the_excerpt',
				'category' => 'wolfie template tags',
				'css_box' => true,
				"params"  => array(
					// array(
					// 	"name" => "subtitle-title",
					// 	"label" => "subtitle title",
					// 	"value" => "",
					// 	"type" => "text",
					// 	"admin_label" => true,
					// 	"description" => "",
					// ),
					// array(
					// 	"name" => "line-color",
					// 	"label" => "Color of Lines",
					// 	"value" => "#f5b11e",
					// 	"type" => "color_picker",
					// 	"admin_label" => false,
					// 	"description" => "",
					// ),
				)
			)
		)
	);
}    