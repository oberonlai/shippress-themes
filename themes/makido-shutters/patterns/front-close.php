<?php
/**
 * Title: Home: one way to ask
 * Slug: makido-shutters/front-close
 * Categories: makido-shutters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Closing lens band: heading, one line, the Book a site measure pill and the phone line.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"ask","align":"full","className":"mk-lens mk-lens--close","layout":{"type":"default"}} -->
<section id="ask" class="wp-block-group alignfull mk-lens mk-lens--close">
<!-- wp:group {"className":"mk-lens__in","layout":{"type":"default"}} -->
<div class="wp-block-group mk-lens__in">
<!-- wp:heading {"level":2,"textAlign":"center","className":"mk-h2 mk-h2--light"} -->
<h2 class="wp-block-heading has-text-align-center mk-h2 mk-h2--light"><?php echo esc_html( makido_shutters_t( 'cl_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mk-lens__p mk-lens__p--c"} -->
<p class="mk-lens__p mk-lens__p--c"><?php echo esc_html( makido_shutters_t( 'cl_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"mk-cta"} -->
<div class="wp-block-buttons mk-cta"><!-- wp:button {"className":"mk-pill"} -->
<div class="wp-block-button mk-pill"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( makido_shutters_t( 'cta_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:html -->
<p class="mk-close__tel"><?php echo esc_html( makido_shutters_t( 'cl_tel' ) ); ?> <a href="tel:+0214801948"><?php echo esc_html( makido_shutters_t( 'hd_phone' ) ); ?></a> · <a href="mailto:quotes@makido-shutters.example">quotes@makido-shutters.example</a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
