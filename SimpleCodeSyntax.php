<?php
/*
Plugin Name: SimpleCodeSyntax
Plugin URI: http://www.sharadchhetri.com/wpplugins
Description: SimpleCodeSyntax will simply give the css style to your HTML Preformatted and Code tags.
Author: Sharad Chhetri
Version: 1.0
Author URI: http://sharadchhetri.com/
*/


function SimpleCodeSyntax(){
	wp_enqueue_style('pre-style', plugins_url('/css/pre-style.css', __FILE__));
    }
/* Links */ 
function simplecodesyntax_plugin_meta_links( $links, $file ) {
    if ( strpos( $file, basename(__FILE__) ) ) {
        $links[] = '<a href="https://paypal.me/sharadchhetri" target="_blank" title="Donate link"> Donate </a>';
    }
    return $links;
}

add_action('wp_enqueue_scripts', "SimpleCodeSyntax");
add_filter( 'plugin_row_meta', 'simplecodesyntax_plugin_meta_links', 10, 2 );
?>