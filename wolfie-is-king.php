<?php
/*
Plugin Name: Wolfie Is King
Plugin URI: https://github.com/CommanderxDoge/wolfie-is-king
Description: This plugin extends KingComposer Page builder
Version: 1.0
Author: Paweł Witek
Author URI: https://github.com/CommanderxDoge
Text Domain: wolfie
*/

//include helpers
include( plugin_dir_path( __FILE__ ) . '/inc/helpers/functions.php' );
include( plugin_dir_path( __FILE__ ) . '/inc/custom-param-types.php' );

class Wolfie_is_king 
{
    public function __construct() {

        add_action('init', array( $this ,'wolfie_king_extend_base_shortcodes' ), 99 );
        add_action('wp_enqueue_scripts', array( $this ,'wolfie_king_enqueue_front_scripts' ));
        add_action('admin_enqueue_scripts', array( $this ,'wolfie_king_enqueue_admin_scripts' ));
    }

    public function wolfie_king_enqueue_front_scripts(){
        wp_enqueue_style( 'sk-front-style', plugin_dir_url(__FILE__) . '/assets/css/style.css');
        wp_enqueue_script( 'sk-main-js', plugin_dir_url(__FILE__) . '/assets/js/sk_main.js', array( 'jquery' ));
        wp_register_script( 'sk-waypoints', plugin_dir_url(__FILE__) . '/assets/js/lib/jquery.waypoints.min.js', array( 'jquery' ));
    }
    public function wolfie_king_enqueue_admin_scripts(){
        wp_enqueue_style( 'sk-admin-style', plugin_dir_url(__FILE__) . '/assets/css/admin.css');
    }

    public function wolfie_king_extend_base_shortcodes(){

        if(class_exists('KingComposer')) {

         global $kc;

         $kc->set_template_path( plugin_dir_path( __FILE__ ) . '/kingcomposer/');

         $kc->add_map_param(
        'kc_carousel_post', //element slug - shortcode tag name
        array( //param infomations
        	'type'			=> 'dropdown',
        	'label'			=> __( 'Choose dislaying content', 'wolfie-king' ),
        	'name'			=> 'choosen_content',
        	'description'	=> __( '', 'wolfie-king' ),
        	'admin_label'	=> true,
        	'options' 		=> array(
        		'wolfie-content'	=> __('The content', 'wolfie-king'),
        		'wolfie-excerpt'	=> __('The excerpt', 'wolfie-king'),
        	)
        ), 
		2 //position of param
	);    

//inlcude shorcodes mapping
         foreach (new DirectoryIterator( plugin_dir_path( __FILE__ ) . '/shortcodes_map' ) as $fileInfo) {
            if($fileInfo->isDot()) continue;
            $filename =  $fileInfo->getFilename();

            include(plugin_dir_path( __FILE__ ) . '/shortcodes_map/' . $filename);
        }
    } else {
        function general_admin_notice(){
            global $pagenow;
            if ( $pagenow == 'plugins.php' ) {
               echo '<div class="notice notice-warning is-dismissible">
               <p>In order to work "Wolfie is King" needs KingComposer to work. Please download KingComposer from <a href="'.admin_url('').'/plugin-install.php?s=kingcomposer&tab=search&type=term">here</a></p>
               </div>';
           }
       }
       add_action('admin_notices', 'general_admin_notice');
   }

}

}
new Wolfie_is_king;
