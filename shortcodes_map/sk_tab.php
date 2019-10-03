<?php
if (function_exists('kc_add_map')) { 
    kc_add_map(
        array(

          'sk_tab' => array(
            'name' => 'Tab',
            'category' => '',
            'title' => 'Tab Settings',
            'is_container' => true,
            'system_only' => true,
            'params' => array(
                'general' => array(
                    array(
                        'name' => 'title',
                        'label' => __(' Title', 'kingcomposer'),
                        'type' => 'text',
                        'value' => __('1', 'kingcomposer'),
                    ),
                    array(
                        'name' => 'advanced',
                        'label' => __(' Advance Title?', 'kingcomposer'),
                        'type' => 'toggle',
                        'description' => __(' If you want more flexible options to display tab title', 'kingcomposer')
                    ),
                    array(
                        'name' => 'adv_title',
                        'label' => __(' Title Format', 'kingcomposer'),
                        'type' => 'textarea',
                        'value' => base64_encode( __(' <a href="#">New Tab</a>', 'kingcomposer') ),
                        'relation' => array(
                            'parent' => 'advanced',
                            'show_when' => 'yes'
                        ),
                        'description' => __(' You can use short varibles {title}, {icon} , {icon_class}, {image}, {image_id}, {image_url}, {image_thumbnail}, {image_medium}, {image_large}, {image_full}, {tab_id}', 'kingcomposer')
                    ),
                    array(
                        'name' => 'adv_icon',
                        'label' => __(' Icon Title', 'kingcomposer'),
                        'type' => 'icon_picker',
                        'value' => '',
                        'relation' => array(
                            'parent' => 'advanced',
                            'show_when' => 'yes'
                        )
                    ),
                    array(
                        'name' => 'adv_image',
                        'label' => __(' Image Title', 'kingcomposer'),
                        'type' => 'attach_image',
                        'value' => '',
                        'relation' => array(
                            'parent' => 'advanced',
                            'show_when' => 'yes'
                        )
                    ),
                    array(
                        'name' => 'icon_option',
                        'label' => __(' Use Icon?', 'kingcomposer'),
                        'type' => 'toggle',
                        'description' => __(' Display an icon beside the title', 'kingcomposer'),
                        'relation' => array(
                            'parent' => 'advanced',
                            'hide_when' => 'yes'
                        )
                    ),
                    array(
                        'name' => 'icon',
                        'label' => __(' Icon Title', 'kingcomposer'),
                        'type' => 'icon_picker',
                        'value' => '',
                        'description' => __(' Choose an icon to display with title', 'kingcomposer'),
                        'relation' => array(
                            'parent' => 'icon_option',
                            'show_when' => 'yes'
                        )
                    ),
                    array(
                        'name' => 'class',
                        'label' => 'Extra Class',
                        'type' => 'text'
                    )
                ),
                'body styling' => array(
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