<?php
/**
 * Title: Home: where graduates are placed
 * Slug: kikan-college/front-placements
 * Categories: kikan-college
 * Viewport Width: 1440
 * Description: Photo and a ledger of the four placement partner types with count-up numbers.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"placements","align":"full","className":"kc-sec kc-pl","layout":{"type":"default"}} -->
<section id="placements" class="wp-block-group alignfull kc-sec kc-pl">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:group {"className":"kc-head sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"kc-head__n"} -->
<p class="kc-head__n"><?php echo esc_html( kikan_college_t( 'pl_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo esc_html( kikan_college_t( 'pl_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="kc-rule" aria-hidden="true"></div>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo esc_html( kikan_college_t( 'pl_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-grid kc-grid--57","layout":{"type":"default"}} -->
<div class="wp-block-group kc-grid kc-grid--57">
<!-- wp:group {"className":"kc-who__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kc-who__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-ph kc-ph--45"} -->
<figure class="wp-block-image size-full kc-ph kc-ph--45"><img src="<?php echo kikan_college_img( 'placed-heatpump.webp' ); ?>" alt="<?php echo kikan_college_a( 'alt_pl' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-pl__right","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pl__right">
<!-- wp:group {"className":"kc-ledger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ledger">
<!-- wp:group {"className":"kc-ledger__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ledger__row">
<!-- wp:paragraph {"className":"kc-ledger__n"} -->
<p class="kc-ledger__n"><span class="sp-count"><?php echo esc_html( kikan_college_t( 'pl1_n' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-ledger__b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ledger__b">
<!-- wp:paragraph {"className":"kc-ledger__l"} -->
<p class="kc-ledger__l"><?php echo esc_html( kikan_college_t( 'pl1_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-ledger__t"} -->
<p class="kc-ledger__t"><?php echo esc_html( kikan_college_t( 'pl1_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-ledger__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ledger__row">
<!-- wp:paragraph {"className":"kc-ledger__n"} -->
<p class="kc-ledger__n"><span class="sp-count"><?php echo esc_html( kikan_college_t( 'pl2_n' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-ledger__b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ledger__b">
<!-- wp:paragraph {"className":"kc-ledger__l"} -->
<p class="kc-ledger__l"><?php echo esc_html( kikan_college_t( 'pl2_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-ledger__t"} -->
<p class="kc-ledger__t"><?php echo esc_html( kikan_college_t( 'pl2_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-ledger__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ledger__row">
<!-- wp:paragraph {"className":"kc-ledger__n"} -->
<p class="kc-ledger__n"><span class="sp-count"><?php echo esc_html( kikan_college_t( 'pl3_n' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-ledger__b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ledger__b">
<!-- wp:paragraph {"className":"kc-ledger__l"} -->
<p class="kc-ledger__l"><?php echo esc_html( kikan_college_t( 'pl3_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-ledger__t"} -->
<p class="kc-ledger__t"><?php echo esc_html( kikan_college_t( 'pl3_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-ledger__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ledger__row">
<!-- wp:paragraph {"className":"kc-ledger__n"} -->
<p class="kc-ledger__n"><span class="sp-count"><?php echo esc_html( kikan_college_t( 'pl4_n' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-ledger__b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ledger__b">
<!-- wp:paragraph {"className":"kc-ledger__l"} -->
<p class="kc-ledger__l"><?php echo esc_html( kikan_college_t( 'pl4_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-ledger__t"} -->
<p class="kc-ledger__t"><?php echo esc_html( kikan_college_t( 'pl4_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-ledger__total"} -->
<p class="kc-ledger__total"><?php echo esc_html( kikan_college_t( 'pl_total' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-prose__p"} -->
<p class="kc-prose__p"><?php echo esc_html( kikan_college_t( 'pl_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-small"} -->
<p class="kc-small"><?php echo esc_html( kikan_college_t( 'pl_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-pills","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pills">
<!-- wp:buttons {"className":"kc-btns"} -->
<div class="wp-block-buttons kc-btns">
<!-- wp:button {"className":"kc-pill kc-pill--out"} -->
<div class="wp-block-button kc-pill kc-pill--out"><a class="wp-block-button__link wp-element-button" href="/placements/"><?php echo esc_html( kikan_college_t( 'pl_b1' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:buttons {"className":"kc-btns"} -->
<div class="wp-block-buttons kc-btns">
<!-- wp:button {"className":"kc-pill kc-pill--out"} -->
<div class="wp-block-button kc-pill kc-pill--out"><a class="wp-block-button__link wp-element-button" href="/placements/#employers"><?php echo esc_html( kikan_college_t( 'pl_b2' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
