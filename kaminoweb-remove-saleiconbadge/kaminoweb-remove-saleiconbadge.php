<?php
/**
* Plugin Name:       Remove WooCommerce Sales Icon Badge
* Plugin URI:        https://github.com/kaminoweb
* Description:       Removes Product Sales Flash Icon Badge in WooCommerce
* Version:           0.1
* Requires at least: 5.5
* Author:            Kaminoweb Inc
* Author URI:        https://kaminoweb.com/
* License:           GPLv2
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function kaminoweb_remove_sale_flash() {
         return false;
}

add_filter('woocommerce_sale_flash', 'kaminoweb_remove_sale_flash');

