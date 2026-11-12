<?php
/**
 * Title: Home: closing bench card
 * Slug: gaku-frames/front-close
 * Categories: gaku-frames
 * Keywords: cta, booking, card, hours
 * Viewport Width: 1440
 * Description: Hours and address on the left, a large dark bench card with a drawn mitre corner on the right.
 */
?>
<!-- wp:group {"align":"full","className":"gk-sec gk-mitre-field gk-close","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull gk-sec gk-mitre-field gk-close"><!-- wp:group {"className":"gk-close__info","layout":{"type":"default"}} -->
<div class="wp-block-group gk-close__info"><!-- wp:paragraph {"className":"gk-kicker"} -->
<p class="gk-kicker"><?php echo wp_kses_post( gaku_frames_t( 'k3b45b858' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gk-close__addr"} -->
<p class="gk-close__addr"><?php echo wp_kses_post( gaku_frames_t( 'k98cfe165' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-bench-card gk-bench-card--lg","layout":{"type":"default"}} -->
<div class="wp-block-group gk-bench-card gk-bench-card--lg"><!-- wp:html -->
<svg class="gk-bench-card__corner" viewBox="0 0 191 191" role="img" aria-label="A walnut mitre corner: two strips joined at 45 degrees" focusable="false"><polygon points="12,12 179,12 146,45 45,45 45,146 12,179" fill="#6B5F53"/><polygon points="179,12 179,179 146,146 146,45" fill="#544A40"/><polygon points="12,179 45,146 146,146 179,179" fill="#4A4139"/><polygon points="12,12 45,45 45,146 12,179" fill="#5E5348"/><line x1="12" y1="12" x2="45" y2="45" stroke="#202220" stroke-width="1"/><line x1="179" y1="12" x2="146" y2="45" stroke="#202220" stroke-width="1"/><line x1="12" y1="179" x2="45" y2="146" stroke="#202220" stroke-width="1"/><line x1="179" y1="179" x2="146" y2="146" stroke="#202220" stroke-width="1"/></svg>
<!-- /wp:html -->

<!-- wp:group {"className":"gk-bench-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group gk-bench-card__text"><!-- wp:paragraph {"className":"gk-bench-card__label"} -->
<p class="gk-bench-card__label"><?php echo wp_kses_post( gaku_frames_t( 'k4ed6e448' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"gk-bench-card__title"} -->
<h2 class="wp-block-heading gk-bench-card__title"><?php echo wp_kses_post( gaku_frames_t( 'kdaab4600' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gk-bench-card__hl"} -->
<p class="gk-bench-card__hl"><?php echo wp_kses_post( gaku_frames_t( 'k9f693e04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"gk-btns"} -->
<div class="wp-block-buttons gk-btns"><!-- wp:button {"className":"gk-btn"} -->
<div class="wp-block-button gk-btn"><a class="wp-block-button__link wp-element-button" href="/book/"><?php echo wp_kses_post( gaku_frames_t( 'k905dd8d3' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
