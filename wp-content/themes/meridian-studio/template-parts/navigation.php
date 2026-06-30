<?php
/**
 * Template part for header navigation
 *
 * @package Meridian_Studio
 */
?>
<nav class="site-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'meridian' ); ?>">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'primary-menu',
			'menu_class'     => 'primary-menu',
			'container'      => false,
			'fallback_cb'    => false,
		)
	);
	?>
</nav>
