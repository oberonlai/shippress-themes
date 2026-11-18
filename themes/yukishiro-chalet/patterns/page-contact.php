<?php
/**
 * Title: Page: Contact
 * Slug: yukishiro-chalet/page-contact
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Plain head, contact band, form slot and getting here.
 */
?>
<!-- wp:group {"tagName":"section","className":"yk-sec yk-ph--plain","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-ph--plain"><!-- wp:group {"className":"yk-wrap yk-chap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap yk-chap"><!-- wp:paragraph {"className":"yk-lead"} -->
<p class="yk-lead"><?php echo esc_html( yukishiro_chalet_t( 'ph_contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yk-h1 yk-h1--plain"} -->
<h1 class="wp-block-heading yk-h1 yk-h1--plain"><?php echo esc_html( yukishiro_chalet_t( 'ph_contact_h1' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--tight yk-sec--nopad","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--tight yk-sec--nopad"><!-- wp:group {"className":"yk-wrap yk-chap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap yk-chap"><!-- wp:separator {"className":"yk-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity yk-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"yk-lede yk-lede--full"} -->
<p class="yk-lede yk-lede--full"><?php echo esc_html( yukishiro_chalet_t( 'c_contact_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

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

<!-- wp:group {"className":"yk-ic","layout":{"type":"default"}} -->
<div class="wp-block-group yk-ic"><!-- wp:html -->
<span class="yk-ic__c" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.2"><circle cx="8" cy="8" r="6"/><path d="M8 4.5V8l2.5 1.5"/></svg></span>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p><?php echo esc_html( yukishiro_chalet_t( 'contact_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yk-find__p"} -->
<p class="yk-find__p"><?php echo esc_html( yukishiro_chalet_t( 'find_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'check_dates' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-find__img"} -->
<figure class="wp-block-image size-full yk-find__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'room-family.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p11' ) ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_contact_0_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_contact_0_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"write","className":"yk-sec yk-sec--panel yk-request","layout":{"type":"default"}} -->
<section id="write" class="wp-block-group yk-sec yk-sec--panel yk-request"><!-- wp:group {"className":"yk-wrap yk-form","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap yk-form"><!-- wp:group {"className":"yk-chap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-chap"><!-- wp:paragraph {"className":"yk-lead"} -->
<p class="yk-lead"><?php echo esc_html( yukishiro_chalet_t( 'contact_form_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yk-title yk-title--l"} -->
<h2 class="wp-block-heading yk-title yk-title--l"><?php echo esc_html( yukishiro_chalet_t( 'contact_form_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"yk-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity yk-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-form__slot","layout":{"type":"default"}} -->
<div class="wp-block-group yk-form__slot"><?php
ob_start();
?><a class="wp-element-button yk-mailbtn" href="mailto:stay@yukishiro-chalet.example?subject=<?php echo rawurlencode( yukishiro_chalet_t( 'forms_contact_subject' ) ); ?>"><?php echo esc_html( yukishiro_chalet_t( 'contact_email' ) ); ?></a><p class="yk-form-hint"><?php echo esc_html( yukishiro_chalet_t( 'forms_contact_hint' ) ); ?></p><?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_contact_1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_contact_1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_contact_2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_contact_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
