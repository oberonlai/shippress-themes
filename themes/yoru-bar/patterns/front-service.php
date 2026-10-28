<?php
/**
 * Title: Home: who is on service
 * Slug: yoru-bar/front-service
 * Categories: yoru-bar
 * Keywords: bar, panel, rota
 * Viewport Width: 1440
 * Description: Full-viewport 50/50 panel: one full-height photograph flush left, a tan sub-head over a struck display word, two centred paragraphs, the five-night rota and a ghost-disc link.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-panel yb-panel--service","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-panel yb-panel--service"><!-- wp:group {"className":"yb-panel__photo sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group yb-panel__photo sp-reveal sp-reveal--wipe"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y2 yb-panel__img"} -->
<figure class="wp-block-image size-full yb-ph yb-ph--y2 yb-panel__img"><img src="<?php echo esc_url( yoru_bar_img( 'Y2' ) ); ?>" alt="<?php echo esc_attr( yoru_bar_t( 'alt_Y2' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-panel__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yb-panel__text sp-stagger"><!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yoru_bar_t( 'sv_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large","className":"yb-struck sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yb-struck sp-reveal sp-reveal--up has-xx-large-font-size"><?php echo esc_html( yoru_bar_t( 'sv_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"yb-body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-body sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( yoru_bar_t( 'sv_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( yoru_bar_t( 'sv_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"yb-rota"} -->
<ul class="wp-block-list yb-rota"><?php for ( $i = 1; $i <= 5; $i++ ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( yoru_bar_t( 'sv_rota' . $i ) ); ?></li>
<!-- /wp:list-item --><?php endfor; ?></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"yb-note"} -->
<p class="yb-note"><?php echo esc_html( yoru_bar_t( 'sv_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo yoru_bar_more( 'sv_more', '/on-service/', 'sp-reveal sp-reveal--up' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
