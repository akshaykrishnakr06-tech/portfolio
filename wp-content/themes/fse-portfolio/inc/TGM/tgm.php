<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function fse_portfolio_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Siteready Coming Soon Under Construction', 'fse-portfolio' ),
			'slug'             => 'siteready-coming-soon-under-construction',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	fse_portfolio_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'fse_portfolio_register_recommended_plugins' );