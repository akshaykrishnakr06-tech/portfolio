<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage FSE Portfolio
 * @since FSE Portfolio 1.7
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fse_portfolio_customize_register( $wp_customize ) {
    // Check for existence of WP_Customize_Manager before proceeding
	if ( ! class_exists( 'WP_Customize_Manager' ) ) {
        return;
    }
    
	$wp_customize->add_section( new FSE_Portfolio_Customizer_Pro_Button( $wp_customize, 'upsell_premium_section', array(
		'title'       => __( 'FSE Portfolio Pro', 'fse-portfolio' ),
		'button_text' => __( 'Buy Pro Theme', 'fse-portfolio' ),
		'url'         => esc_url( FSE_PORTFOLIO_BUY_NOW ),
		'priority'    => 0,
	)));

	$wp_customize->add_section( new FSE_Portfolio_Customizer_Pro_Button( $wp_customize, 'upsell_bundle_section', array(
		'title'       => __( 'Get All Themes', 'fse-portfolio' ),
		'button_text' => __( 'Buy Now', 'fse-portfolio' ),
		'url'         => esc_url( FSE_PORTFOLIO_BUNDLE_LINK ),
		'priority'    => 0,
	)));

}
add_action( 'customize_register', 'fse_portfolio_customize_register' );

if ( class_exists( 'WP_Customize_Section' ) ) {
	class FSE_Portfolio_Customizer_Pro_Button extends WP_Customize_Section {
		public $type = 'fse-portfolio-buynow';
		public $button_text = '';
		public $url = '';

		protected function render() {
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="fse_portfolio_customizer_pro_button accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title premium-details">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}

/**
 * Enqueue script for custom customize control.
 */
function fse_portfolio_custom_control_scripts() {
	wp_enqueue_script( 'fse-portfolio-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );

    wp_enqueue_style( 'fse-portfolio-customizer-css', get_template_directory_uri() . '/assets/css/customizer.css', array(), '1.0' );
}
add_action( 'customize_controls_enqueue_scripts', 'fse_portfolio_custom_control_scripts' );
