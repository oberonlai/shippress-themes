<?php
/**
 * Title: Template: not found
 * Slug: makido-shutters/tpl-404
 * Categories: makido-shutters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Not found page with a lens head and a way back home.
 */
?>
<!-- wp:group {"align":"full","className":"mk-lens mk-lens--head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mk-lens mk-lens--head">
<!-- wp:group {"className":"mk-lens__in","layout":{"type":"default"}} -->
<div class="wp-block-group mk-lens__in">
<!-- wp:heading {"level":1,"textAlign":"center","className":"mk-h1"} -->
<h1 class="wp-block-heading has-text-align-center mk-h1"><?php echo esc_html( makido_shutters_t( 'e404_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mk-lens__p mk-lens__p--c"} -->
<p class="mk-lens__p mk-lens__p--c"><?php echo esc_html( makido_shutters_t( 'e404_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mk-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mk-sec">
<!-- wp:group {"className":"mk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mk-wrap">
<!-- wp:buttons {"className":"mk-cta"} -->
<div class="wp-block-buttons mk-cta"><!-- wp:button {"className":"mk-pill mk-pill--line"} -->
<div class="wp-block-button mk-pill mk-pill--line"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( makido_shutters_t( 'e404_b' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
