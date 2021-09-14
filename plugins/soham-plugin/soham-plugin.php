<?php
/**
 * Plugin Name: soham-plugin
 * Plugin URI:  https://sohampatel1.wordpress.com/2021/07/12/wp-intro/
 * Description: My first plugin
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.4
 * Author: Soham Patel
 * Author URI: https://sohampatel1.wordpress.com/
 * License:  GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/*
{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {URI to Plugin License}.
*/

// =================================================
// Security: Abort if this file is called directly
// =================================================
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

require_once __DIR__ . '/custom-post-type.php';
require_once __DIR__ . '/custom-metadata.php';
require_once __DIR__ . '/shortcode.php';
require_once __DIR__ . '/settings.php';
