<?php 
if (function_exists('kc_add_map')) { 
	kc_add_map(
		array(
			'wolfie_template_tag_the_categories' => array(
				'name' => __('the categories', 'wolfie-king'),
				'description' => __('', 'wolfie-king'),
				'icon' => 'skicon sk_icon_the_category',
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