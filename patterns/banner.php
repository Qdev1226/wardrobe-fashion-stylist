<?php
/**
 * Banner Section
 * 
 * slug: banner
 * title: Banner
 * categories: wardrobe-fashion-stylist
 */

return array(
    'title'      =>__( 'Banner', 'wardrobe-fashion-stylist' ),
    'categories' => array( 'wardrobe-fashion-stylist' ),
    'content'    => '<!-- wp:group {"tagName":"main","align":"full","className":"wp-block-group alignfull","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull"><!-- wp:columns {"verticalAlignment":"center","align":"full","className":"slider-banner"} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center slider-banner"><!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"padding":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-left:var(--wp--preset--spacing--80);flex-basis:30%"><!-- wp:paragraph {"align":"left","textColor":"primary","className":"has-background-color has-text-color has-upper-heading-font-size","fontSize":"upper-heading","fontFamily":"archivo"} -->
<p class="has-text-align-left has-background-color has-text-color has-upper-heading-font-size has-primary-color has-archivo-font-family">'. esc_html('THE REAL BEAUTY OF CRAFT','wardrobe-fashion-stylist') .'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"400","letterSpacing":"1px"}},"textColor":"primary","fontFamily":"cormorantgaramond"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-cormorantgaramond-font-family" style="font-size:40px;font-style:normal;font-weight:400;letter-spacing:1px">'. esc_html('SHOP THE','wardrobe-fashion-stylist') .' <br>'. esc_html('LATEST FASHION','wardrobe-fashion-stylist') .'<br>'. esc_html('TRENDS','wardrobe-fashion-stylist') .'<br>'. esc_html('FOR EVERYONE','wardrobe-fashion-stylist') .'</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"border":{"radius":"0px"}},"className":"is-style-outline","fontSize":"small","fontFamily":"archivo"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-archivo-font-family has-small-font-size"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:0px">'. esc_html('READ MORE','wardrobe-fashion-stylist') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png","id":6,"dimRatio":0,"minHeight":500,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->',
);