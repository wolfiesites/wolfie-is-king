<?php
/**
 * Add $dep (script handle) to the array of dependencies for $handle
 * @see http://wordpress.stackexchange.com/questions/100709/add-a-script-as-a-dependency-to-a-registered-script
 * @param string $handle Script handle for which you want to add a dependency
 * @param string $dep Script handle - the dependency you wish to add
 */
function spero_king_append_dependency( $handle, $dep ){
    global $wp_scripts;

    $script = $wp_scripts->query( $handle, 'registered' );
    if( !$script )
        return false;

    if( !in_array( $dep, $script->deps ) ){
        $script->deps[] = $dep;
    }

    return true;
}