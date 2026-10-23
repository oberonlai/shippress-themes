<?php
/**
 * Title: Page not found
 * Slug: kotoba-language/page-notfound
 * Categories: kotoba-language
 * Description: 404 body: copy, search form and a link home.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kl-sec kl-pagehead","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-pagehead"><!-- wp:group {"className":"kl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kotoba_language_t( 'nf_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kl-h1"} -->
<h1 class="wp-block-heading kl-h1"><?php echo esc_html( kotoba_language_t( 'nf_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-lede"} -->
<p class="kl-lede"><?php echo esc_html( kotoba_language_t( 'nf_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","className":"kl-search"} /-->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'nf_b1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kl-pill-btn-wrap"} -->
<div class="wp-block-buttons kl-pill-btn-wrap"><!-- wp:button {"className":"kl-pill-btn"} -->
<div class="wp-block-button kl-pill-btn"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( kotoba_language_t( 'nf_home' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->