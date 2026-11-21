<?php
/**
 * Title: Home: request an itinerary
 * Slug: kuruma-tabi/front-request
 * Categories: kuruma-tabi
 * Viewport Width: 1440
 * Description: The single request: text, the contact form slot with a mail link as fallback, and a 3:2 photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec","layout":{"type":"default"},"anchor":"request"} -->
<section id="request" class="wp-block-group alignfull kt-sec"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'request_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'request_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-request","layout":{"type":"default"}} -->
<div class="wp-block-group kt-request"><!-- wp:group {"className":"kt-request__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-request__text"><!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'req_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'req_p2' ) ); ?></p>
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
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-request__ph","layout":{"type":"default"}} -->
<div class="wp-block-group kt-request__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'guide-waving-van.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
