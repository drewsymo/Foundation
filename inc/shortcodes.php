<?php

/**
 * Shortcodes
 *
 * Setup theme shortcodes
 *
 * @package WordPress
 * @subpackage Foundation 5, for WordPress
 * @since Foundation, for WordPress 1.0
 */

/**
 * Initialise Foundation, for WordPress Shortcodes
 */

// Allow shortcodes in widgets

add_filter('widget_text', 'do_shortcode');

/**
 * Grid
 */

// Rows [row][/row]

function foundation_shortcode_row( $atts, $content = null ) {
   return '<div class="row">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'row', 'foundation_shortcode_row' );

// Columns [column][/column]

function foundation_shortcode_column( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'center' => '',
		'span' => '',
		), $atts ) );

	// Set the 'center' variable
	if ($center == 'true') {
	$center = 'centered';
	}

	return '<div class="' . esc_attr($span) . ' columns ' . esc_attr($center) .'">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'column', 'foundation_shortcode_column' );

/**
 * UI
 */

// Buttons [button][/button]

function foundation_shortcode_button( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'link' => '#',
		'size' => 'medium',
		'type' => '',
		'style' => '',
		'reveal' => ''
		), $atts ) );

		if (!$reveal == null) {
			$reveal_data = 'data-reveal-id=' . $reveal . ' ';
		}

	return '<a ' . $reveal_data . ' href="' . esc_attr($link) . '" class="' . esc_attr($size) . ' ' . esc_attr($style) . ' ' . esc_attr($type) . ' button">' . $content . '</a>';
}

add_shortcode( 'button', 'foundation_shortcode_button' );

// Alerts [alert][/alert]

function foundation_shortcode_alert( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'type' => ''
		), $atts ) );

	return '<div data-alert class="alert-box ' . esc_attr($type) . '">' . do_shortcode($content) . ' <a href="" class="close">&times;</a> </div>';
}

add_shortcode( 'alert', 'foundation_shortcode_alert' );

// Panels [panel][/panel]

function foundation_shortcode_panel( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'type' => '',
		'style' => ''
		), $atts ) );

	return '<div class="panel ' . esc_attr($type) . ' ' . esc_attr($style) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'panel', 'foundation_shortcode_panel' );

/**
 * Elements
 */

// Detection (Show) [show][/show]

function foundation_shortcode_show( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'for' => ''
		), $atts ) );

	return '<div class="show-for-' . esc_attr($for) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'show', 'foundation_shortcode_show' );

// Detection (Hide) [hide][/hide]

function foundation_shortcode_hide( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'for' => ''
		), $atts ) );

	return '<div class="hide-for-' . esc_attr($for) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'hide', 'foundation_shortcode_hide' );

/**
 * Extras
 */

// Reveal [reveal][/reveal]

function foundation_shortcode_reveal( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'name' => '',
		'style' => ''
		), $atts ) );

	return '<div id="' . esc_attr($name) . '" class="reveal-modal ' . esc_attr($style) . '">' . do_shortcode($content) . '</div>';

}

add_shortcode( 'reveal', 'foundation_shortcode_reveal' );

// Sections [sections type="tabs"] [section title="Section Title"]Content[/section] [/sections]

function foundation_shortcode_sections( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'type' => ''
		), $atts ) );

	return '<div class="section-container '. esc_attr($type) . '" data-section="'. esc_attr($type) . '">' . do_shortcode($content) . '</div>';

}

add_shortcode( 'sections', 'foundation_shortcode_sections' );

// Section [section title="Section Title"]Content[/section]

function foundation_shortcode_section( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'title' => ''
		), $atts ) );

	return '<section><p class="title" data-section-title><a href="#">Section 1</a></p><div class="content" data-section-content>' . do_shortcode($content) . '</div></section>';

}

add_shortcode( 'section', 'foundation_shortcode_section' );

?>
