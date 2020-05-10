<?php
/**
 * David Bray
 * BrayWorth Pty Ltd
 * e. david@brayworth.com.au
 *
 * MIT License
 *
*/

namespace pages;
use Parsedown;

class launcher {
	static function run() {

		$page = new page;	// from this namespace
		$page->open();

		if ( class_exists('Parsedown')) {
			/**
			 * Well not that simple - you have extended it with
			 * composer require erusev/parsedown
			 */

			print Parsedown::instance()->text( file_get_contents( __DIR__ . '/../../Readme.md'));

		}
		else {

			/**
			 * Yeah - the Minimum Viable Product
			 */
			print '<h1>hello world</h1>';

		}

		// page will self destruct and close

	}

}
