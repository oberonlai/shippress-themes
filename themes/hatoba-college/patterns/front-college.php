<?php
/**
 * Title: Home: the college
 * Slug: hatoba-college/front-college
 * Categories: hatoba-college
 * Keywords: college, maritime, training, harbour
 * Viewport Width: 1440
 * Description: Enlarged-initial section word, three narrative paragraphs and an offset 4:5 portrait with an italic caption.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"college","className":"hc-sec hc-college","layout":{"type":"default"}} -->
<section id="college" class="wp-block-group alignfull hc-sec hc-college"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'college_h_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'college_h_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'college_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-cols","layout":{"type":"default"}} -->
<div class="wp-block-group hc-cols"><!-- wp:group {"className":"hc-cols__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-cols__text"><!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'college_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'college_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'college_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-cols__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-cols__photo sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hc-portrait"} -->
<figure class="wp-block-image size-large hc-portrait"><img src="<?php echo hatoba_college_img( 'p04-logbook.webp' ); ?>" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hc-caption"} -->
<p class="hc-caption"><?php echo esc_html( hatoba_college_t( 'college_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
