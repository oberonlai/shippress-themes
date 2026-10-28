<?php
/**
 * Title: Home: the place since 2017
 * Slug: yoru-bar/front-story
 * Categories: yoru-bar
 * Keywords: bar, story, circle
 * Viewport Width: 1440
 * Description: Lifted ink-blue ground: a circular photograph with an equal tan gradient disc offset below it, a tan sub-head, a struck display word, one paragraph and a ghost-disc link.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-story","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-story"><!-- wp:group {"className":"yb-wrap yb-story__grid","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap yb-story__grid"><!-- wp:group {"className":"yb-story__fig sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-story__fig sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y6 yb-story__img"} -->
<figure class="wp-block-image size-full yb-ph yb-ph--y6 yb-story__img"><img src="<?php echo esc_url( yoru_bar_img( 'Y6' ) ); ?>" alt="<?php echo esc_attr( yoru_bar_t( 'alt_Y6' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-story__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yb-story__text sp-stagger"><!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yoru_bar_t( 'st_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large","className":"yb-struck sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yb-struck sp-reveal sp-reveal--up has-xx-large-font-size"><?php echo esc_html( yoru_bar_t( 'st_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"yb-body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-body sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( yoru_bar_t( 'st_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo yoru_bar_more( 'st_more', '/our-story/', 'sp-reveal sp-reveal--up' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
