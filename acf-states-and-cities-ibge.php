<?php
/**
 * Plugin Name:       ACF - Estados e cidades Brasileiras
 * Plugin URI:        #
 * Description:       Adiciona ao ACF a opção de campo de cidade considerando a seleção de Estado/Cidade.
 * Version:           1.0.0
 * Author:            Glaydson Rodrigues 
 * Author URI:        #
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       products
 * Domain Path:       /languages
 */

load_plugin_textdomain('acf-brazilian-city-field', false, dirname(plugin_basename(__FILE__) ) . '/lang/');
function register_fields_brazilian_city()
{
    require_once plugin_dir_path( __FILE__ ) . 'Rest.php';
    require_once plugin_dir_path( __FILE__ ) . 'acf-brazilian-city-field.php';
}
add_action('acf/include_field_types', 'register_fields_brazilian_city');