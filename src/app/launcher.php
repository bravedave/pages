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

		print Parsedown::instance()->text( file_get_contents( __DIR__ . '/../../Readme.md'));

		// page will self destruct and close

	}

}
