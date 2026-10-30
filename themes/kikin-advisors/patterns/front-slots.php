<?php
/**
 * Title: Home: open slots
 * Slug: kikin-advisors/front-slots
 * Categories: kikin-advisors
 * Keywords: pension, adviser, employer briefing
 * Viewport Width: 1440
 * Description: Notched hairline panel with three round-thumb slot cards and the pill sitting on the bottom border.
 */
?>
<!-- wp:group {"align":"full","className":"kk-sec kk-slots","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kk-sec kk-slots"><!-- wp:group {"align":"wide","className":"kk-panel","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kk-panel"><?php echo kikin_advisors_chip( 'calendar' ); ?>

<!-- wp:heading {"className":"kk-panel__title"} -->
<h2 class="wp-block-heading kk-panel__title"><?php echo esc_html( kikin_advisors_t( 'slots_title' ) ); ?><small><?php echo esc_html( kikin_advisors_t( 'slots_sub' ) ); ?></small></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kk-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kk-cards sp-stagger"><!-- wp:group {"className":"kk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kk-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":800,"height":800,"className":"kk-thumb"} -->
<figure class="wp-block-image size-full kk-thumb"><img src="<?php echo kikin_advisors_img( 'k03.webp' ); ?>" alt="<?php echo esc_attr( kikin_advisors_t( 'alt_k03' ) ); ?>" width="800" height="800"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kk-card__label"} -->
<p class="kk-card__label"><?php echo esc_html( kikin_advisors_t( 'slot_1_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kk-card__title"} -->
<h3 class="wp-block-heading kk-card__title"><?php echo esc_html( kikin_advisors_t( 'slot_1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kk-card__desc"} -->
<p class="kk-card__desc"><?php echo esc_html( kikin_advisors_t( 'slot_1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kk-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":800,"height":800,"className":"kk-thumb"} -->
<figure class="wp-block-image size-full kk-thumb"><img src="<?php echo kikin_advisors_img( 'k04.webp' ); ?>" alt="<?php echo esc_attr( kikin_advisors_t( 'alt_k04' ) ); ?>" width="800" height="800"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kk-card__label"} -->
<p class="kk-card__label"><?php echo esc_html( kikin_advisors_t( 'slot_2_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kk-card__title"} -->
<h3 class="wp-block-heading kk-card__title"><?php echo esc_html( kikin_advisors_t( 'slot_2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kk-card__desc"} -->
<p class="kk-card__desc"><?php echo esc_html( kikin_advisors_t( 'slot_2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kk-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":800,"height":800,"className":"kk-thumb"} -->
<figure class="wp-block-image size-full kk-thumb"><img src="<?php echo kikin_advisors_img( 'k05.webp' ); ?>" alt="<?php echo esc_attr( kikin_advisors_t( 'alt_k05' ) ); ?>" width="800" height="800"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kk-card__label"} -->
<p class="kk-card__label"><?php echo esc_html( kikin_advisors_t( 'slot_3_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kk-card__title"} -->
<h3 class="wp-block-heading kk-card__title"><?php echo esc_html( kikin_advisors_t( 'slot_3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kk-card__desc"} -->
<p class="kk-card__desc"><?php echo esc_html( kikin_advisors_t( 'slot_3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php echo kikin_advisors_pill( kikin_advisors_t( 'cta' ), '#request', 'kk-pill--deep', 'kk-panel__pill' ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
