<?php

/*
 * Plugin Name: Customizable Team Member Elementor Widget
 * Plugin URI: https://customizabletm.jawad-developer.com/
 * Description: You can add video for team member & also different type of layouts.
 * Author: Muhammad Jawad Abbasi
 * Author URI: https://jawad-developer.com/
 * Version: 1.0
 * Text Domain: customizable-team-member
 
 * Customizable Team Member Elementor Widget is free plugin: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Customizable Team Member Elementor Widget is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Customizable Team Member Elementor Widget. If not, see <https://www.gnu.org/licenses/>.
*/

// Directly Not Accessable
if(!defined('ABSPATH')){
    exit;
}

function customizable_team_member_widget_register($widget_manager){
    require_once(__DIR__.'/includes/widget/customizable-team-member.php');
    $widget_manager->register(new\customizable_team_member_elementor_widget());
}
add_action('elementor/widgets/register','customizable_team_member_widget_register');

if(!defined('customizable_team_member_plugin_url')){
    define('customizable_team_member_plugin_url',plugins_url('/',__FILE__));
}

function customizable_team_member_enqueue_scripts_and_styles(){
    wp_enqueue_style('customizable-team-member-style',customizable_team_member_plugin_url.'/includes/css/customizable-team-member.css');
}
add_action('wp_enqueue_scripts','customizable_team_member_enqueue_scripts_and_styles');

?>