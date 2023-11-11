<?php 
// todo: add list to choose updated on or date of publish
// give option to add prefix text of the date

if (function_exists('kc_add_map')) { 
	kc_add_map(
		array(
			'wolfie_template_tag_the_posted_on' => array(
				'name' => __('the posted / updated on', 'wolfie-king'),
				'description' => __('', 'wolfie-king'),
				'icon' => 'skicon sk_icon_the_posted_on',
				'category' => 'wolfie template tags',
				'css_box' => true,
				"params"  => array(
					array(
						"name" => "wolfie_template_tag_the_posted_on__prefix",
						"label" => "prefix text before date",
						"value" => "Posted on",
						"type" => "text",
						"admin_label" => true,
						"description" => "",
					),
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