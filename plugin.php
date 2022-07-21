<?php

/**
 * Plugin Name
 *
 * @package     Plugin_Name
 * @author      Your Name
 * @copyright   2022 Your Name or Company Name
 * @license     GPL-3.0+
 *
 * @wordpress-plugin
 * Plugin Name: Plugin Name
 * Plugin URI:  https://wordpress.org/plugins/plugin-name
 * Description: Description of the plugin.
 * Version:     1.0.0
 * Author:      Your Name
 * Author URI:  https://example.com
 * Text Domain: plugin-name
 * Domain Path: /languages/
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt

   Copyright (C) 2022 by Your Name or Company Name <https://example.com>
   and associates (see AUTHORS.txt file).

   This file is part of Plugin Name.

   Plugin Name is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 3 of the License, or
   (at your option) any later version.

   Plugin Name is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with Plugin Name; if not, write to the Free Software
   Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

defined( 'ABSPATH' ) or exit;

try {
	require __DIR__ . '/vendor/autoload.php';

	foreach ( [ 'functions' ] as $file )
		require_once( __DIR__ . "/includes/$file.php" );

	Vendor\Plugin_Name\Plugin::instance( __FILE__ );
} catch ( Exception $exception ) {
	if ( WP_DEBUG && WP_DEBUG_DISPLAY ) echo $exception->getMessage();
	if ( WP_DEBUG && WP_DEBUG_LOG ) error_log( $exception->getMessage() );
}
