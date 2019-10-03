<?php 
if (function_exists('kc_add_map')) { 
	kc_add_map(
		array(
			'sk_icon_list' => array(
				'name' => __('Icon List', 'wolfie-king'),
				'description' => __('', 'wolfie-king'),
				'icon' => 'skicon sk_icon_icon_list',
				'category' => 'wolfie',
				'css_box' => true,
				'params' => array(
					array(
						'type'			=> 'group',
						'label'			=> __('Options', 'wolfie-king'),
						'name'			=> 'options',
						'description'	=> __( 'Repeat this fields with each item created, Each item corresponding processbar element.', 'wolfie-king' ),
						'options'		=> array('add_text' => __('Add new icon row', 'wolfie-king')),
						'value' => base64_encode( json_encode(array(
							"1" => array(
								"icon" => "fa fa-phone",
								"text_icon" => "some amazing text"
							),
							"2" => array(
								"icon" => "fa fa-envelope",
								"text_icon" => "some amazing text"
							),
							"3" => array(
								"icon" => "fa fa-home",
								"text_icon" => "some amazing text"
							)
						) ) ),
						'params' => array(
							array(
								'type' => 'icon_picker',
								'label' => __( 'Choose an Icon', 'wolfie-king' ),
								'name' => 'icon',
								'admin_label' => true,
							),
							array(
								'type' => 'textarea',
								'label' => __( 'Text next to icon', 'wolfie-king' ),
								'name' => 'text_icon',
								'admin_label' => true,
							),
							array(
								'type' => 'link',
								'label' => __( 'Link to text', 'wolfie-king' ),
								'name' => 'text_link',
								'admin_label' => true,
							),
							array(
								'type' => 'color_picker',
								'label' => __( 'Icon color', 'wolfie-king' ),
								'name' => 'icon_color',
							),
							array(
								'type' => 'color_picker',
								'label' => __( 'Text color', 'wolfie-king' ),
								'name' => 'text_color',
							),
						),
					),
				)

			)
		)
	);
}    