<?php

declare( strict_types = 1 );

namespace Kucrut\ViteForWPExample\Vue\Frontend;

use Kucrut\Vite;

/**
 * Frontend bootstrapper
 *
 * @return void
 */
function bootstrap(): void {
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_script' );
	add_action( 'wp_footer', __NAMESPACE__ . '\\render_app' );
}

/**
 * Render application's markup
 */
function render_app(): void {
	?>
	<div id="v4wp-app-vue" class="v4wp-app-vue"></div>
	<?php
}

/**
 * Enqueue script
 */
function enqueue_script(): void {
	Vite\enqueue_asset(
		dirname( __DIR__ ) . '/app/dist',
		'app/src/main.js',
		[
			'handle' => 'vite-for-wp-vue',
			'in-footer' => true,
		]
	);
}
