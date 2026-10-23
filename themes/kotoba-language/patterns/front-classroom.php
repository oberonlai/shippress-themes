<?php
/**
 * Title: Home: the room
 * Slug: kotoba-language/front-classroom
 * Categories: kotoba-language
 * Description: Full-bleed classroom photograph with parallax and wipe, arc-flanked pull-quote.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kl-classroom","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-classroom"><!-- wp:group {"className":"kl-band sp-parallax sp-reveal sp-reveal--wipe","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kl-band sp-parallax sp-reveal sp-reveal--wipe"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-band__img"} -->
<figure class="wp-block-image size-full kl-band__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s6.webp' ) ); ?>" alt="<?php echo esc_attr( kotoba_language_t( 'alt_s6' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-sec kl-quote","layout":{"type":"default"}} -->
<div class="wp-block-group kl-sec kl-quote"><!-- wp:group {"className":"kl-flank","layout":{"type":"default"}} -->
<div class="wp-block-group kl-flank"><!-- wp:html -->
<?php echo kotoba_language_arc( 'l' ); // phpcs:ignore ?>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kl-pull"} -->
<h2 class="wp-block-heading kl-pull"><?php echo esc_html( kotoba_language_t( 'room_q' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo kotoba_language_arc( 'r' ); // phpcs:ignore ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->