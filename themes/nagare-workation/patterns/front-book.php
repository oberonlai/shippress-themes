<?php
/**
 * Title: Home: the one way to book
 * Slug: nagare-workation/front-book
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Half-width front desk photograph beside a band with the four booking steps as numbered lines, a note and a filled Book a stay pill.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-book","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-book"><!-- wp:group {"className":"nw-book__photo","layout":{"type":"default"}} -->
<div class="wp-block-group nw-book__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full nw-ph sp-reveal sp-reveal--zoom"><img src="<?php echo nagare_workation_img( 'p15-front-desk.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-book__txt","layout":{"type":"default"}} -->
<div class="wp-block-group nw-book__txt"><!-- wp:group {"className":"nw-open sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'bk_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label"><?php echo esc_html( nagare_workation_t( 'bk_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-steps","layout":{"type":"default"}} -->
<div class="wp-block-group nw-steps"><!-- wp:group {"className":"nw-step","layout":{"type":"default"}} -->
<div class="wp-block-group nw-step"><!-- wp:paragraph {"className":"nw-step__n"} -->
<p class="nw-step__n">1</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-step__t"} -->
<p class="nw-step__t"><?php echo esc_html( nagare_workation_t( 'bk_s1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-step","layout":{"type":"default"}} -->
<div class="wp-block-group nw-step"><!-- wp:paragraph {"className":"nw-step__n"} -->
<p class="nw-step__n">2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-step__t"} -->
<p class="nw-step__t"><?php echo esc_html( nagare_workation_t( 'bk_s2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-step","layout":{"type":"default"}} -->
<div class="wp-block-group nw-step"><!-- wp:paragraph {"className":"nw-step__n"} -->
<p class="nw-step__n">3</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-step__t"} -->
<p class="nw-step__t"><?php echo esc_html( nagare_workation_t( 'bk_s3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-step","layout":{"type":"default"}} -->
<div class="wp-block-group nw-step"><!-- wp:paragraph {"className":"nw-step__n"} -->
<p class="nw-step__n">4</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-step__t"} -->
<p class="nw-step__t"><?php echo esc_html( nagare_workation_t( 'bk_s4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-book__note"} -->
<p class="nw-book__note"><?php echo esc_html( nagare_workation_t( 'bk_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"nw-btns"} -->
<div class="wp-block-buttons nw-btns"><!-- wp:button {"className":"nw-pill nw-pill--fill"} -->
<div class="wp-block-button nw-pill nw-pill--fill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'bk_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
