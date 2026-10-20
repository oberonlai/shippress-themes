<?php
/**
 * Title: Home: honest figures
 * Slug: kagi-security/front-figures
 * Categories: kagi-security
 * Keywords: figures, numbers
 * Viewport Width: 1440
 * Description: Rotated ghost words behind a rounded photograph card, with four honest figures in large serif numerals and a short note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-figures","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-figures"><!-- wp:html -->
<p class="ks-ghost" aria-hidden="true"><?php echo wp_kses_post( kagi_security_t( 'front_fig_ghost' ) ); ?></p>
<!-- /wp:html -->

<!-- wp:group {"className":"ks-figures__head","layout":{"type":"default"}} -->
<div class="wp-block-group ks-figures__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'front_fig_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-figures__intro","layout":{"type":"default"}} -->
<div class="wp-block-group ks-figures__intro"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( kagi_security_t( 'front_fig_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_fig_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-figures__card"} -->
<figure class="wp-block-image size-full ks-figures__card"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk-detail.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'front_fig_img' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-figures__list","layout":{"type":"default"}} -->
<div class="wp-block-group ks-figures__list"><!-- wp:group {"className":"ks-figure","layout":{"type":"default"}} -->
<div class="wp-block-group ks-figure"><!-- wp:paragraph {"className":"ks-figure__v"} -->
<p class="ks-figure__v"><?php echo wp_kses_post( kagi_security_t( 'front_fig_v1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-figure__t"} -->
<p class="ks-figure__t"><?php echo wp_kses_post( kagi_security_t( 'front_fig_t1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-figure","layout":{"type":"default"}} -->
<div class="wp-block-group ks-figure"><!-- wp:paragraph {"className":"ks-figure__v"} -->
<p class="ks-figure__v"><?php echo wp_kses_post( kagi_security_t( 'front_fig_v2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-figure__t"} -->
<p class="ks-figure__t"><?php echo wp_kses_post( kagi_security_t( 'front_fig_t2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-figure","layout":{"type":"default"}} -->
<div class="wp-block-group ks-figure"><!-- wp:paragraph {"className":"ks-figure__v"} -->
<p class="ks-figure__v"><?php echo wp_kses_post( kagi_security_t( 'front_fig_v3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-figure__t"} -->
<p class="ks-figure__t"><?php echo wp_kses_post( kagi_security_t( 'front_fig_t3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-figure","layout":{"type":"default"}} -->
<div class="wp-block-group ks-figure"><!-- wp:paragraph {"className":"ks-figure__v"} -->
<p class="ks-figure__v"><?php echo wp_kses_post( kagi_security_t( 'front_fig_v4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-figure__t"} -->
<p class="ks-figure__t"><?php echo wp_kses_post( kagi_security_t( 'front_fig_t4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-figures__note"} -->
<p class="ks-figures__note"><?php echo wp_kses_post( kagi_security_t( 'front_fig_note' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
