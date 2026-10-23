<?php
/**
 * Title: Home: close
 * Slug: kotoba-language/front-close
 * Categories: kotoba-language
 * Description: Arc-flanked enquiry line, pill button and the second cropped wordmark.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kl-close","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-close"><!-- wp:html -->
<div class="kl-word kl-word--top" aria-hidden="true"><p class="kl-word__t">Enrol.</p></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kl-sec kl-close__in","layout":{"type":"default"}} -->
<div class="wp-block-group kl-sec kl-close__in"><!-- wp:group {"className":"kl-flank","layout":{"type":"default"}} -->
<div class="wp-block-group kl-flank"><!-- wp:html -->
<?php echo kotoba_language_arc( 'l' ); // phpcs:ignore ?>
<!-- /wp:html -->

<!-- wp:group {"className":"kl-close__c","layout":{"type":"default"}} -->
<div class="wp-block-group kl-close__c"><!-- wp:heading {"level":2,"className":"kl-pull kl-pull--close"} -->
<h2 class="wp-block-heading kl-pull kl-pull--close"><?php echo esc_html( kotoba_language_t( 'close_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-close__p"} -->
<p class="kl-close__p"><?php echo esc_html( kotoba_language_t( 'close_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kl-pill-btn-wrap"} -->
<div class="wp-block-buttons kl-pill-btn-wrap"><!-- wp:button {"className":"kl-pill-btn"} -->
<div class="wp-block-button kl-pill-btn"><a class="wp-block-button__link wp-element-button" href="/enquiry/"><?php echo esc_html( kotoba_language_t( 'close_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:html -->
<?php echo kotoba_language_arc( 'r' ); // phpcs:ignore ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->