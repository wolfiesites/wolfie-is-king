<?php
// todo: display breadcrumbs no matter blog, single, product and archives
// add option to shorten it, to modifie it etc.

extract( $atts );

if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}