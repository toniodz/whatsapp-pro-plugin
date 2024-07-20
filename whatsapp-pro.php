<?php
/**
 * Plugin Name: WhatsApp Pro
 * Plugin URI: https://dzines.co.uk/whatsapp-pro
 * Description: Add customizable WhatsApp chat and call buttons to your website.
 * Version: 1.0.0
 * Author: Tony Dzines
 * Author URI: https://dzines.co.uk
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: whatsapp-pro
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'WHATSAPP_PRO_VERSION', '1.0.0' );
define( 'WHATSAPP_PRO_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WHATSAPP_PRO_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once WHATSAPP_PRO_PLUGIN_DIR . 'includes/class-whatsapp-pro.php';

function run_whatsapp_pro() {
    $plugin = new WhatsApp_Pro();
    $plugin->run();
}
run_whatsapp_pro();