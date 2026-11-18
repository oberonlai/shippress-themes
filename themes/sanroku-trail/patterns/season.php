<?php
/**
 * Title: Season strip
 * Slug: sanroku-trail/season
 * Categories: sanroku-trail
 * Viewport Width: 1440
 * Description: Horizontal scroll-snap strip with the four races of the season: month numeral, name, three specs and a sentence.
 */
?>
<!-- wp:group {"tagName":"section","className":"st-sec st-season","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-season"><!-- wp:group {"className":"st-frame","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame"><!-- wp:heading {"level":2,"className":"st-h2"} -->
<h2 class="wp-block-heading st-h2"><?php echo esc_html( sanroku_trail_t( 'season_h2' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-strip-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-strip-wrap sp-reveal sp-reveal--up"><!-- wp:group {"className":"st-strip","layout":{"type":"default"}} -->
<div class="wp-block-group st-strip"><!-- wp:group {"anchor":"snowmelt-21","className":"st-card","layout":{"type":"default"}} -->
<div id="snowmelt-21" class="wp-block-group st-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"st-card__img"} -->
<figure class="wp-block-image size-full st-card__img"><img src="<?php echo sanroku_trail_img( 'p03-snowmelt.webp' ); ?>" alt="<?php echo sanroku_trail_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"st-card__m"} -->
<p class="st-card__m"><?php echo esc_html( sanroku_trail_t( 'card_1_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"st-card__t"} -->
<h3 class="wp-block-heading st-card__t"><a href="<?php echo esc_url( home_url( '/races/#snowmelt-21' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'card_1_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-card__s"} -->
<p class="st-card__s"><?php echo esc_html( sanroku_trail_t( 'card_1_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-card__p"} -->
<p class="st-card__p"><?php echo esc_html( sanroku_trail_t( 'card_1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"beech-line-32","className":"st-card","layout":{"type":"default"}} -->
<div id="beech-line-32" class="wp-block-group st-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"st-card__img"} -->
<figure class="wp-block-image size-full st-card__img"><img src="<?php echo sanroku_trail_img( 'p04-beech-line.webp' ); ?>" alt="<?php echo sanroku_trail_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"st-card__m"} -->
<p class="st-card__m"><?php echo esc_html( sanroku_trail_t( 'card_2_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"st-card__t"} -->
<h3 class="wp-block-heading st-card__t"><a href="<?php echo esc_url( home_url( '/races/#beech-line-32' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'card_2_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-card__s"} -->
<p class="st-card__s"><?php echo esc_html( sanroku_trail_t( 'card_2_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-card__p"} -->
<p class="st-card__p"><?php echo esc_html( sanroku_trail_t( 'card_2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"gorge-45","className":"st-card","layout":{"type":"default"}} -->
<div id="gorge-45" class="wp-block-group st-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"st-card__img"} -->
<figure class="wp-block-image size-full st-card__img"><img src="<?php echo sanroku_trail_img( 'p05-gorge-ford.webp' ); ?>" alt="<?php echo sanroku_trail_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"st-card__m"} -->
<p class="st-card__m"><?php echo esc_html( sanroku_trail_t( 'card_3_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"st-card__t"} -->
<h3 class="wp-block-heading st-card__t"><a href="<?php echo esc_url( home_url( '/races/#gorge-45' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'card_3_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-card__s"} -->
<p class="st-card__s"><?php echo esc_html( sanroku_trail_t( 'card_3_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-card__p"} -->
<p class="st-card__p"><?php echo esc_html( sanroku_trail_t( 'card_3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"autumn-ridge-60","className":"st-card","layout":{"type":"default"}} -->
<div id="autumn-ridge-60" class="wp-block-group st-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"st-card__img"} -->
<figure class="wp-block-image size-full st-card__img"><img src="<?php echo sanroku_trail_img( 'p06-autumn-ridge.webp' ); ?>" alt="<?php echo sanroku_trail_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"st-card__m"} -->
<p class="st-card__m"><?php echo esc_html( sanroku_trail_t( 'card_4_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"st-card__t"} -->
<h3 class="wp-block-heading st-card__t"><a href="<?php echo esc_url( home_url( '/races/#autumn-ridge-60' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'card_4_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-card__s"} -->
<p class="st-card__s"><?php echo esc_html( sanroku_trail_t( 'card_4_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-card__p"} -->
<p class="st-card__p"><?php echo esc_html( sanroku_trail_t( 'card_4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"st-strip__hint"} -->
<p class="st-strip__hint"><span><?php echo esc_html( sanroku_trail_t( 'season_hint' ) ); ?></span><svg class="st-arrow" viewBox="0 0 80 12" width="80" height="12" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true" focusable="false"><path d="M0 6h79M74 1l5 5-5 5"/></svg></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
