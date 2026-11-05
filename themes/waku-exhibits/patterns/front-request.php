<?php
/**
 * Title: Request band: two white cards on a photo
 * Slug: waku-exhibits/front-request
 * Categories: waku-exhibits
 * Keywords: exhibition, stand, quote, landing
 * Viewport Width: 1440
 * Description: Full-bleed evening-hall photo with two flat white cards: the single quote request and the early-access list.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p11-evening.webp' ) ); ?>","alt":"<?php echo esc_attr( wk_t( 'alt_p11' ) ); ?>","dimRatio":30,"overlayColor":"ink","isDark":true,"align":"full","className":"wk-request","anchor":"request"} -->
<div id="request" class="wp-block-cover alignfull wk-request"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( wk_t( 'alt_p11' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p11-evening.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"wk-cards","layout":{"type":"default"}} -->
<div class="wp-block-group wk-cards"><!-- wp:group {"className":"wk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-card sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"wk-card__h"} -->
<h2 class="wp-block-heading wk-card__h"><?php echo esc_html( wk_t( 'cardA_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-card__p"} -->
<p class="wk-card__p"><span class="wk-cta__dot" aria-hidden="true">•</span> <a class="wk-card__link" href="/contact/#request"><?php echo esc_html( wk_t( 'cardA_l' ) ); ?></a> <?php echo esc_html( wk_t( 'cardA_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-card sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"wk-card__h"} -->
<h2 class="wp-block-heading wk-card__h"><?php echo esc_html( wk_t( 'cardB_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-card__p"} -->
<p class="wk-card__p"><a class="wk-card__link" href="/newsletter/"><?php echo esc_html( wk_t( 'cardB_l' ) ); ?></a> <?php echo esc_html( wk_t( 'cardB_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
