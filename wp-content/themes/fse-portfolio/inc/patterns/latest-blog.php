<?php
/**
 * Latest Blogs
 */
return array(
	'title'      => esc_html__( 'Latest Blogs', 'fse-portfolio' ),
	'categories' => array( 'fse-portfolio', 'Latest Blogs' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":38,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:group {"className":"site-blog-box","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group site-blog-box"><!-- wp:heading {"textAlign":"center","level":3,"className":"wow fadeInUp","style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dextra-primary)"}}},"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dextra-primary)"}},"fontFamily":"fse-portfolio-inter"} -->
<h3 class="wp-block-heading has-text-align-center wow fadeInUp has-text-color has-link-color has-fse-portfolio-inter-font-family" style="color:var(--wp--preset--color--extra-primary);font-size:20px;font-style:normal;font-weight:600;letter-spacing:2px;text-transform:capitalize">Our Blog</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"wow fadeInUp","style":{"typography":{"fontSize":"35px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontFamily":"fse-portfolio-inter"} -->
<h3 class="wp-block-heading has-text-align-center wow fadeInUp has-black-color has-text-color has-link-color has-fse-portfolio-inter-font-family" style="font-size:35px;font-style:normal;font-weight:700;line-height:1.3">Stay On Top Of The <br>Latest News</h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":59,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"className":"blog-area","layout":{"type":"default"}} -->
<div class="wp-block-query blog-area"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"className":"post-main-area wow fadeInUp","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"foreground","layout":{"inherit":false}} -->
<div class="wp-block-group post-main-area wow fadeInUp has-foreground-background-color has-background" style="border-radius:10px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"fse-portfolio-poppins"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"style":{"elements":{"link":{"color":{"text":"#747474"}}},"color":{"text":"#747474"},"typography":{"fontSize":"16px"}},"fontFamily":"fse-portfolio-poppins"} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dextra-primary)"}}},"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dextra-primary)"}},"fontFamily":"fse-portfolio-poppins"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
);