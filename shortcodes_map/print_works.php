<?php 
if (function_exists('kc_add_map')) { 
	kc_add_map(
		array(
			'print_works' => array(
				'name' => __('Print Works', 'wolfie-king'),
				'description' => __('', 'wolfie-king'),
				'icon' => 'skicon sk_icon_icon_list',
				'category' => 'wolfie',
				'css_box' => true,
				'params' => array(
					array(
						'name' => 'pw_taxonomy',
						'label' => 'choose taxonomy',
						'type' => 'post_taxonomy',
						// 'description' => 'Field Description',
					),
					array(
						'name' => 'pw_numberposts',
						'label' => 'How many posts to print?',
						'type' => 'text',
						// 'description' => 'Field Description',
					),
				)

			)
		)
	);
}    