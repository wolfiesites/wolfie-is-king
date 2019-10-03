<?php
if (function_exists('kc_add_map')) { 
    kc_add_map(
        array(
            'sk_timeline' => array(
                'name' => __('Timeline - Tabs', 'wolfie-king'),
                'description' => __( 'Timeline', 'wolfie-king' ),
                'category' => 'wolfie',
                'icon' => 'skicon sk_icon_timeline',
                'title' => __(' Timeline - Tabs Settings', 'wolfie-king'),
                'is_container' => true,
                'views' => array(
                    'type' => 'views_sections',
                    'sections' => 'sk_tab'
                ),
                'priority'  => 120,
                'params' => array(
                    'general' => array(
                        array(
                            'name' => 'class',
                            'label' => __(' Extra Class', 'wolfie-king'),
                            'type' => 'text'
                        ),
                        array(
                            'name' => 'type',
                            'label' => __(' How Display', 'wolfie-king'),
                            'type' => 'select',
                            'options' => array(
                                'horizontal_timeline' => __(' Horizontal timeline', 'wolfie-king'),
                                'vertical_timeline' => __(' Vertical timeline', 'wolfie-king'),
                            ),
                            'description' => __('view of your timeline as horizontal, vertical or slider.', 'wolfie-king')
                        ),
                    ),
                    'styling' => array(
                        array(
                            'name'    => 'css_custom',
                            'type'    => 'css',
                            'options' => array(
                                array(
                                    "screens" => "any,1024,999,767,479",
                                    'Tab' => array(
                                        array('property' => 'font-family,font-size,line-height,font-weight,text-transform,text-align', 'label' => 'Font family', 'selector' => '.sk_timeline_nav, .sk_timeline_nav > li a,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li>a'),
                                        array('property' => 'font-size,color,padding', 'label' => 'Icon Size,Icon Color,Icon Spacing', 'selector' => '.sk_timeline_nav a i,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li>a i'),
                                        array('property' => 'color', 'label' => 'Text Color', 'selector' => '.sk_timeline_nav a, .sk_timeline_nav,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li>a'),
                                        array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '.sk_timeline_nav,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav'),
                                        array('property' => 'background-color', 'label' => 'Background Color tab item', 'selector' => '.sk_timeline_nav li,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav li'),
                                        array('property' => 'border', 'label' => 'Border', 'selector' => '.sk_timeline_nav > li, .sk_tab.ui-tabs-body-active, .sk_timeline_nav,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav ~ div.sk_tab.ui-tabs-body-active,+.kc_vertical_tabs.tabs_right>.kc_wrapper>ul.ui-tabs-nav ~ div.sk_tab'),
                                        array('property' => 'border-radius', 'label' => 'Border-radius', 'selector' => '.sk_timeline_nav > li, .sk_tab.ui-tabs-body-active, .sk_timeline_nav,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav ~ div.sk_tab.ui-tabs-body-active,+.kc_vertical_tabs.tabs_right>.kc_wrapper>ul.ui-tabs-nav ~ div.sk_tab'),
                                        array('property' => 'padding', 'label' => 'Padding', 'selector' => '.sk_timeline_nav > li > a,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li>a'),
                                        array('property' => 'margin', 'label' => 'Margin', 'selector' => '.sk_timeline_nav > li > a,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li'),
                                        array('property' => 'width', 'label' => 'Width', 'selector' => '.sk_timeline_nav > li,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li'),
                                    ),
                                    'Tab Hover' => array(
                                        array('property' => 'color', 'label' => 'Text Color', 'selector' => '.sk_timeline_nav li:hover a, .sk_timeline_nav li:hover, .sk_timeline_nav > .ui-tabs-active:hover a,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li>a:hover,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li.ui-tabs-active > a'),
                                        array('property' => 'color', 'label' => 'Icon Color', 'selector' => '.sk_timeline_nav li:hover a i,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li>a:hover i,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li.ui-tabs-active > a i'),
                                        array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '.sk_timeline_nav > li:hover, .sk_timeline_nav > li:hover a, .sk_timeline_nav > li > a:hover,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li>a:hover,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li.ui-tabs-active > a'),
                                    ),
                                    'Tab Active' => array(
                                        array('property' => 'color', 'label' => 'Text Color', 'selector' => '.sk_timeline_nav li.ui-tabs-active a,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li.ui-tabs-active > a'),
                                        array('property' => 'color', 'label' => 'Icon Color', 'selector' => '.sk_timeline_nav li.ui-tabs-active a i, .sk_timeline_nav > .ui-tabs-active:focus a i,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li.ui-tabs-active > a i'),
                                        array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '.sk_timeline_nav > .ui-tabs-active:focus, .sk_timeline_nav > .ui-tabs-active, .sk_timeline_nav > .ui-tabs-active > a,+.kc_vertical_tabs>.kc_wrapper>ul.ui-tabs-nav>li.ui-tabs-active > a'),
                                    ),
                                    'Tab Body' => array(
                                        array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '.sk_tab'),
                                        array('property' => 'padding', 'label' => 'Spacing', 'selector' => '.sk_tab .sk_tab_content'),
                                        array('property' => 'display', 'label' => 'Display'),
                                    ),
                                )))),
                            'animate' => array(
                                array(
                                    'name'    => 'animate',
                                    'type'    => 'animate'
                                )
                            ),
                            ),

),


)
);
}
