<?php
/**
 * Title: Home: find us
 * Slug: yukishiro-chalet/find-us
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Grey contact panel with three icon rows beside a half-bleed exterior photograph.
 */
?>
<!-- wp:group {"tagName":"section","className":"yk-find","layout":{"type":"default"}} -->
<section class="wp-block-group yk-find"><!-- wp:group {"className":"yk-find__panel","layout":{"type":"default"}} -->
<div class="wp-block-group yk-find__panel"><!-- wp:heading {"level":3,"className":"yk-find__h"} -->
<h3 class="wp-block-heading yk-find__h"><?php echo esc_html( yukishiro_chalet_t( 'find_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"yk-ic","layout":{"type":"default"}} -->
<div class="wp-block-group yk-ic"><!-- wp:html -->
<span class="yk-ic__c" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M8 14s5-4.2 5-8a5 5 0 1 0-10 0c0 3.8 5 8 5 8z"/><circle cx="8" cy="6" r="1.8"/></svg></span>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p><?php echo esc_html( yukishiro_chalet_t( 'find_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-ic","layout":{"type":"default"}} -->
<div class="wp-block-group yk-ic"><!-- wp:html -->
<span class="yk-ic__c" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M3 2.5h3l1 3-1.8 1.2a8 8 0 0 0 3.6 3.6L10 8.5l3 1v3a1.5 1.5 0 0 1-1.5 1.5A10.5 10.5 0 0 1 1.5 4 1.5 1.5 0 0 1 3 2.5z"/></svg></span>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p><a href="tel:+41000555018">+41 00 555 01 18</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-ic","layout":{"type":"default"}} -->
<div class="wp-block-group yk-ic"><!-- wp:html -->
<span class="yk-ic__c" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.2"><rect x="2" y="3.5" width="12" height="9" rx="1"/><path d="m2.5 4.5 5.5 4.5 5.5-4.5"/></svg></span>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p><a href="mailto:stay@yukishiro-chalet.example">stay@yukishiro-chalet.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yk-find__p"} -->
<p class="yk-find__p"><?php echo esc_html( yukishiro_chalet_t( 'find_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( yukishiro_chalet_t( 'find_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-find__img"} -->
<figure class="wp-block-image size-full yk-find__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'chalet-exterior.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p16' ) ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
