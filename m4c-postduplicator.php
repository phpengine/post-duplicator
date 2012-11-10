<?php
/*
Plugin Name: Post Duplicator
Description: Creates functionality to duplicate any and all post types, including taxonomies & custom fields
Version: 2.1
Author: Metaphor Creations
Author URI: http://www.metaphorcreations.com
License: GPL2
*/

/*  
Copyright 2012 Metaphor Creations  (email : joe@metaphorcreations.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/




/**Define Widget Constants */
if ( WP_DEBUG ) {
	define ( 'MTPHR_POST_DUPLICATOR_VERSION', '2.0-'.time() );
} else {
	define ( 'MTPHR_POST_DUPLICATOR_VERSION', '2.0' );
}
define ( 'MTPHR_POST_DUPLICATOR_DIR', plugin_dir_path(__FILE__) );
define ( 'MTPHR_POST_DUPLICATOR_URL', plugins_url().'/post-duplicator' );




/**
 * Include files.
 *
 * @since 2.0
 */
if ( is_admin() ) {

	// Load Metaboxer
	if( !function_exists('metaboxer_container') ) {
		require_once( MTPHR_POST_DUPLICATOR_DIR.'metaboxer/metaboxer.php' );
		require_once( MTPHR_POST_DUPLICATOR_DIR.'metaboxer/metaboxer-class.php' );
	}
	
	require_once( MTPHR_POST_DUPLICATOR_DIR.'includes/scripts.php' );
	require_once( MTPHR_POST_DUPLICATOR_DIR.'includes/ajax.php' );
	require_once( MTPHR_POST_DUPLICATOR_DIR.'includes/edit.php' );
	require_once( MTPHR_POST_DUPLICATOR_DIR.'includes/functions.php' );
	require_once( MTPHR_POST_DUPLICATOR_DIR.'includes/settings.php' );
}








