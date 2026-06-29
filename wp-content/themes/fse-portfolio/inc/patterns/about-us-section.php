<?php 
/**
 * Default About Section
 */
return array(
	'title'      => esc_html__( 'About Section', 'fse-portfolio' ),
	'categories' => array( 'fse-portfolio', 'About Section' ),
	'content'    => '<!-- wp:group {"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%","className":"about-image"} -->
<div class="wp-block-column about-image" style="flex-basis:33.33%"><!-- wp:image {"id":27,"sizeSlug":"full","linkDestination":"none","className":"wow fadeInUp","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border wow fadeInUp"><img src="' . esc_url( get_theme_file_uri( '/assets/images/about-man.png' ) ) . '" alt="" class="wp-image-27" style="border-radius:10px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"className":"wow fadeInUp","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontFamily":"fse-portfolio-inter"} -->
<h2 class="wp-block-heading wow fadeInUp has-black-color has-text-color has-link-color has-fse-portfolio-inter-font-family">About me</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wow fadeInUp","style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}}},"fontFamily":"fse-portfolio-inter"} -->
<p class="wow fadeInUp has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque orci purus, posuere sit amet nulla id, efficitur condimentum metus. Donec vestibulum vehicula risus, a euismod ante porta ac. Morbi bibendum vitae eros vel pellentesque. Ut nec aliquam metus, sit amet lacinia ante. Phasellus sit amet metus eget nibh pharetra varius. Praesent at sem ultricies, laoreet ex quis, tristique odio. Curabitur laoreet velit sit amet mauris maximus facilisis.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"tagName":"main","align":"full","className":"wp-block-section wow fadeInUp","style":{"spacing":{"padding":{"top":"30px"}}},"layout":{"inherit":true,"type":"constrained","contentSize":""}} -->
<main class="wp-block-group alignfull wp-block-section wow fadeInUp" style="padding-top:30px"><!-- wp:columns {"className":"product-box","style":{"spacing":{"blockGap":{"left":"0px"}}}} -->
<div class="wp-block-columns product-box"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"className":"wow animate__animated animate__fadeInUp","layout":{"type":"constrained","contentSize":"100%"}} -->
<div id="custom-tabs" class="wp-block-group wow animate__animated animate__fadeInUp"><!-- wp:group {"className":"tab-buttons","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group tab-buttons"><!-- wp:buttons {"className":"tab-btn"} -->
<div class="wp-block-buttons tab-btn" id="tab-btn-1"><!-- wp:button {"className":"is-style-outline","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"#676767"}}},"border":{"radius":"0px"},"color":{"text":"#676767"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontFamily":"fse-portfolio-inter"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-link-color has-fse-portfolio-inter-font-family has-custom-font-size wp-element-button" style="border-radius:0px;color:#676767;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;font-style:normal;font-weight:700">Main Skills</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"tab-btn"} -->
<div class="wp-block-buttons tab-btn" id="tab-btn-2"><!-- wp:button {"className":"is-style-outline","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"#676767"}}},"border":{"radius":"0px"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"text":"#676767"}},"fontFamily":"fse-portfolio-inter"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-link-color has-fse-portfolio-inter-font-family has-custom-font-size wp-element-button" style="border-radius:0px;color:#676767;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;font-style:normal;font-weight:700">Awards</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"tab-btn"} -->
<div class="wp-block-buttons tab-btn" id="tab-btn-3"><!-- wp:button {"className":"is-style-outline","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"#676767"}}},"border":{"radius":"0px"},"color":{"text":"#676767"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontFamily":"fse-portfolio-inter"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-link-color has-fse-portfolio-inter-font-family has-custom-font-size wp-element-button" style="border-radius:0px;color:#676767;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;font-style:normal;font-weight:700">Experience</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"tab-btn"} -->
<div class="wp-block-buttons tab-btn" id="tab-btn-4"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0px"},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"#676767"}}},"color":{"text":"#676767"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontFamily":"fse-portfolio-inter"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-link-color has-fse-portfolio-inter-font-family has-custom-font-size wp-element-button" style="border-radius:0px;color:#676767;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;font-style:normal;font-weight:700">Education &amp; Certification</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"tab-btn"} -->
<div class="wp-block-buttons tab-btn" id="tab-btn-5"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"event-cards","layout":{"type":"constrained","contentSize":"100%"}} -->
<div id="event-cards-1" class="wp-block-group event-cards"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":101,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/icon1.png' ) ) . '" alt="" class="wp-image-101" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Understand Your <br>Vision</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":102,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/icon2.png' ) ) . '" alt="" class="wp-image-102" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Craft Creative <br>Solutions</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":98,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/icon3.png' ) ) . '" alt="" class="wp-image-98" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Bussiness Planning<br>Strategies</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":99,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/icon4.png' ) ) . '" alt="" class="wp-image-99" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Skilled &amp;<br>Professional team</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"event-cards","layout":{"type":"constrained","contentSize":"100%"}} -->
<div id="event-cards-2" class="wp-block-group event-cards"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":101,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/img1.png' ) ) . '" alt="" class="wp-image-101" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Best UI/UX Design Award</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":102,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/img2.png' ) ) . '" alt="" class="wp-image-102" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Innovation in Web Design</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":98,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/img3.png' ) ) . '" alt="" class="wp-image-98" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Awards &amp; Recognition</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":99,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/img4.png' ) ) . '" alt="" class="wp-image-99" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Best IT Developer Award</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"event-cards","layout":{"type":"constrained","contentSize":"100%"}} -->
<div id="event-cards-3" class="wp-block-group event-cards"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":101,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/img5.png' ) ) . '" alt="" class="wp-image-101" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">5+ Years of Expertise</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":102,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/img6.png' ) ) . '" alt="" class="wp-image-102" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Diverse Industries</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":98,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/img7.png' ) ) . '" alt="" class="wp-image-98" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Proven Track Record</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":99,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/img8.png' ) ) . '" alt="" class="wp-image-99" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">10+ Yrs of Expertise</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"event-cards","layout":{"type":"constrained","contentSize":"100%"}} -->
<div id="event-cards-4" class="wp-block-group event-cards"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":101,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/img9.png' ) ) . '" alt="" class="wp-image-101" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Bachelor’s Degree in Design</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":102,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/img10.png' ) ) . '" alt="" class="wp-image-102" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Certified UI/UX Designer</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":98,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/img11.png' ) ) . '" alt="" class="wp-image-98" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Learning &amp; Workshops</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"verticalAlignment":"center","className":"service-box","style":{"border":{"radius":"5px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns are-vertically-aligned-center service-box has-foreground-background-color has-background" style="border-radius:5px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":99,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"icon-box"} -->
<figure class="wp-block-image aligncenter size-full is-resized icon-box"><img src="' . esc_url( get_theme_file_uri( '/assets/images/img12.png' ) ) . '" alt="" class="wp-image-99" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":4,"style":{"color":{"text":"#676767"},"elements":{"link":{"color":{"text":"#676767"}}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"fse-portfolio-inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:#676767;font-size:20px;font-style:normal;font-weight:500;line-height:1.4">Certified IT Developer</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
);