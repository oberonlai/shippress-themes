<?php
/**
 * Title: Home: hero window
 * Slug: akiha-college/front-hero
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: T1: a serif question on the mist ground above a framed photograph window; the docked header follows in the template.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ak-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-hero"><!-- wp:group {"className":"ak-hero__top","layout":{"type":"default"}} -->
<div class="wp-block-group ak-hero__top"><!-- wp:heading {"level":1,"className":"ak-h1"} -->
<h1 class="wp-block-heading ak-h1"><?php echo esc_html( akiha_college_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ak-notice","layout":{"type":"default"}} -->
<div class="wp-block-group ak-notice"><!-- wp:paragraph {"className":"ak-notice__head"} -->
<p class="ak-notice__head"><a href="<?php echo akiha_college_url( '/fees/#intakes' ); ?>"><?php echo esc_html( akiha_college_t( 'notice_h' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-notice__date"} -->
<p class="ak-notice__date"><?php echo esc_html( akiha_college_t( 'notice_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-hero__window sp-parallax"} -->
<figure class="wp-block-image size-full ak-hero__window sp-parallax"><img src="<?php echo akiha_college_img( 'h01.webp' ); ?>" alt="<?php echo akiha_college_a( 'alt_h01' ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->