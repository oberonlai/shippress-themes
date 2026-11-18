<?php
/**
 * Title: Kit: inset photo and six-cell table
 * Slug: sanroku-trail/kit
 * Categories: sanroku-trail
 * Viewport Width: 1440
 * Description: Inset 1.8:1 photo with a vertical caption, a split of big title and 43% body, then six equal hairline cells for the mandatory kit.
 */
?>
<!-- wp:group {"tagName":"section","className":"st-sec st-kit","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-kit"><!-- wp:group {"className":"st-frame","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame"><!-- wp:group {"className":"st-inset sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group st-inset sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"st-inset__img"} -->
<figure class="wp-block-image size-full st-inset__img"><img src="<?php echo sanroku_trail_img( 'p07-aid-table.webp' ); ?>" alt="<?php echo sanroku_trail_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"st-inset__cap"} -->
<p class="st-inset__cap"><?php echo esc_html( sanroku_trail_t( 'kit_cap_a' ) ); ?><br><?php echo esc_html( sanroku_trail_t( 'kit_cap_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-inset__arrow"} -->
<p class="st-inset__arrow"><svg class="st-arrow" viewBox="0 0 80 12" width="80" height="12" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true" focusable="false"><path d="M0 6h79M74 1l5 5-5 5"/></svg></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-kit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group st-kit__grid"><!-- wp:group {"className":"st-kit__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group st-kit__l sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"st-h2 st-h2--xl"} -->
<h2 class="wp-block-heading st-h2 st-h2--xl"><?php echo esc_html( sanroku_trail_t( 'kit_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-kit__sub"} -->
<p class="st-kit__sub"><?php echo sanroku_trail_lines( 'kit_sub' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-kit__r","layout":{"type":"default"}} -->
<div class="wp-block-group st-kit__r"><!-- wp:group {"className":"sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"st-kit__p"} -->
<p class="st-kit__p"><?php echo esc_html( sanroku_trail_t( 'kit_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-cells","layout":{"type":"default"}} -->
<div class="wp-block-group st-cells"><!-- wp:paragraph {"className":"st-cell"} -->
<p class="st-cell"><span class="st-cell__l"><?php echo esc_html( sanroku_trail_t( 'kit_1_l' ) ); ?></span><span class="st-cell__n"><?php echo esc_html( sanroku_trail_t( 'kit_1_n' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-cell"} -->
<p class="st-cell"><span class="st-cell__l"><?php echo esc_html( sanroku_trail_t( 'kit_2_l' ) ); ?></span><span class="st-cell__n"><?php echo esc_html( sanroku_trail_t( 'kit_2_n' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-cell"} -->
<p class="st-cell"><span class="st-cell__l"><?php echo esc_html( sanroku_trail_t( 'kit_3_l' ) ); ?></span><span class="st-cell__n"><?php echo esc_html( sanroku_trail_t( 'kit_3_n' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-cell"} -->
<p class="st-cell"><span class="st-cell__l"><?php echo esc_html( sanroku_trail_t( 'kit_4_l' ) ); ?></span><span class="st-cell__n"><?php echo esc_html( sanroku_trail_t( 'kit_4_n' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-cell"} -->
<p class="st-cell"><span class="st-cell__l"><?php echo esc_html( sanroku_trail_t( 'kit_5_l' ) ); ?></span><span class="st-cell__n"><?php echo esc_html( sanroku_trail_t( 'kit_5_n' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-cell"} -->
<p class="st-cell"><span class="st-cell__l"><?php echo esc_html( sanroku_trail_t( 'kit_6_l' ) ); ?></span><span class="st-cell__n"><?php echo esc_html( sanroku_trail_t( 'kit_6_n' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
