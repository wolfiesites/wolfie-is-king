<?php 
if (function_exists('kc_add_map')) { 
	kc_add_map(
		array(
			'sk_download_list' => array(
				'name' => __('Download List', 'wolfie-king'),
				'description' => __('', 'wolfie-king'),
				'icon' => 'skicon sk_icon_icon_list',
				'category' => 'wolfie',
				'css_box' => true,
				'params' => array(
					array(
						'type' => 'color_picker',
						'label' => __( 'Color of the button', 'wolfie-king' ),
						'name' => 'button_color',
					),
					array(
						'type' => 'color_picker',
						'label' => __( 'Color of the hovered button', 'wolfie-king' ),
						'name' => 'text_color',
					),
					array(
						'type' => 'color_picker',
						'label' => __( 'Color of the border and icons', 'wolfie-king' ),
						'name' => 'border_color',
					),
					array(
						'type'			=> 'group',
						'label'			=> __('Options', 'wolfie-king'),
						'name'			=> 'options',
						'description'	=> __( 'Repeat this fields with each item created, Each item corresponding processbar element.', 'wolfie-king' ),
						'options'		=> array('add_text' => __('Add new icon row', 'wolfie-king')),
						'value' => base64_encode( json_encode(array(
							"1" => array(
								"text" => "amazing file"
							),
							"2" => array(
								"text" => "amazing file 2"
							)
						) ) ),
						'params' => array(
							array(
								'type' => 'text',
								'label' => __( 'Name of the file', 'wolfie-king' ),
								'name' => 'text',
								'admin_label' => true,
							),
							array(
								'type' => 'attach_image',
								'label' => __( 'Add File', 'wolfie-king' ),
								'name' => 'link',
								'admin_label' => true,
							)
						),
					),
				)

			)
		)
	);
}    