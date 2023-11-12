<?php 
if (function_exists('kc_add_map')) { 
	kc_add_map(
		array(
			'wolfie_template_tag_the_featured_img' => array(
				'name' => __('the featured image', 'wolfie-king'),
				'description' => __('', 'wolfie-king'),
				'icon' => 'skicon sk_icon_the_featured_img',
				'category' => 'wolfie template tags',
				'css_box' => true,
				"params"  => array(
					'general' => array(
						array(
							"name" => "default_featured_img",
							"label" => "default image",
							"value" => "",
							"type" => "attach_image",
							"admin_label" => true,
							"description" => "choose image will be displayed when post doesn't have featured image",
						)
					),
					'styling' => array(
						array(
							'name'    => 'css_custom',
							'type'    => 'css'
						)
					),
				)
			)
		)
	);
}    