<?php 
/**
 * Default Header Banner
 */
return array(
	'title'      => esc_html__( 'Header Banner', 'fse-portfolio' ),
	'categories' => array( 'fse-portfolio', 'Header Banner' ),
	'content'    => '<!-- wp:group {"className":"slider-outer-box","layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-group slider-outer-box"><!-- wp:cover {"customOverlayColor":"var(--wp--preset--color--extra-tertiary)","isUserOverlayColor":true,"minHeight":650,"isDark":false,"className":"banner-wrap","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover is-light banner-wrap" style="border-radius:20px;min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:var(--wp--preset--color--extra-tertiary)"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","className":"banner-innerr"} -->
<div class="wp-block-columns are-vertically-aligned-center banner-innerr"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"banner-content-div"} -->
<div class="wp-block-column is-vertically-aligned-center banner-content-div" style="flex-basis:50%">
<!-- wp:paragraph {"align":"left","className":"wow fadeInUp","style":{"typography":{"fontSize":"15px","letterSpacing":"5px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"fse-portfolio-inter"} -->
<p class="has-text-align-left wow fadeInUp has-fse-portfolio-inter-font-family" style="font-size:15px;font-style:normal;font-weight:600;letter-spacing:5px">FREELANCE DIGITAL DESIGNER</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","className":"wow fadeInUp banner-head","style":{"typography":{"fontSize":"55px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.3"}},"fontFamily":"fse-portfolio-inter"} -->
<h2 class="wp-block-heading has-text-align-left wow fadeInUp banner-head has-fse-portfolio-inter-font-family" style="font-size:55px;font-style:normal;font-weight:800;line-height:1.3">Hi, I’m <span class="color-change">Andrew</span><br><span class="color-change">Garfield</span>, and this is<br>my portfolio.</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"banner-image"} -->
<div class="wp-block-column is-vertically-aligned-center banner-image" style="flex-basis:50%"><!-- wp:image {"id":20,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/men-image.png' ) ) .'" alt="" class="wp-image-20"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);