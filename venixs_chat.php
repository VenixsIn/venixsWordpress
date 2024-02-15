 <?php
/**
 * Plugin Name: Venixs
 * Description: Venixs Chat SDK
 * Version:      1.0.0
 * License:      GPL-2.0+
 * Author:       Venixs
 * Author URI:   https://venixs.com
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define('VENIXS_PLUGIN_BASENAME', plugin_basename(__FILE__));

add_action('init', 'venixs_plugin_init');

function venixs_plugin_init() {
    require_once plugin_dir_path( __FILE__ ) . 'core/includes/checkout.php';
    
    $plugin = new VeDr_pnix( 'Venixs SDK', '1.0.0' );
    
    $plugin->run();
}