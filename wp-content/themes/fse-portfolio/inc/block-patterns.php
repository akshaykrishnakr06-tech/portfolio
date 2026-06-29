<?php   
/**
 * Block Patterns
 *
 * @package FSE Portfolio
 * @since 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */
function fse_portfolio_register_block_patterns() {
	$block_pattern_categories = array(
		'fse-portfolio' => array( 'label' => esc_html__( 'FSE Portfolio Patterns', 'fse-portfolio' ) ),
		'pages'    => array( 'label' => esc_html__( 'Pages', 'fse-portfolio' ) ),
	);

	$block_pattern_categories = apply_filters( 'fse_portfolio_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'header-default',
		'header-banner',
		'about-us-section',
		'explore-section',
		'archive-inner-banner',
		'inner-banner',
		'post-one-column',
		'post-two-column',
		'latest-blog',
		'hidden-404',
		'sidebar',
		'footer-default',
	);

	$block_patterns = apply_filters( 'fse_portfolio_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_parent_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'fse-portfolio/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'fse_portfolio_register_block_patterns', 9 );