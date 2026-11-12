<?php
/**
 * Title: Home: churned today viewer
 * Slug: himuro-gelato/front-viewer
 * Categories: himuro-gelato
 * Viewport Width: 1440
 * Description: Pinned flavour viewer: a left index with an active dot, two stacked thumbnails, a tall main photograph and a text column with a bordered spec box, a five-dot sweetness meter and a filled button.
 */
?>
<!-- wp:group {"className":"hg-viewer hg-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-viewer hg-sec"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:paragraph {"className":"hg-label"} -->
<p class="hg-label"><?php echo esc_html( himuro_gelato_t( 'vw_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-viewer__lede"} -->
<p class="hg-viewer__lede"><?php echo esc_html( himuro_gelato_t( 'vw_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-viewer__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hg-viewer__grid"><!-- wp:group {"className":"hg-idx","layout":{"type":"default"}} -->
<div class="wp-block-group hg-idx"><!-- wp:paragraph {"className":"hg-idx__i is-active"} -->
<p class="hg-idx__i is-active"><?php echo esc_html( himuro_gelato_t( 'fl_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-idx__i"} -->
<p class="hg-idx__i"><?php echo esc_html( himuro_gelato_t( 'fl_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-idx__i"} -->
<p class="hg-idx__i"><?php echo esc_html( himuro_gelato_t( 'fl_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-idx__i"} -->
<p class="hg-idx__i"><?php echo esc_html( himuro_gelato_t( 'fl_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-idx__i"} -->
<p class="hg-idx__i"><?php echo esc_html( himuro_gelato_t( 'fl_5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-idx__i"} -->
<p class="hg-idx__i"><?php echo esc_html( himuro_gelato_t( 'fl_6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-thumbs sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hg-thumbs sp-stagger"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-thumb sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full hg-thumb sp-reveal sp-reveal--up"><img src="<?php echo himuro_gelato_img( 'v1' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_v1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-thumb sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full hg-thumb sp-reveal sp-reveal--up"><img src="<?php echo himuro_gelato_img( 'v2' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_v2' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-main sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full hg-main sp-reveal sp-reveal--mask"><img src="<?php echo himuro_gelato_img( 'v3' ); ?>" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_v3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hg-viewer__text","layout":{"type":"default"}} -->
<div class="wp-block-group hg-viewer__text"><!-- wp:heading {"level":3,"className":"hg-viewer__name"} -->
<h3 class="wp-block-heading hg-viewer__name"><?php echo esc_html( himuro_gelato_t( 'vw_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-viewer__sub"} -->
<p class="hg-viewer__sub"><?php echo esc_html( himuro_gelato_t( 'vw_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-viewer__price"} -->
<p class="hg-viewer__price"><?php echo esc_html( himuro_gelato_t( 'vw_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec"><!-- wp:paragraph {"className":"hg-spec__text"} -->
<p class="hg-spec__text"><?php echo esc_html( himuro_gelato_t( 'vw_spec' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-spec__cells","layout":{"type":"default"}} -->
<div class="wp-block-group hg-spec__cells"><!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_sweet' ) ); ?><br><span class="hg-meter"><span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_low' ) ); ?></span> <span class="hg-dots" aria-hidden="true">●●●○○</span> <span class="hg-dim"><?php echo esc_html( himuro_gelato_t( 'vw_high' ) ); ?></span></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-spec__cell"} -->
<p class="hg-spec__cell"><?php echo esc_html( himuro_gelato_t( 'vw_texture' ) ); ?> · <?php echo esc_html( himuro_gelato_t( 'vw_dense' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hg-btn"} -->
<div class="wp-block-button hg-btn"><a class="wp-block-button__link wp-element-button" href="/tubs/"><?php echo esc_html( himuro_gelato_t( 'vw_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"hg-counter"} -->
<p class="hg-counter"><span>1 — 6</span><span class="hg-counter__bar" aria-hidden="true"><i></i></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
