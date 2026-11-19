<?php
/**
 * Title: Page: Calendar
 * Slug: yuzuriha-retreat/page-calendar
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Opener, four square retreat cards and three notes on the dates.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-opener sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group yr-opener sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-opener__img"} -->
<figure class="wp-block-image size-full yr-opener__img"><img src="<?php echo yuzuriha_retreat_img( 'p14-larch-ridge.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yr-opener__text","layout":{"type":"default"}} -->
<div class="wp-block-group yr-opener__text"><!-- wp:html -->
<div class="yr-glow" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-kicker"} -->
<p class="yr-kicker"><?php echo esc_html( yuzuriha_retreat_t( 'p_calendar_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yr-opener__h"} -->
<h1 class="wp-block-heading yr-opener__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_calendar_t' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--stone yr-sec--calendar","layout":{"type":"default"}} -->
<section class="wp-block-group yr-sec yr-sec--stone yr-sec--calendar"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'cal_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-intro yr-intro--wide"} -->
<p class="yr-intro yr-intro--wide"><?php echo esc_html( yuzuriha_retreat_t( 'p_calendar_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yr-cards sp-stagger"><!-- wp:group {"className":"yr-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yr-card__head"} -->
<p class="yr-card__head"><span class="yr-card__name"><?php echo esc_html( yuzuriha_retreat_t( 'card1_name' ) ); ?></span><i class="yr-card__tick" aria-hidden="true"></i><span class="yr-card__label"><?php echo esc_html( yuzuriha_retreat_t( 'card1_label' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>","className":"yr-card__img"} -->
<figure class="wp-block-image size-full yr-card__img"><a href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>"><img src="<?php echo yuzuriha_retreat_img( 'p06-mats-at-dawn.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p06' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="yr-circ" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" aria-label="<?php echo yuzuriha_retreat_a( 'card1_name' ); ?>"><?php echo yuzuriha_retreat_icon( 'circle', 'yr-circ__svg' ); ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="yr-dots" aria-hidden="true"><span></span><span></span><span></span><span></span><a class="yr-dots__go" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" tabindex="-1"><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></a></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-tags"} -->
<p class="yr-tags"><?php echo esc_html( yuzuriha_retreat_t( 'card1_t1' ) ); ?>&nbsp; <?php echo esc_html( yuzuriha_retreat_t( 'card1_t2' ) ); ?>&nbsp; <?php echo esc_html( yuzuriha_retreat_t( 'tag_12' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-card__dates"} -->
<p class="yr-card__dates"><?php echo esc_html( yuzuriha_retreat_t( 'card1_dates' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-card__price"} -->
<p class="yr-card__price"><?php echo esc_html( yuzuriha_retreat_t( 'card1_price' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yr-card__head"} -->
<p class="yr-card__head"><span class="yr-card__name"><?php echo esc_html( yuzuriha_retreat_t( 'card2_name' ) ); ?></span><i class="yr-card__tick" aria-hidden="true"></i><span class="yr-card__label"><?php echo esc_html( yuzuriha_retreat_t( 'card2_label' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>","className":"yr-card__img"} -->
<figure class="wp-block-image size-full yr-card__img"><a href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>"><img src="<?php echo yuzuriha_retreat_img( 'p07-footbridge.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p07' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="yr-circ" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" aria-label="<?php echo yuzuriha_retreat_a( 'card2_name' ); ?>"><?php echo yuzuriha_retreat_icon( 'circle', 'yr-circ__svg' ); ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="yr-dots" aria-hidden="true"><span></span><span></span><span></span><span></span><a class="yr-dots__go" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" tabindex="-1"><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></a></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-tags"} -->
<p class="yr-tags"><?php echo esc_html( yuzuriha_retreat_t( 'card2_t1' ) ); ?>&nbsp; <?php echo esc_html( yuzuriha_retreat_t( 'card2_t2' ) ); ?>&nbsp; <?php echo esc_html( yuzuriha_retreat_t( 'tag_12' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-card__dates"} -->
<p class="yr-card__dates"><?php echo esc_html( yuzuriha_retreat_t( 'card2_dates' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-card__price"} -->
<p class="yr-card__price"><?php echo esc_html( yuzuriha_retreat_t( 'card2_price' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yr-card__head"} -->
<p class="yr-card__head"><span class="yr-card__name"><?php echo esc_html( yuzuriha_retreat_t( 'card3_name' ) ); ?></span><i class="yr-card__tick" aria-hidden="true"></i><span class="yr-card__label"><?php echo esc_html( yuzuriha_retreat_t( 'card3_label' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>","className":"yr-card__img"} -->
<figure class="wp-block-image size-full yr-card__img"><a href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>"><img src="<?php echo yuzuriha_retreat_img( 'p08-single-room.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p08' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="yr-circ" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" aria-label="<?php echo yuzuriha_retreat_a( 'card3_name' ); ?>"><?php echo yuzuriha_retreat_icon( 'circle', 'yr-circ__svg' ); ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="yr-dots" aria-hidden="true"><span></span><span></span><span></span><span></span><a class="yr-dots__go" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" tabindex="-1"><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></a></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-tags"} -->
<p class="yr-tags"><?php echo esc_html( yuzuriha_retreat_t( 'card3_t1' ) ); ?>&nbsp; <?php echo esc_html( yuzuriha_retreat_t( 'card3_t2' ) ); ?>&nbsp; <?php echo esc_html( yuzuriha_retreat_t( 'tag_12' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-card__dates"} -->
<p class="yr-card__dates"><?php echo esc_html( yuzuriha_retreat_t( 'card3_dates' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-card__price"} -->
<p class="yr-card__price"><?php echo esc_html( yuzuriha_retreat_t( 'card3_price' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yr-card__head"} -->
<p class="yr-card__head"><span class="yr-card__name"><?php echo esc_html( yuzuriha_retreat_t( 'card4_name' ) ); ?></span><i class="yr-card__tick" aria-hidden="true"></i><span class="yr-card__label"><?php echo esc_html( yuzuriha_retreat_t( 'card4_label' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>","className":"yr-card__img"} -->
<figure class="wp-block-image size-full yr-card__img"><a href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>"><img src="<?php echo yuzuriha_retreat_img( 'p16-ridge-walkers.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p16' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="yr-circ" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" aria-label="<?php echo yuzuriha_retreat_a( 'card4_name' ); ?>"><?php echo yuzuriha_retreat_icon( 'circle', 'yr-circ__svg' ); ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="yr-dots" aria-hidden="true"><span></span><span></span><span></span><span></span><a class="yr-dots__go" href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>" tabindex="-1"><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></a></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-tags"} -->
<p class="yr-tags"><?php echo esc_html( yuzuriha_retreat_t( 'card4_t1' ) ); ?>&nbsp; <?php echo esc_html( yuzuriha_retreat_t( 'card4_t2' ) ); ?>&nbsp; <?php echo esc_html( yuzuriha_retreat_t( 'tag_12' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-card__dates"} -->
<p class="yr-card__dates"><?php echo esc_html( yuzuriha_retreat_t( 'card4_dates' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-card__price"} -->
<p class="yr-card__price"><?php echo esc_html( yuzuriha_retreat_t( 'card4_price' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--mist","layout":{"type":"default"}} -->
<section class="wp-block-group yr-sec yr-sec--mist"><!-- wp:group {"className":"yr-splits","layout":{"type":"default"}} -->
<div class="wp-block-group yr-splits"><!-- wp:group {"className":"yr-split sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_calendar_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_calendar_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-split sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_calendar_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_calendar_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-split sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_calendar_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_calendar_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yr-more yr-more--left"} -->
<p class="yr-more yr-more--left"><a href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'cal_res' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
