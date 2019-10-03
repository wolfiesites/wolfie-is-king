<?php 
if (function_exists('kc_add_map')) { 
    kc_add_map(
        array(
            "subtitle" => array(
                "name" => "subtitle",
                "description" => "adds subtitle with double lines",
                "category" => 'wolfie',
                "icon" => "sl-direction",
                "is_container" => true,
                "params"  => array(
                    array(
                        "name" => "subtitle-title",
                        "label" => "subtitle title",
                        "value" => "",
                        "type" => "text",
                        "admin_label" => true,
                        "description" => "",
                    ),
                    array(
                        "name" => "line-color",
                        "label" => "Color of Lines",
                        "value" => "#f5b11e",
                        "type" => "color_picker",
                        "admin_label" => false,
                        "description" => "",
                    ),
                    array(
                        "name" => "text-color",
                        "label" => "Color of Text",
                        "value" => "#303030",
                        "type" => "color_picker",
                        "admin_label" => false,
                        "description" => ""
                    ),
                    array(
                        "name" => "subtitle-class",
                        "label" => "Add custom Class",
                        "type" => "text",
                        "admin_label" => false,
                        "description" => ""
                    )
                )
            ),
        )
    );
}     