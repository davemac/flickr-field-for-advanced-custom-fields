<?php
/*
Plugin Name: Advanced Custom Fields: Flickr
Plugin URI: https://github.com/davemac/flickr-field-for-advanced-custom-fields
Description: Flickr field for Advanced Custom Fields. Display items from a Flickr photostream or entire sets/galleries along with WordPress content.
Version: 2.0.0
Author: davemac
Author URI: https://dmcweb.com.au
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-flickr', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );

// Include field type for ACF5+
function include_field_types_flickr( $version ) {
	include_once('acf-flickr-v5.php');
}
add_action('acf/include_field_types', 'include_field_types_flickr');