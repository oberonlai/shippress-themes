<?php
/**
 * Title: Home: come and see the room
 * Slug: hibiki-speech/front-close
 * Categories: hibiki-speech
 * Keywords: clinic, speech therapy
 * Viewport Width: 1440
 * Description: Close with the empty room photograph, address, hours and two pills.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hs-close","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hs-close"><!-- wp:group {"className":"hs-wrap hs-close__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hs-wrap hs-close__grid"><!-- wp:group {"className":"hs-close__photo","layout":{"type":"default"}} -->
<div class="wp-block-group hs-close__photo"><!-- wp:group {"className":"hs-mark hs-mark--dots hs-close__dots","layout":{"type":"default"}} -->
<div class="wp-block-group hs-mark hs-mark--dots hs-close__dots"></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hs-torn hs-torn--b"} -->
<figure class="wp-block-image size-full hs-torn hs-torn--b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/r1.webp' ) ); ?>" alt="<?php echo esc_attr( hibiki_speech_t( 'ab76401be' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-close__text","layout":{"type":"default"}} -->
<div class="wp-block-group hs-close__text"><!-- wp:heading {"level":2,"className":"hs-close__h"} -->
<h2 class="wp-block-heading hs-close__h"><?php echo wp_kses_post( hibiki_speech_t( 'k3f1c0436' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hs-mark hs-mark--scribble hs-close__scribble","layout":{"type":"default"}} -->
<div class="wp-block-group hs-mark hs-mark--scribble hs-close__scribble"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hs-close__addr"} -->
<p class="hs-close__addr"><?php echo wp_kses_post( hibiki_speech_t( 'k099d25ca' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {} -->
<p><?php echo wp_kses_post( hibiki_speech_t( 'k38e39dfa' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hs-btns hs-btns--row"} -->
<div class="wp-block-buttons hs-btns hs-btns--row"><!-- wp:button {"className":"is-style-pill"} -->
<div class="wp-block-button is-style-pill"><a class="wp-block-button__link wp-element-button" href="/first-visit/"><?php echo wp_kses_post( hibiki_speech_t( 'k705550f8' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-pill"} -->
<div class="wp-block-button is-style-outline-pill"><a class="wp-block-button__link wp-element-button" href="tel:+003140725180"><?php echo wp_kses_post( hibiki_speech_t( 'kea287be5' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
