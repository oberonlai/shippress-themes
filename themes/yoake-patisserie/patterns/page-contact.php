<?php
/**
 * Title: Page: Contact
 * Slug: yoake-patisserie/page-contact
 * Categories: yoake-patisserie
 * Inserter: no
 * Viewport Width: 1440
 * Description: Inner page body for Contact: wash head, photograph, wash bands and the hour ledger.
 */
?>
<!-- wp:group {"align":"full","className":"yk-wash yk-wash--110 yk-pagehead yk-pagehead--tall","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yk-wash yk-wash--110 yk-pagehead yk-pagehead--tall"><!-- wp:paragraph {"className":"yk-kicker"} -->
<p class="yk-kicker"><?php echo wp_kses_post( yoake_patisserie_t( 'kb159261a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-dash"} -->
<p class="yk-dash" aria-hidden="true">—</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yk-pagehead__title"} -->
<h1 class="wp-block-heading yk-pagehead__title"><?php echo wp_kses_post( yoake_patisserie_t( 'kbbaff128' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"yk-section yk-post yk-introwrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yk-section yk-post yk-introwrap"><!-- wp:paragraph {"className":"yk-intro"} -->
<p class="yk-intro"><?php echo wp_kses_post( yoake_patisserie_t( 'k0cb421c7' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"yk-section yk-twocol","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yk-section yk-twocol"><!-- wp:group {"className":"yk-twocol__in","layout":{"type":"default"}} -->
<div class="wp-block-group yk-twocol__in"><!-- wp:group {"className":"yk-twocol__c","layout":{"type":"default"}} -->
<div class="wp-block-group yk-twocol__c"><!-- wp:paragraph {"className":"yk-kicker"} -->
<p class="yk-kicker"><?php echo wp_kses_post( yoake_patisserie_t( 'kce8ae9da' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-dash"} -->
<p class="yk-dash" aria-hidden="true">—</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yk-lines"} -->
<h2 class="wp-block-heading yk-lines"><?php echo wp_kses_post( yoake_patisserie_t( 'k0ca3bee2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yoake_patisserie_t( 'k619569d3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yoake_patisserie_t( 'k5bc76414' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-twocol__c","layout":{"type":"default"}} -->
<div class="wp-block-group yk-twocol__c"><!-- wp:paragraph {"className":"yk-kicker"} -->
<p class="yk-kicker"><?php echo wp_kses_post( yoake_patisserie_t( 'kb2a1e8c4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-dash"} -->
<p class="yk-dash" aria-hidden="true">—</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yk-lines"} -->
<h2 class="wp-block-heading yk-lines"><?php echo wp_kses_post( yoake_patisserie_t( 'k6783b5b7' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yoake_patisserie_t( 'kd6872583' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yoake_patisserie_t( 'k413eeb26' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"yk-section yk-formband yk-formband--white","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yk-section yk-formband yk-formband--white"><!-- wp:group {"className":"yk-formband__text","layout":{"type":"default"}} -->
<div class="wp-block-group yk-formband__text"><!-- wp:paragraph {"className":"yk-kicker"} -->
<p class="yk-kicker"><?php echo wp_kses_post( yoake_patisserie_t( 'k786e3cc6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-dash"} -->
<p class="yk-dash" aria-hidden="true">—</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yk-lines"} -->
<h2 class="wp-block-heading yk-lines"><?php echo wp_kses_post( yoake_patisserie_t( 'k32936021' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yoake_patisserie_t( 'k8a204f57' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yoake_patisserie_t( 'k6a57ea1b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-formband__form","layout":{"type":"default"}} -->
<div class="wp-block-group yk-formband__form"><?php
ob_start(); ?>
<!-- wp:buttons {"className":"yk-btns"} -->
<div class="wp-block-buttons yk-btns"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@yoake-patisserie.example?subject=<?php echo rawurlencode( yoake_patisserie_t( 'forms_contact_subject' ) ); ?>"><?php echo esc_html( yoake_patisserie_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"yk-note"} -->
<p class="yk-note"><?php echo esc_html( yoake_patisserie_t( 'forms_contact_note' ) ); ?></p>
<!-- /wp:paragraph -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
