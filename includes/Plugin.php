<?php

/*
	Copyright (C) 2021 by Your Name or Company Name <https://example.com>
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

namespace Vendor\Plugin_Name;

defined( 'ABSPATH' ) or exit;

if ( ! class_exists( __NAMESPACE__ . '\Plugin' ) ) {
	class Plugin extends \Clearcode\Framework\v6_1_2\Plugin {
		public function __construct( $file ) {
			parent::__construct( $file );
			new Settings();
		}

		public function activation() {}

		public function deactivation() {}
	}
}
