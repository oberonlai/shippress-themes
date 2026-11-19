<?php
/**
 * Title: Home: three square calendar cards
 * Slug: yuzuriha-retreat/front-calendar
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Parenthesised label, heading, intro, then three 1:1 photo cards with name and tick above, an outline-circle chevron on the photo, four pager dots, hashtag labels, dates and price.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--stone yr-sec--calendar","layout":{"type":"default"},"anchor":"calendar"} -->
<section id="calendar" class="wp-block-group yr-sec yr-sec--stone yr-sec--calendar"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'cal_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yr-h2"} -->
<h2 class="wp-block-heading yr-h2"><?php echo esc_html( yuzuriha_retreat_t( 'cal_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-intro"} -->
<p class="yr-intro"><?php echo esc_html( yuzuriha_retreat_t( 'cal_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yr-cards sp-stagger"><!-- wp:group {"className":"yr-card sp-reveal sp-reveal--up","layout":{"type":"default"},"anchor":"first-light"} -->
<div id="first-light" class="wp-block-group yr-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yr-card__head"} -->
<p class="yr-card__head"><span class="yr-card__name"><?php echo esc_html( yuzuriha_retreat_t( 'card1_name' ) ); ?></span><i class="yr-card__tick" aria-hidden="true"></i><span class="yr-card__label"><?php echo esc_html( yuzuriha_retreat_t( 'card1_label' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"<?php echo yuzuriha_retreat_url( '/calendar/#first-light' ); ?>","className":"yr-card__img"} -->
<figure class="wp-block-image size-full yr-card__img"><a href="<?php echo yuzuriha_retreat_url( '/calendar/#first-light' ); ?>"><img src="<?php echo yuzuriha_retreat_img( 'p06-mats-at-dawn.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p06' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="yr-circ" href="<?php echo yuzuriha_retreat_url( '/calendar/#first-light' ); ?>" aria-label="<?php echo yuzuriha_retreat_a( 'card1_name' ); ?>"><?php echo yuzuriha_retreat_icon( 'circle', 'yr-circ__svg' ); ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="yr-dots" aria-hidden="true"><span></span><span></span><span></span><span></span><a class="yr-dots__go" href="<?php echo yuzuriha_retreat_url( '/calendar/#first-light' ); ?>" tabindex="-1"><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></a></p>
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

<!-- wp:group {"className":"yr-card sp-reveal sp-reveal--up","layout":{"type":"default"},"anchor":"forest"} -->
<div id="forest" class="wp-block-group yr-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yr-card__head"} -->
<p class="yr-card__head"><span class="yr-card__name"><?php echo esc_html( yuzuriha_retreat_t( 'card2_name' ) ); ?></span><i class="yr-card__tick" aria-hidden="true"></i><span class="yr-card__label"><?php echo esc_html( yuzuriha_retreat_t( 'card2_label' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"<?php echo yuzuriha_retreat_url( '/calendar/#forest' ); ?>","className":"yr-card__img"} -->
<figure class="wp-block-image size-full yr-card__img"><a href="<?php echo yuzuriha_retreat_url( '/calendar/#forest' ); ?>"><img src="<?php echo yuzuriha_retreat_img( 'p07-footbridge.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p07' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="yr-circ" href="<?php echo yuzuriha_retreat_url( '/calendar/#forest' ); ?>" aria-label="<?php echo yuzuriha_retreat_a( 'card2_name' ); ?>"><?php echo yuzuriha_retreat_icon( 'circle', 'yr-circ__svg' ); ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="yr-dots" aria-hidden="true"><span></span><span></span><span></span><span></span><a class="yr-dots__go" href="<?php echo yuzuriha_retreat_url( '/calendar/#forest' ); ?>" tabindex="-1"><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></a></p>
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

<!-- wp:group {"className":"yr-card sp-reveal sp-reveal--up","layout":{"type":"default"},"anchor":"quiet"} -->
<div id="quiet" class="wp-block-group yr-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yr-card__head"} -->
<p class="yr-card__head"><span class="yr-card__name"><?php echo esc_html( yuzuriha_retreat_t( 'card3_name' ) ); ?></span><i class="yr-card__tick" aria-hidden="true"></i><span class="yr-card__label"><?php echo esc_html( yuzuriha_retreat_t( 'card3_label' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group yr-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"<?php echo yuzuriha_retreat_url( '/calendar/#quiet' ); ?>","className":"yr-card__img"} -->
<figure class="wp-block-image size-full yr-card__img"><a href="<?php echo yuzuriha_retreat_url( '/calendar/#quiet' ); ?>"><img src="<?php echo yuzuriha_retreat_img( 'p08-single-room.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p08' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="yr-circ" href="<?php echo yuzuriha_retreat_url( '/calendar/#quiet' ); ?>" aria-label="<?php echo yuzuriha_retreat_a( 'card3_name' ); ?>"><?php echo yuzuriha_retreat_icon( 'circle', 'yr-circ__svg' ); ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="yr-dots" aria-hidden="true"><span></span><span></span><span></span><span></span><a class="yr-dots__go" href="<?php echo yuzuriha_retreat_url( '/calendar/#quiet' ); ?>" tabindex="-1"><?php echo yuzuriha_retreat_icon( 'chev', 'yr-chev-i' ); ?></a></p>
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
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yr-outline"} -->
<p class="yr-outline"><a href="<?php echo yuzuriha_retreat_url( '/calendar/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'cal_all' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
