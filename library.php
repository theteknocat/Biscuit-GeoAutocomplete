<?php
/**
 * Register the jQuery UI Geo location autocomplete widget for inclusion
 *
 * @package Libraries
 * @subpackage JqueryTmpl
 * @version $Id: library.php 14413 2011-11-30 02:17:19Z teknocat $
 */
class GeoAutocomplete extends LibraryLoader {
	protected static function register() {
		Biscuit::instance()->Theme->register_js('footer', 'http://maps.google.com/maps/api/js?sensor=false');
		Biscuit::instance()->Theme->register_js('footer', 'libraries/geo_autocomplete/vendor/ui.geo_autocomplete.js');
	}
}
