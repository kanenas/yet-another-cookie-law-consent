<?php
/*
Plugin Name: Yet Another Cookie Law Consent (YACLC)
Plugin URI: https://github.com/kanenas/yet-another-cookie-law-consent
Description: Yet Another Cookie Law Consent plugin sets a clear message to your website's visitors that you are using cookies.
Version: 0.1
Author: kanenas (aka Nikolas Branis)
Author URI: https://kanenas.net/
License: GPLv2
Text Domain: yet-another-cookie-law-consent
Domain Path: /languages
*/

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

register_activation_hook( __FILE__, 'yaclc_activation' );
register_deactivation_hook( __FILE__, 'yaclc_deactivation' );

function yaclc_activation() {

}

function yaclc_deactivation() {

}

/**
 * Load the plugin textdomain.
 */
function yaclc_load_plugin_textdomain() {
	load_plugin_textdomain( 'yet-another-cookie-law-consent', false, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'yaclc_load_plugin_textdomain' );

?>