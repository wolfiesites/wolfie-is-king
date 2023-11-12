<?php
$kc->add_map(
	array(
		'kc_row' => array(
			'name' => 'Row',
			'description' => __( 'Place content elements inside the row', 'kingcomposer' ),
			'category' => '',
			'title' => __(' Row Settings', 'kingcomposer'),
			'is_container' => true,
			'system_only' => true,
			'live_editor' => $live_tmpl.'kc_row.php',
			'params' => array(
				'general' => array(
					array(
						'name'	  => 'type',
						'label'   => __(' Type'),
						'type'	  => 'select',
						'admin_label' => true,
						'options' => array(
							'section'  => 'section',
							'div'  => 'div',
							'article'  => 'article',
							'main'  => 'main',
							'aside'  => 'aside',
						)
					),
					array(
						'name' => 'row_id',
						'label' => 'Section ID',
						'type' => 'text',
						'description' => __(' The unique identifier of the row.', 'kingcomposer'),
					),
					array(
						'name' => 'cols_gap',
						'type' => 'css',
						'options' => array(
							array(
								'group' => array(
									array('property' => 'gap', 'label' => 'Columns Gap', 'des' => __(' The distance between the columns in this row', 'kingcomposer'), 'selector' => '.kc_column'),
									array('property' => 'max-width', 'label' => 'Max width container', 'des' => __(' The default value of row container max-width: 1170px, you can change it here', 'kingcomposer'), 'selector' => '.kc-container'),
								)
							)
						)
					),
					array(
						'name' => 'use_container',
						'label' => __(' Full width', 'kingcomposer'),
						'type' => 'radio',
						'value' => 'yes',
						'description' => sprintf( __(' This is important option, please click here to %s', 'kingcomposer'), '<a href="http://docs.kingcomposer.com/row-full-width/" target=_blank>read more</a>'),
						'options' => array(
							'yes' => __(' Stretch wrapper only', 'kingcomposer'),
							'no' => __(' Stretch all content & wrapper', 'kingcomposer')
						),
					),
					array(
						'name' => 'force',
						'label' => __( 'Force Fullwidth?', 'kingcomposer' ),
						'type' => 'toggle',
						'value' => 'no',
						'description' => __( 'This option will force full with for all website which not compatibility with KingComposer rule', 'kingcomposer' ),
						'relation' => array(
							'parent' => 'use_container',
							'show_when' => array('yes','no')
						),
					),
					array(
						'name' => 'full_height',
						'label' => __( 'Full height?', 'kingcomposer' ),
						'type' => 'toggle',
						'description' => __( 'Set the 100% height of the row.', 'kingcomposer' ),
					),
					array(
						'name' => 'content_placement',
						'label' => __( 'Content position', 'kingcomposer' ),
						'type' => 'select',
						'options' => array(
							'top' => __( 'Top', 'kingcomposer' ),
							'middle' => __( 'Middle', 'kingcomposer' ),
						),
						'description' => __( 'Select content position within row when full-height.', 'kingcomposer' ),
						'relation' => array(
							'parent' => 'full_height',
							'show_when' => 'yes'
						),
					),
					array(
						'name' => 'equal_height',
						'label' => __( 'Equal height?', 'kingcomposer' ),
						'type' => 'toggle',
						'description' => __( 'The height of columns will be same height.', 'kingcomposer' )
					),
					array(
						'name' => 'column_align',
						'label' => __( 'Content Vertical Align', 'kingcomposer' ),
						'type' => 'select',
						'value' => 'middle',
						'options' => array(
							'top' => __( 'Top', 'kingcomposer' ),
							'middle' => __( 'Middle', 'kingcomposer' ),
							'bottom' => __( 'Bottom', 'kingcomposer' ),
						),
						'description' => __( 'Select align  vertical for column content when they have same height.', 'kingcomposer' ),
						'relation' => array(
							'parent' => 'equal_height',
							'show_when' => 'yes'
						),
					),
					array(
						'name' => 'video_bg',
						'label' => __( 'Use video background?', 'kingcomposer' ),
						'type' => 'toggle',
						'description' => __( 'Background video will be applied to the row.', 'kingcomposer' )
					),
					array(
						'name' => 'video_bg_url',
						'label' => __( 'YouTube link', 'kingcomposer' ),
						'type' => 'text',
						'value' => '',
						'description' => __( 'Add YouTube link. Default value : https://www.youtube.com/watch?v=dOWFVKb2JqM', 'kingcomposer' ),
						'relation' => array(
							'parent' => 'video_bg',
							'show_when' => 'yes'
						),
					),
					array(
						'name' => 'video_options',
						'label' => __( 'Youtube Extra Options', 'kingcomposer' ),
						'type' => 'text',
						'relation' => array(
							'parent' => 'video_bg',
							'show_when' => 'yes'
						),
						'description' => __( 'Extra option for video player as modestbranding, loop. Example: modestbranding=1&loop=0', 'kingcomposer' )
					),
					array(
						'name' => 'video_mute',
						'label' => __( 'Mute Youtube Sound', 'kingcomposer' ),
						'type' => 'toggle',
						'value' => 'no',
						'relation' => array(
							'parent' => 'video_bg',
							'show_when' => 'yes'
						),
						'description' => __( 'This option allow mute sound of player.', 'kingcomposer' )
					),
					array(
						'name' => 'parallax',
						'label' => __( 'Parallax', 'kingcomposer' ),
						'type' => 'select',
						'options' => array(
							'' => __( 'None', 'kingcomposer' ),
							'yes' => __( 'Use Background Image', 'kingcomposer' ),
							'yes-new' => __( 'Upload New Image', 'kingcomposer' ),
						),
						'description' => __( 'Add a parallax scrolling to the row (Note: If no image is specified, the background image from Design Options will be utilized).', 'kingcomposer' ),
						'relation' => array(
							'parent' => 'video_bg',
							'hide_when' => 'yes',
						),
					),
					array(
						'name' => 'parallax_image',
						'label' => __( 'Image', 'kingcomposer' ),
						'type' => 'attach_image',
						'value' => '',
						'description' => __( 'Select image from media library.', 'kingcomposer' ),
						'relation' => array(
							'parent' => 'parallax',
							'show_when' => 'yes-new',
						),
					),
					array(
						'name' => 'container_class',
						'label' => __( 'Container extra classes name', 'kingcomposer' ),
						'type' => 'text',
						'description' => __( 'Add classes custom to the Container.', 'kingcomposer' ),
						'relation' => array(
							'parent' => 'use_container',
							'show_when' => 'yes',
						),
					),
					array(
						'name' => 'row_class',
						'label' => __( 'Row extra classes name', 'kingcomposer' ),
						'type' => 'text',
						'description' => __( 'Add additional custom classes to the Row.', 'kingcomposer' ),
					)
				),
				'styling' => array(
					array(
						'name'    => 'css_custom',
						'type'    => 'css'
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