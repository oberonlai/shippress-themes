<?php
/**
 * Title: Home: what a ticket includes
 * Slug: yunagi-jazz/front-ticket
 * Categories: yunagi-jazz
 * Viewport Width: 1440
 * Description: Photograph beside six ruled lines of what every ticket includes.
 */
?>
<!-- wp:group {"className":"yj-sheet yj-sheet--ticket","layout":{"type":"default"},"tagName":"section","anchor":"ticket"} -->
<section id="ticket" class="wp-block-group yj-sheet yj-sheet--ticket">
<!-- wp:group {"className":"yj-split","layout":{"type":"default"}} -->
<div class="wp-block-group yj-split">
<!-- wp:group {"className":"yj-split__ph sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yj-split__ph sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-ph45"} -->
<figure class="wp-block-image size-full yj-ph45"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-wristband-cup.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p12' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-split__tx","layout":{"type":"default"}} -->
<div class="wp-block-group yj-split__tx">
<!-- wp:group {"className":"yj-sh","layout":{"type":"default"}} -->
<div class="wp-block-group yj-sh">
<!-- wp:heading {"level":2,"className":"yj-sh__t"} -->
<h2 class="wp-block-heading yj-sh__t"><?php echo esc_html( yunagi_jazz_t( 'tk_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yj-sh__label"} -->
<p class="yj-sh__label"><?php echo esc_html( yunagi_jazz_t( 'tk_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-lines sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yj-lines sp-stagger">
<!-- wp:paragraph {"className":"yj-line sp-reveal sp-reveal--up"} -->
<p class="yj-line sp-reveal sp-reveal--up"><?php echo esc_html( yunagi_jazz_t( 'tk_i1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-line sp-reveal sp-reveal--up"} -->
<p class="yj-line sp-reveal sp-reveal--up"><?php echo esc_html( yunagi_jazz_t( 'tk_i2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-line sp-reveal sp-reveal--up"} -->
<p class="yj-line sp-reveal sp-reveal--up"><?php echo esc_html( yunagi_jazz_t( 'tk_i3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-line sp-reveal sp-reveal--up"} -->
<p class="yj-line sp-reveal sp-reveal--up"><?php echo esc_html( yunagi_jazz_t( 'tk_i4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-line sp-reveal sp-reveal--up"} -->
<p class="yj-line sp-reveal sp-reveal--up"><?php echo esc_html( yunagi_jazz_t( 'tk_i5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-line sp-reveal sp-reveal--up"} -->
<p class="yj-line sp-reveal sp-reveal--up"><?php echo esc_html( yunagi_jazz_t( 'tk_i6' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yj-note"} -->
<p class="yj-note"><?php echo esc_html( yunagi_jazz_t( 'tk_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
