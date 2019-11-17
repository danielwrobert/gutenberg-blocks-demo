<?php

/**
 * Plugin Name: A8C Marketing Blocks
 * Plugin URI: https://github.com/Automattic/mktg-blocks
 * Description: This is a plugin that contains all of the custom Marketing blocks for the A8C Marketing Acquisition team.
 * Version: 1.1.0
 * Author: Automattic
 *
 * @package a8c-mktg-blocks
 */

defined( 'ABSPATH' ) || exit;

/**
 * Load all translations for our plugin from the MO file.
*/
function a8c_mktg_blocks_load_textdomain() {
	load_plugin_textdomain( 'a8c-mktg-blocks', false, basename( __DIR__ ) . '/languages' );
}
add_action( 'init', 'a8c_mktg_blocks_load_textdomain' );

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * Passes translations to JavaScript.
 */
function a8c_mktg_blocks_register_block() {

	// Fail if block editor is not supported
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	// automatically load dependencies and version
	$asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

	wp_register_script(
		'a8c-mktg-blocks',
		plugins_url( 'build/index.js', __FILE__ ),
		$asset_file['dependencies'],
		$asset_file['version']
	);

	// List all of the blocks for your plugin
	$blocks = [
		'bullet',
	];

	// Register each block with same CSS and JS
	foreach ( $blocks as $block ) {
		register_block_type(
			'a8c-mktg-blocks/' . $block,
			[
				'editor_script' => 'a8c-mktg-blocks',
			]
		);

		if ( function_exists( 'wp_set_script_translations' ) ) {
			/**
			 * May be extended to wp_set_script_translations( 'my-handle', 'my-domain',
			 * plugin_dir_path( MY_PLUGIN ) . 'languages' ) ). For details see
			 * https://make.wordpress.org/core/2018/11/09/new-javascript-i18n-support-in-wordpress/
			 */
			wp_set_script_translations( $block, 'a8c-mktg-blocks' );
		}
	}

}
add_action( 'init', 'a8c_mktg_blocks_register_block' );
