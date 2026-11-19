<?php
/**
 * Title: Page: Rooms
 * Slug: yuzuriha-retreat/page-rooms
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Opener, three square cards for the rooms and the hall, and three notes on the house.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-opener sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group yr-opener sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-opener__img"} -->
<figure class="wp-block-image size-full yr-opener__img"><img src="<?php echo yuzuriha_retreat_img( 'p01-deck-first-light.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yr-opener__text","layout":{"type":"default"}} -->
<div class="wp-block-group yr-opener__text"><!-- wp:html -->
<div class="yr-glow" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-kicker"} -->
<p class="yr-kicker"><?php echo esc_html( yuzuriha_retreat_t( 'p_rooms_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yr-opener__h"} -->
<h1 class="wp-block-heading yr-opener__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_rooms_t' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--stone yr-sec--calendar","layout":{"type":"default"}} -->
<section class="wp-block-group yr-sec yr-sec--stone yr-sec--calendar"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'rooms_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-intro yr-intro--wide"} -->
<p class="yr-intro yr-intro--wide"><?php echo esc_html( yuzuriha_retreat_t( 'p_rooms_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yr-cards sp-stagger"><!-- wp:group {"className":"yr-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yr-card__head"} -->
<p class="yr-card__head"><span class="yr-card__name"><?php echo esc_html( yuzuriha_retreat_t( 'rm1_name' ) ); ?></span><i class="yr-card__tick" aria-hidden="true"></i><span class="yr-card__label"><?php echo esc_html( yuzuriha_retreat_t( 'rm1_label' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>","className":"yr-card__img"} -->
<figure class="wp-block-image size-full yr-card__img"><a href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>"><img src="<?php echo yuzuriha_retreat_img( 'p08-single-room.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p08' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="yr-circ" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" aria-label="<?php echo yuzuriha_retreat_a( 'rm1_name' ); ?>"><?php echo yuzuriha_retreat_icon( 'circle', 'yr-circ__svg' ); ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="yr-dots" aria-hidden="true"><span></span><span></span><span></span><span></span><a class="yr-dots__go" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" tabindex="-1"><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></a></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-tags"} -->
<p class="yr-tags"><?php echo esc_html( yuzuriha_retreat_t( 'rm1_t1' ) ); ?>&nbsp; <?php echo esc_html( yuzuriha_retreat_t( 'rm1_t2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-card__dates"} -->
<p class="yr-card__dates"><?php echo esc_html( yuzuriha_retreat_t( 'rm1_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yr-card__head"} -->
<p class="yr-card__head"><span class="yr-card__name"><?php echo esc_html( yuzuriha_retreat_t( 'rm2_name' ) ); ?></span><i class="yr-card__tick" aria-hidden="true"></i><span class="yr-card__label"><?php echo esc_html( yuzuriha_retreat_t( 'rm2_label' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>","className":"yr-card__img"} -->
<figure class="wp-block-image size-full yr-card__img"><a href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>"><img src="<?php echo yuzuriha_retreat_img( 'p18-twin-room.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p18' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="yr-circ" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" aria-label="<?php echo yuzuriha_retreat_a( 'rm2_name' ); ?>"><?php echo yuzuriha_retreat_icon( 'circle', 'yr-circ__svg' ); ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="yr-dots" aria-hidden="true"><span></span><span></span><span></span><span></span><a class="yr-dots__go" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" tabindex="-1"><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></a></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-tags"} -->
<p class="yr-tags"><?php echo esc_html( yuzuriha_retreat_t( 'rm2_t1' ) ); ?>&nbsp; <?php echo esc_html( yuzuriha_retreat_t( 'rm2_t2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-card__dates"} -->
<p class="yr-card__dates"><?php echo esc_html( yuzuriha_retreat_t( 'rm2_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yr-card__head"} -->
<p class="yr-card__head"><span class="yr-card__name"><?php echo esc_html( yuzuriha_retreat_t( 'rm3_name' ) ); ?></span><i class="yr-card__tick" aria-hidden="true"></i><span class="yr-card__label"><?php echo esc_html( yuzuriha_retreat_t( 'rm3_label' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>","className":"yr-card__img"} -->
<figure class="wp-block-image size-full yr-card__img"><a href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>"><img src="<?php echo yuzuriha_retreat_img( 'p10-empty-hall.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p10' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="yr-circ" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" aria-label="<?php echo yuzuriha_retreat_a( 'rm3_name' ); ?>"><?php echo yuzuriha_retreat_icon( 'circle', 'yr-circ__svg' ); ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="yr-dots" aria-hidden="true"><span></span><span></span><span></span><span></span><a class="yr-dots__go" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" tabindex="-1"><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></a></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-tags"} -->
<p class="yr-tags"><?php echo esc_html( yuzuriha_retreat_t( 'rm3_t1' ) ); ?>&nbsp; <?php echo esc_html( yuzuriha_retreat_t( 'rm3_t2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-card__dates"} -->
<p class="yr-card__dates"><?php echo esc_html( yuzuriha_retreat_t( 'rm3_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--mist","layout":{"type":"default"}} -->
<section class="wp-block-group yr-sec yr-sec--mist"><!-- wp:group {"className":"yr-splits","layout":{"type":"default"}} -->
<div class="wp-block-group yr-splits"><!-- wp:group {"className":"yr-split sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_rooms_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_rooms_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-split sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_rooms_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_rooms_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-split sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_rooms_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_rooms_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
