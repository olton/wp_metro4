<?php

/*
Plugin Name: Metro4 for Wordpress
Plugin URI: https://https://github.com/olton/wp_metro4
Description: Integrate Metro 4 into Wordpress.
Version: 1.0
Author: Sergey Pimenov
Author URI: https://pimenov.com.ua
License: MIT
*/

function metro4_scripts(){
    $parent_style = get_stylesheet() . "-style";
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'metro4-style',
		"//cdn.metroui.org.ua/v4/css/metro-all.min.css",
		array( $parent_style ),
		wp_get_theme()->get('1.0.0')
	);

    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', "//code.jquery.com/jquery-3.3.1.min.js", array(), "3", true);
    wp_enqueue_script('metro4-script', "//cdn.metroui.org.ua/v4/js/metro.js", array(), "4", true);
}
add_action("wp_enqueue_scripts", "metro4_scripts");