<?php

/*
 * Plugin Name: Heading With Description Elementor Widget
 * Description: New Elementor Widget
 * Author: Muhammad Jawad Abbasi
 * Version: 1.0
 * Text Domain: heading-with-description

 * Heading With Description Elementor Widget is free plugin: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Heading With Description Elementor Widget is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Heading With Description Elementor Widget. If not, see <https://www.gnu.org/licenses/>.
*/

function heading_with_description_widget_register($widget_manager){
  require_once(__DIR__ . '/includes/widgets/heading-with-description-widget.php');
  $widget_manager->register(new\heading_with_description_widget);
}
add_action('elementor/widgets/register','heading_with_description_widget_register');

?>
