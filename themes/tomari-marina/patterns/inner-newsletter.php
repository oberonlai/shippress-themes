<?php
/**
 * Title: Newsletter: page head and how to be added
 * Slug: tomari-marina/inner-newsletter
 * Categories: tomari-marina
 * Keywords: inner
 * Viewport Width: 1440
 * Description: The Newsletter page: a page head with numeral 11 and a short block on how to be added to the harbour notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-t1__panel tm-head tm-head--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-t1__panel tm-head tm-head--plain"><!-- wp:group {"className":"tm-t1__tl","layout":{"type":"default"}} -->
<div class="wp-block-group tm-t1__tl"><!-- wp:html -->
<svg class="tm-pennant" width="48" height="38" viewBox="0 0 48 38" aria-hidden="true" focusable="false"><path d="M2 0h4v38H2z M6 3l40 11L6 25z" fill="#C30D23"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"tm-t1__label"} -->
<p class="tm-t1__label"><?php echo wp_kses_post( tomari_marina_t( 'in_newsletter_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-t1__word"} -->
<p class="tm-t1__word"><?php echo wp_kses_post( tomari_marina_t( 'in_newsletter_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tm-t1__num"} -->
<p class="tm-t1__num"><?php echo wp_kses_post( tomari_marina_t( 'in_newsletter_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"tm-t1__statement"} -->
<h1 class="wp-block-heading tm-t1__statement"><?php echo wp_kses_post( tomari_marina_t( 'in_newsletter_04' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"tm-t1__side","layout":{"type":"default"}} -->
<div class="wp-block-group tm-t1__side"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_newsletter_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"tomari-marina/bottom-line-inner"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tm-request tm-section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-request tm-section"><!-- wp:heading {"level":2,"className":"tm-h2 sp-stagger"} -->
<h2 class="wp-block-heading tm-h2 sp-stagger"><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'in_newsletter_06' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'in_newsletter_07' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-request__text"} -->
<p class="tm-request__text"><?php echo wp_kses_post( tomari_marina_t( 'in_newsletter_08' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-circle"} -->
<p class="tm-circle"><a href="mailto:office@tomarimarina.example"><?php echo wp_kses_post( tomari_marina_t( 'in_newsletter_09' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-circle"} -->
<p class="tm-circle"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo wp_kses_post( tomari_marina_t( 'in_newsletter_10' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->