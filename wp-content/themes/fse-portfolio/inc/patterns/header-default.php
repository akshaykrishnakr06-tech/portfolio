<?php 
/**
 * Default Header
 */
return array(
	'title'      => esc_html__( 'Default Header', 'fse-portfolio' ),
	'categories' => array( 'fse-portfolio', 'header' ),
	'content'    => '<!-- wp:group {"className":"menu-header","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group menu-header" style="border-radius:0px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:group {"className":"logo-box","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group logo-box"><!-- wp:site-logo {"width":80,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"700"}},"textColor":"black","fontFamily":"fse-portfolio-inter"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"header-navv"} -->
<div class="wp-block-column is-vertically-aligned-center header-navv" style="flex-basis:55%"><!-- wp:navigation {"textColor":"black","overlayTextColor":"extra-primary","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize","fontSize":"18px"}},"fontFamily":"fse-portfolio-inter","layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Projects","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Gallery","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Buy Now","type":"link","opensInNewTab":true,"url":"' . esc_url( FSE_PORTFOLIO_BUY_NOW ) . '","kind":"custom","className":"buy-now-button"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"extra-primary","textColor":"foreground","style":{"border":{"radius":"5px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"fse-portfolio-inter"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-extra-primary-background-color has-text-color has-background has-link-color has-fse-portfolio-inter-font-family wp-element-button" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);font-style:normal;font-weight:600">Lets Talk</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);