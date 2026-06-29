<?php 
/**
 * Default Explore Section
 */
return array(
	'title'      => esc_html__( 'Explore Section', 'fse-portfolio' ),
	'categories' => array( 'fse-portfolio', 'Explore Section' ),
	'content'    => '<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/background-image.png' ) ) . '","id":64,"dimRatio":60,"customOverlayColor":"var(--wp--preset--color--extra-primary)","isUserOverlayColor":true,"minHeight":350,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:350px"><img class="wp-block-cover__image-background wp-image-64" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/background-image.png' ) ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:var(--wp--preset--color--extra-primary)"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"className":"wow fadeInUp","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"textColor":"foreground","fontFamily":"fse-portfolio-inter"} -->
<h3 class="wp-block-heading has-text-align-center wow fadeInUp has-foreground-color has-text-color has-link-color has-fse-portfolio-inter-font-family" style="font-size:40px;font-style:normal;font-weight:700;line-height:1.4">Looking for higher engagement?<br>Explore my PPC expertise.</h3>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"wow fadeInUp","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons wow fadeInUp"><!-- wp:button {"backgroundColor":"foreground","textColor":"extra-primary","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|extra-primary"}}},"border":{"radius":"10px"}},"fontFamily":"fse-portfolio-inter"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-extra-primary-color has-foreground-background-color has-text-color has-background has-link-color has-fse-portfolio-inter-font-family has-custom-font-size wp-element-button" style="border-radius:10px;font-size:18px;font-style:normal;font-weight:600">Get More Clicks</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);