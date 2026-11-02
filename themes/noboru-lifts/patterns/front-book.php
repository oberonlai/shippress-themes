<?php
/**
 * Title: Home: book
 * Slug: noboru-lifts/front-book
 * Categories: noboru-lifts
 * Keywords: lift, inspection, landing
 * Viewport Width: 1440
 * Description: The single conversion: a split card with a photograph and a four-field booking form.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"book","className":"nl-book-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nl-book-sec" id="book"><!-- wp:group {"className":"nl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nl-wrap"><!-- wp:group {"className":"nl-bookcard","layout":{"type":"default"}} -->
<div class="wp-block-group nl-bookcard"><!-- wp:paragraph {"className":"nl-tab"} -->
<p class="nl-tab"><strong><?php echo wp_kses_post( noboru_lifts_t( 'k2b1f94ef' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nl-bookcard__photo","layout":{"type":"default"}} -->
<div class="wp-block-group nl-bookcard__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nl-bookcard__img"} -->
<figure class="wp-block-image size-full nl-bookcard__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p17-desk.webp' ) ); ?>" alt="<?php echo esc_attr( noboru_lifts_t( 'a0d89f165' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nl-bookcard__form","layout":{"type":"default"}} -->
<div class="wp-block-group nl-bookcard__form"><!-- wp:heading {"className":"nl-h2"} -->
<h2 class="wp-block-heading nl-h2"><span class="nl-strip"><?php echo wp_kses_post( noboru_lifts_t( 'kaf82d14c' ) ); ?></span><br><span class="nl-strip"><?php echo wp_kses_post( noboru_lifts_t( 'k0c985ebf' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nl-body"} -->
<p class="nl-body"><?php echo wp_kses_post( noboru_lifts_t( 'kae7def80' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="nl-form" action="/thanks/" method="get"><p><label for="nl-name"><?php echo wp_kses_post( noboru_lifts_t( 'k221e705c' ) ); ?></label><input id="nl-name" name="name" type="text" autocomplete="name" required/></p><p><label for="nl-building"><?php echo wp_kses_post( noboru_lifts_t( 'kc39b56d4' ) ); ?></label><input id="nl-building" name="building" type="text" autocomplete="organization" required/></p><p><label for="nl-floors"><?php echo wp_kses_post( noboru_lifts_t( 'k2b0b50e6' ) ); ?></label><input id="nl-floors" name="floors" type="number" min="4" max="12" required/></p><p><label for="nl-email"><?php echo wp_kses_post( noboru_lifts_t( 'kce8ae9da' ) ); ?></label><input id="nl-email" name="email" type="email" autocomplete="email" required/></p><button type="submit"><?php echo wp_kses_post( noboru_lifts_t( 'k7138f381' ) ); ?></button></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"nl-bookcard__call"} -->
<p class="nl-bookcard__call"><?php echo wp_kses_post( noboru_lifts_t( 'k61c2434e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
