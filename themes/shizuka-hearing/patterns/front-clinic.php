<?php
/**
 * Title: The clinic: wipe figure pair
 * Slug: shizuka-hearing/front-clinic
 * Categories: shizuka-hearing
 * Viewport Width: 1440
 * Description: Clip-wipe clinic figure with an overlapping second figure, the founding story and three facts.
 */
?>
<!-- wp:group {"align":"full","className":"sh-clinic","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-clinic">
<!-- wp:group {"className":"sh-head","layout":{"type":"default"}} -->
<div class="wp-block-group sh-head"><!-- wp:paragraph {"className":"sh-eyebrow"} -->
<p class="sh-eyebrow"><?php echo wp_kses_post( shizuka_hearing_t( 'kedf86a00' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-sub"} -->
<p class="sh-sub"><?php echo wp_kses_post( shizuka_hearing_t( 'kf8f20728' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-clinic__row sh-inner","layout":{"type":"default"}} -->
<div class="wp-block-group sh-clinic__row sh-inner"><!-- wp:group {"className":"sh-clinic__figs","layout":{"type":"default"}} -->
<div class="wp-block-group sh-clinic__figs"><!-- wp:group {"className":"sh-clinic__wipe sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group sh-clinic__wipe sp-reveal sp-reveal--wipe"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sh-clinic__big"} -->
<figure class="wp-block-image size-full sh-clinic__big"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h07.webp' ) ); ?>" alt="<?php echo esc_attr( shizuka_hearing_alts()['h07'] ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sh-clinic__small"} -->
<figure class="wp-block-image size-full sh-clinic__small"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h09.webp' ) ); ?>" alt="<?php echo esc_attr( shizuka_hearing_alts()['h09'] ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-clinic__text","layout":{"type":"default"}} -->
<div class="wp-block-group sh-clinic__text"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuka_hearing_t( 'k4272078b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sh-facts sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sh-facts sp-stagger">
<!-- wp:group {"className":"sh-fact","layout":{"type":"default"}} -->
<div class="wp-block-group sh-fact"><!-- wp:paragraph {"className":"sh-fact__num sp-reveal sp-count"} -->
<p class="sh-fact__num sp-reveal sp-count">2014</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-fact__label"} -->
<p class="sh-fact__label"><?php echo wp_kses_post( shizuka_hearing_t( 'k1b17a5a6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-fact","layout":{"type":"default"}} -->
<div class="wp-block-group sh-fact"><!-- wp:paragraph {"className":"sh-fact__num sp-reveal sp-count"} -->
<p class="sh-fact__num sp-reveal sp-count">3</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-fact__label"} -->
<p class="sh-fact__label"><?php echo wp_kses_post( shizuka_hearing_t( 'kcfc76be3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-fact","layout":{"type":"default"}} -->
<div class="wp-block-group sh-fact"><!-- wp:paragraph {"className":"sh-fact__num sp-reveal sp-count"} -->
<p class="sh-fact__num sp-reveal sp-count">45</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-fact__label"} -->
<p class="sh-fact__label"><?php echo wp_kses_post( shizuka_hearing_t( 'kcc59c768' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
