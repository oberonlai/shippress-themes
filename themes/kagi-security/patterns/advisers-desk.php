<?php
/**
 * Title: Analysts: who to ask
 * Slug: kagi-security/advisers-desk
 * Categories: kagi-security
 * Keywords: analysts, office, incident line
 * Viewport Width: 1440
 * Description: Who to ask about what, with office hours and the incident line, beside a photograph of the office.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-band ks-band--slate ks-section--last-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-band ks-band--slate ks-section--last-band"><!-- wp:group {"align":"wide","className":"ks-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ks-split__photo ks-split__photo--land"} -->
<figure class="wp-block-image size-large ks-split__photo ks-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office-day.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'advisers_desk_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'advisers_desk_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-split__title"} -->
<h2 class="wp-block-heading ks-split__title"><?php echo wp_kses_post( kagi_security_t( 'advisers_desk_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'advisers_desk_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'advisers_desk_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
