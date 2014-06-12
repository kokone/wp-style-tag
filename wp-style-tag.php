<?php
/*
Plugin Name:    WP Style Tag shortcode
Plugin URI:     https://github.com/A7M2/wp-style-tag
Description:    Add inline CSS to a post
Version:        1.0
Author:         Nathaniel Williams
Author URI:     http://coios.net/
License:        MIT
*/

class WP_Style_Tag {

	public function __construct() {
		add_shortcode( 'styletag', array( $this, 'shortcode' ) );
	}

	public function shortcode( $attributes, $content = null ) {
		if( !is_null($content) && $content !== '' ) {
			$content = str_replace( '&nbsp;', ' ', strip_tags( $content ) );
			return '<style>' . str_replace( '&gt;', '>', strip_tags( $content ) ) . '</style>';
		} else {
			return '';
		}
	}
}

new WP_Style_Tag();
