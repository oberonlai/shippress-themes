<?php
/**
 * Title: Template: 404
 * Slug: fuchi-glazing/tpl-404
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: Not-found message with a link home.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"fg-sec fg-sec--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fg-sec fg-sec--page">
<!-- wp:group {"className":"fg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap">
<!-- wp:heading {"level":1,"className":"fg-h1"} -->
<h1 class="wp-block-heading fg-h1"><?php echo esc_html( fuchi_glazing_t( 'nf_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-lead fg-lead--left"} -->
<p class="fg-lead fg-lead--left"><?php echo esc_html( fuchi_glazing_t( 'nf_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<a class="fg-cta" href="/"><span><?php echo esc_html( fuchi_glazing_t( 'nf_back' ) ); ?></span><svg class="fg-cta__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="8" cy="8" r="7.4"/><path d="M4.8 8h6M8.6 5.6 11 8l-2.4 2.4"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
