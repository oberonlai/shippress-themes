<?php
/**
 * Title: Home: three text-only journal rows
 * Slug: tabidachi-tours/journal-list
 * Categories: tabidachi-tours
 * Viewport Width: 1440
 * Description: Three ruled rows with date, category and tag chips, a serif title and an arrow.
 */
?>
<!-- wp:group {"className":"tt-sec tt-journal","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull tt-sec tt-journal"><!-- wp:group {"className":"tt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tt-wrap"><!-- wp:group {"className":"tt-shead","layout":{"type":"default"}} -->
<div class="wp-block-group tt-shead"><!-- wp:heading {"level":2,"className":"tt-shead__t"} -->
<h2 class="wp-block-heading tt-shead__t"><?php echo wp_kses_post( tabidachi_tours_t( 'ka4bef22b' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"tt-btns"} -->
<div class="wp-block-buttons tt-btns"><!-- wp:button {"className":"tt-blackpill tt-blackpill--sm"} -->
<div class="wp-block-button tt-blackpill tt-blackpill--sm"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo wp_kses_post( tabidachi_tours_t( 'k6b59eea1' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-jrows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group tt-jrows sp-stagger"><!-- wp:group {"className":"tt-jrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tt-jrow sp-reveal sp-reveal--up"><!-- wp:html -->
<?php echo wp_kses_post( tabidachi_tours_t( 'k46b17f20' ) ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --><!-- wp:group {"className":"tt-jrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tt-jrow sp-reveal sp-reveal--up"><!-- wp:html -->
<?php echo wp_kses_post( tabidachi_tours_t( 'k2c14cd63' ) ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --><!-- wp:group {"className":"tt-jrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tt-jrow sp-reveal sp-reveal--up"><!-- wp:html -->
<?php echo wp_kses_post( tabidachi_tours_t( 'k9061e102' ) ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
