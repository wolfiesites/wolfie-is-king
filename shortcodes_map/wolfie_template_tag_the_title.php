<?php
if (function_exists('kc_add_map')) { 
	kc_add_map(
		array(
			'wolfie_template_tag_the_title' => array(
				'name'		  => __(' the title', 'kingcomposer'),
				// 'description' => __(' Heading titles H(n) Tag', 'kingcomposer'),
				'icon'		  => 'skicon sk_icon_the_title',
				'category'	  => 'wolfie template tag',
				'priority'  => 210,
				// 'live_editor' => $live_tmpl.'kc_title.php',
				'params'	  => array(
					'general' => array(
						// array(
						// 	'name'	      => 'text',
						// 	'label'       => __(' Text'),
						// 	'type'	      => 'textarea',
						// 	'value'		  => base64_encode('The Title'),
						// 	'admin_label' => true,
						// ),
						// array(
						// 	'name'	      => 'post_title',
						// 	'label'       => __(' Use Post Title?'),
						// 	'type'	      => 'toggle',
						// 	'default' 	  => 'yes',
						// 	'description' => __(' Use the title of current post/page as content element instead of text input value.', 'kingcomposer')
						// ),
						array(
							'name'	  => 'type',
							'label'   => __(' Type'),
							'type'	  => 'select',
							'admin_label' => true,
							'options' => array(
								'h1'  => 'H1',
								'h2'  => 'H2',
								'h3'  => 'H3',
								'h4'  => 'H4',
								'h5'  => 'H5',
								'h6'  => 'H6',
								'div'  => 'div',
								'span'  => 'Span',
								'p'  => 'P'
							)
						),
						array(
							'name'	=> 'class',
							'label' => __(' Extra Class', 'kingcomposer'),
							'type'	=> 'text'
						),
						array(
							'name'	      => 'title_wrap',
							'label'       => __(' Advanced', 'kingcomposer'),
							'type'	      => 'toggle',
							'description' => __(' Add a &lt;div&gt; tag around the head tag, more code before or after the head tag.', 'kingcomposer')
						),
						array(
							'name'	      => 'before',
							'label'       => __(' Before Head Tag', 'kingcomposer'),
							'type'	      => 'textarea',
							'description' => __(' Add HTML text before the head tag.', 'kingcomposer'),
							'relation'      => array(
								'parent'    => 'title_wrap',
								'show_when' => 'yes'
							)
						),
						array(
							'name'	      => 'after',
							'label'       => 'After Head Tag',
							'type'	      => 'textarea',
							'description' => __(' Add HTML text after the head tag.', 'kingcomposer'),
							'relation'      => array(
								'parent'    => 'title_wrap',
								'show_when' => 'yes'
							)
						),
						array(
							'name'     => 'title_link',
							'label'    => __(' Link Title', 'kingcomposer'),
							'type'     => 'link',
							'description' => __(' Insert link for title', 'kingcomposer')
						),
						array(
							'name'	        => 'title_wrap_class',
							'label'         => __(' Wrapper class name', 'kingcomposer'),
							'type'	        => 'text',
							'description'   => __(' Enter class name for wrapper', 'kingcomposer'),
							'relation'      => array(
								'parent'    => 'title_wrap',
								'show_when' => 'yes'
							)
						)
					),
					'styling' => array(
						array(
							'name'    => 'css_custom',
							'type'    => 'css',
							'options'		=> array(
								array(
									"screens" => "any,1024,999,767,479",
									'Title Style' => array(
										array('property' => 'color', 'label' => 'Color', 'selector' => '+.kc_title,.kc_title,.kc_title a.kc_title_link'),
										array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+.kc_title,.kc_title,.kc_title a.kc_title_link'),
										array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+.kc_title,.kc_title,.kc_title a.kc_title_link'),
										array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+.kc_title,.kc_title,.kc_title a.kc_title_link'),
										array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+.kc_title,.kc_title,.kc_title a.kc_title_link'),
										array('property' => 'letter-spacing', 'label' => 'Letter Spacing', 'selector' => '+.kc_title,.kc_title,.kc_title a.kc_title_link'),
										array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+.kc_title,.kc_title,.kc_title a.kc_title_link'),
										array('property' => 'text-align', 'label' => 'Alignment', 'selector' => '+.kc_title,.kc_title,.kc_title a.kc_title_link'),
										array('property' => 'display', 'label' => 'Display'),
										array('property' => 'padding', 'label' => 'Padding', 'selector' => '+.kc_title,.kc_title,.kc_title a.kc_title_link'),
										array('property' => 'margin', 'label' => 'Margin', 'selector' => '+.kc_title,.kc_title,.kc_title a.kc_title_link')
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
		)
	);
}    