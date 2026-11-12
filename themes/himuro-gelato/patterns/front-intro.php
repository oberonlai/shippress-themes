<?php
/**
 * Title: Home: introduction
 * Slug: himuro-gelato/front-intro
 * Categories: himuro-gelato
 * Viewport Width: 1440
 * Description: Rosette label with a hairline, the two-line statement and three narrative paragraphs beside a portrait photograph set flush right.
 */
?>
<!-- wp:group {"className":"hg-intro hg-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-intro hg-sec"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:paragraph {"className":"hg-label"} -->
<p class="hg-label"><?php echo esc_html( himuro_gelato_t( 'in_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hg-statement sp-reveal sp-reveal--wipe"} -->
<h2 class="wp-block-heading hg-statement sp-reveal sp-reveal--wipe"><span><?php echo himuro_gelato_lines( 'in_h' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hg-intro__cols","layout":{"type":"default"}} -->
<div class="wp-block-group hg-intro__cols"><!-- wp:group {"className":"hg-intro__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hg-intro__text sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'in_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'in_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'in_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-intro__photo sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full hg-intro__photo sp-reveal sp-reveal--up"><img src="<?php echo himuro_gelato_img( 'p04' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
