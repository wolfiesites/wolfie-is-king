<?php


if (function_exists('kc_add_map')) {
	kc_add_map(
		array(
			'kc_testimonial' => array(
				'name'			=> __( 'Testimonial', 'kingcomposer' ),
				'title'			=> 'Testimonial Settings',
				'icon'			=> 'kc-icon-testi',
				'category'		=> 'Content',
				'wrapper_class'	=> 'clearfix',
				'priority'  	=> 440,
				'description'	=> __( 'Display testimonials styles.', 'kingcomposer' ),
				'params'		=> array(
					'general'	=> array(
						array(
							'type'			=> 'radio_image',
							'label'			=> __( 'Select Template', 'kingcomposer' ),
							'name'			=> 'layout',
							'admin_label'	=> true,
							'options'		=> array(
								'1'	=> KC_URL . '/assets/frontend/images/testimonial/layout-1.png',
								'2'	=> KC_URL . '/assets/frontend/images/testimonial/layout-2.png',
								'3'	=> KC_URL . '/assets/frontend/images/testimonial/layout-3.png',
								'4'	=> KC_URL . '/assets/frontend/images/testimonial/layout-4.png',
								'5'	=> KC_URL . '/assets/frontend/images/testimonial/layout-5.png'
							),
							'value'			=> '1'
						),
						array(
							'type'			=> 'text',
							'name'			=> 'title',
							'label'			=> __( 'Title', 'kingcomposer' ),
							'value'			=> 'Text Title',
							'admin_label'	=> true
						),
						array(
                        	'name' => 'show_rating',
                        	'label' => 'Allow show rating',
                        	'type' => 'toggle',
                        	'value' => 'yes',
                    	),
						array(
							'name' => 'rating',
							'label' => 'choose rating',
							'type' => 'number_slider',  
							'options' => array(    
								'min' => 10,
								'max' => 50,
								'unit' => '',
								'show_input' => true
							),
							'value' => '50', 
							'description' => 'Field Description',
						),
						array(
							'name'	=> 'position',
							'label'	=> __( 'Position', 'kingcomposer' ),
							'type'	=> 'text',
							'value'	=> 'Lead Manager'
						),
						array(
							'type'	=> 'textarea',
							'name'	=> 'desc',
							'label'	=> __( 'Description', 'kingcomposer' ),
							'value'	=> base64_encode('Lorem Ipsum is simply dummy text of the printing and typesetting industry.')
						),
						array(
							'name'		=> 'image',
							'label'		=> __( 'Upload Image', 'kingcomposer' ),
							'type'		=> 'attach_image',
							'relation'	=> array(
								'parent'	=> 'layout',
								'show_when'	=> array( '1','3','4','5' )
							)
						),
						array(
							'type'			=> 'text',
							'label'			=> __( 'Image Size', 'kingcomposer' ),
							'name'			=> 'img_size',
							'value'			=> 'full',
							'description'	=> __(' Set the image size: "full", "thumbnail", "medium", "large" or other size ', 'kingcomposer'),
							'relation'		=> array(
								'parent'	=> 'layout',
								'show_when'	=> array( '1','3','4','5' )
							)
						),
						array(
							'type'			=> 'text',
							'label'			=> __( 'Custom class', 'kingcomposer' ),
							'name'			=> 'custom_class',
							'description'	=> __( 'Enter extra custom class', 'kingcomposer' )
						)
					),
					'styling'	=> array(
						array(
							'name'		=> 'css_custom',
							'type'		=> 'css',
							'options'	=> array(
								array(
									'screens' => "any,1024,999,767,479",
									'Title' => array(
										array('property' => 'color', 'label' => 'Color', 'selector' => '.content-title'),
										array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '.content-title'),
										array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '.content-title'),
										array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '.content-title'),
										array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '.content-title'),
										array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '.content-title'),
										array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '.content-title'),
										array('property' => 'margin', 'label' => 'Margin', 'selector' => '.content-title'),
										array('property' => 'padding', 'label' => 'Padding', 'selector' => '.content-title'),
									),
									'Subtitle' => array(
										array('property' => 'color', 'label' => 'Color', 'selector' => '.content-position'),
										array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '.content-position'),
										array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '.content-position'),
										array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '.content-position'),
										array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '.content-position'),
										array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '.content-position'),
										array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '.content-position'),
										array('property' => 'margin', 'label' => 'Margin', 'selector' => '.content-position'),
										array('property' => 'padding', 'label' => 'Padding', 'selector' => '.content-position'),
									),
									'Desc' => array(
										array('property' => 'color', 'label' => 'Color', 'selector' => '.content-desc'),
										array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '.content-desc'),
										array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '.content-desc'),
										array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '.content-desc'),
										array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '.content-desc'),
										array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '.content-desc'),
										array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '.content-desc'),
										array('property' => 'padding', 'label' => 'Padding', 'selector' => '.content-desc'),
										array('property' => 'margin', 'label' => 'Margin', 'selector' => '.content-desc'),
									),
									'Icon' => array(
										array('property' => 'color', 'label' => 'Color', 'selector' => '.content-icon i'),
										array('property' => 'color', 'label' => 'Hover Color', 'selector' => '.content-icon:hover i'),
										array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '.content-icon i'),
										array('property' => 'background-color', 'label' => 'Hover BG Color', 'selector' => '.content-icon:hover i'),
										array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '.content-icon i'),
										array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '.content-icon i'),
										array('property' => 'border', 'label' => 'Border', 'selector' => '.content-icon i'),
										array('property' => 'border-color', 'label' => 'Hover Border', 'selector' => '.content-icon:hover i'),
										array('property' => 'border-radius', 'label' => 'Border Radius', 'selector' => '.content-icon i'),
										array('property' => 'padding', 'label' => 'Padding', 'selector' => '.content-icon i'),
									),
									'Image' => array(
										array('property' => 'color', 'label' => 'Color', 'selector' => '.content-image img'),
										array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '.content-image img'),
										array('property' => 'width', 'label' => 'Width', 'selector' => '.content-image'),
										array('property' => 'border', 'label' => 'Border', 'selector' => '.content-image img'),
										array('property' => 'border-radius', 'label' => 'Border Radius', 'selector' => '.content-image img'),
										array('property' => 'margin', 'label' => 'Margin', 'selector' => '.content-image img'),
										array('property' => 'padding', 'label' => 'Padding', 'selector' => '.content-image img'),
									),
									'Button' => array(
										array('property' => 'color', 'label' => 'Button Color', 'selector' => '.content-button a'),
										array('property' => 'color', 'label' => 'Button Hover Color', 'selector' => 'content-button:hover a'),
										array('property' => 'background-color', 'label' => 'Button BG Color', 'selector' => '.content-button a'),
										array('property' => 'background-color', 'label' => 'Button BG Hover Color', 'selector' => 'content-button:hover a'),
										array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '.content-button a'),
										array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '.content-button a'),
										array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '.content-button a'),
										array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '.content-button a'),
										array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '.content-button a'),
										array('property' => 'border', 'label' => 'Button Border', 'selector' => '.content-button a'),
										array('property' => 'border-color', 'label' => 'Button Border Color Hover', 'selector' => 'content-button:hover a'),
										array('property' => 'border-radius', 'label' => 'Border Radius', 'selector' => '.content-button a'),
										array('property' => 'margin', 'label' => 'Margin', 'selector' => '.content-button a'),
										array('property' => 'padding', 'label' => 'Padding', 'selector' => '.content-button a')
									),
									'Boxes' => array(
										array('property' => 'background'),
										array('property' => 'background-color', 'label' => 'BG Color Hover', 'selector' => '+:hover'),
										array('property' => 'text-align', 'label' => 'Text Align'),
										array('property' => 'border', 'label' => 'Border'),
										array('property' => 'border-color', 'label' => 'Border Color Hover', 'selector' => '+:hover'),
										array('property' => 'box-shadow', 'label' => 'Box Shadow'),
										array('property' => 'box-shadow', 'label' => 'Box Shadow Hover', 'selector' => '+:hover'),
										array('property' => 'display', 'label' => 'Display'),
										array('property' => 'border-radius', 'label' => 'Border Radius'),
										array('property' => 'border-radius', 'label' => 'Border Radius Hover', 'selector' => '+:hover'),
										array('property' => 'margin', 'label' => 'Position Hover', 'selector' => '+:hover'),
										array('property' => 'padding', 'label' => 'Padding'),
										array('property' => 'margin', 'label' => 'Margin'),
									)
								)
)
)
),
'animate' => array(
	array(
		'name'    => 'animate',
		'type'    => 'animate'
	)
),
)
),
),
);
}
