<?php

/*
Plugin Name: Bootstrap Carousel Touch Swipe Support
Plugin URI: http://quantathemes.com/
Description: This plugin will add Touch Swipe Support to Bootstrap Carousels based Sliders, if you are using themes based on Bootstrap.
Version: 1.0.0
Author: Shahab Khan
Author URI: http://quantatec.co.uk/
License: GPLv2
*/

/*  Copyright 2016  Shahab Khan (http://quantathemes.com/)

    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

if ( !defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

/*
 * =============================================================================
 * =============================================================================
 * =============================================================================
 */

function bs_carousel_touch_swipe_support_enqueue_script() {

	// Include JavaScipt file to Enable jQuery Mobile Touch Swipe Support
	wp_enqueue_script(
		'jquery-mobile-touch-support',
		plugin_dir_url( __FILE__ ) . 'js/jquery-mobile-touch-support.min.js',
		array('jquery'),
		'1.4.5',
		true
	);

	// Include JavaScipt file to Enable Touch Swipe on Bootstrap Caousel
	wp_enqueue_script(
		'bs-carousel-touch-swipe-support',
		plugin_dir_url( __FILE__ ) . 'js/bs-carousel-touch-swipe-support.js',
		array('jquery-mobile-touch-support'),
		'1.0',
		true
	);

}

add_action( 'wp_enqueue_scripts', 'bs_carousel_touch_swipe_support_enqueue_script', 1000 );

?>