<?php
/**
 * Title: Home: capacity enquiry
 * Slug: koori-coldstore/front-enquiry
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Description: A patina text panel fused to a wide photograph with a circle arrow: the one capacity enquiry.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"enquiry","className":"kc-sec kc-enquiry","layout":{"type":"default"}} -->
<section id="enquiry" class="wp-block-group alignfull kc-sec kc-enquiry"><!-- wp:group {"className":"kc-enq sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-enq sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-enq__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kc-enq__panel"><!-- wp:heading {"level":2,"className":"kc-enq__title"} -->
<h2 class="wp-block-heading kc-enq__title"><?php echo esc_html( koori_coldstore_t( 'enq_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-enq__p"} -->
<p class="kc-enq__p"><?php echo esc_html( koori_coldstore_t( 'enq_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kc-enq__btn"} -->
<div class="wp-block-buttons kc-enq__btn"><!-- wp:button {"className":"kc-btn kc-btn--white"} -->
<div class="wp-block-button kc-btn kc-btn--white"><a class="wp-block-button__link wp-element-button" href="<?php echo koori_coldstore_url( '/ask/' ); ?>"><?php echo esc_html( koori_coldstore_t( 'cta_ask' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"kc-enq__phone"} -->
<p class="kc-enq__phone"><?php echo esc_html( koori_coldstore_t( 'enq_phone' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-enq__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kc-enq__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-enq__img"} -->
<figure class="wp-block-image size-full kc-enq__img"><img src="<?php echo koori_coldstore_img( 'enquiry.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_e01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="kc-circle kc-circle--white" href="<?php echo koori_coldstore_url( '/ask/' ); ?>" aria-label="<?php echo esc_attr( koori_coldstore_t( 'cta_ask' ) ); ?>"><svg viewBox="0 0 20 20" width="20" height="20" aria-hidden="true" focusable="false"><path d="M4 10h11M10.5 5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
