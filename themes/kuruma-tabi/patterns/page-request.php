<?php
/**
 * Title: Page: request an itinerary
 * Slug: kuruma-tabi/page-request
 * Categories: kuruma-tabi
 * Inserter: no
 * Viewport Width: 1440
 * Description: Contact page: heading, the contact slot with a mail link fallback and the office hours.
 */
?>
<!-- wp:group {"tagName":"main","className":"kt-main","layout":{"type":"default"}} -->
<main class="wp-block-group kt-main"><!-- wp:group {"className":"kt-wrap kt-wrap--narrow kt-sec","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap kt-wrap--narrow kt-sec"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'rq_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'rq_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'req_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kt-form","layout":{"type":"default"}} -->
<div class="wp-block-group kt-form"><?php
ob_start(); ?>
<!-- wp:html -->
<p class="kt-mailto"><a class="wp-element-button kt-btn" href="mailto:plan@kurumatabi.example?subject=<?php echo rawurlencode( kuruma_tabi_t( 'mail_subject' ) ); ?>"><?php echo esc_html( kuruma_tabi_t( 'cta' ) ); ?></a></p>
<!-- /wp:html -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kt-p kt-p--s"} -->
<p class="kt-p kt-p--s"><?php echo esc_html( kuruma_tabi_t( 'rq_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
