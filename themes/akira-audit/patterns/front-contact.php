<?php
/**
 * Title: Home: contact band
 * Slug: akira-audit/front-contact
 * Categories: akira-audit
 * Keywords: audit, contact, planning call
 * Viewport Width: 1440
 * Description: White band: the planning-call invitation and a dark button at the left, office, hours, phone and email rows at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"aa-sec aa-sec--white aa-sec--contact","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull aa-sec aa-sec--white aa-sec--contact" id="contact">
<!-- wp:group {"className":"aa-contact","layout":{"type":"default"}} -->
<div class="wp-block-group aa-contact">
<!-- wp:group {"className":"aa-contact__text","layout":{"type":"default"}} -->
<div class="wp-block-group aa-contact__text">
<!-- wp:paragraph {"className":"aa-eyebrow"} -->
<p class="aa-eyebrow"><?php echo esc_html( akira_audit_t( 'con_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"aa-h2"} -->
<h2 class="wp-block-heading aa-h2"><?php echo esc_html( akira_audit_t( 'con_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( akira_audit_t( 'con_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"aa-btnrow"} -->
<div class="wp-block-buttons aa-btnrow">
<!-- wp:button {"className":"aa-btn"} -->
<div class="wp-block-button aa-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( akira_audit_t( 'con_btn' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-kv","layout":{"type":"default"}} -->
<div class="wp-block-group aa-kv">
<!-- wp:group {"className":"aa-kv__row","layout":{"type":"default"}} -->
<div class="wp-block-group aa-kv__row">
<!-- wp:paragraph {"className":"aa-kv__label"} -->
<p class="aa-kv__label"><?php echo esc_html( akira_audit_t( 'con_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-kv__value"} -->
<p class="aa-kv__value"><?php echo esc_html( akira_audit_t( 'con_v1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-kv__row","layout":{"type":"default"}} -->
<div class="wp-block-group aa-kv__row">
<!-- wp:paragraph {"className":"aa-kv__label"} -->
<p class="aa-kv__label"><?php echo esc_html( akira_audit_t( 'con_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-kv__value"} -->
<p class="aa-kv__value"><?php echo esc_html( akira_audit_t( 'con_v2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-kv__row","layout":{"type":"default"}} -->
<div class="wp-block-group aa-kv__row">
<!-- wp:paragraph {"className":"aa-kv__label"} -->
<p class="aa-kv__label"><?php echo esc_html( akira_audit_t( 'con_l3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-kv__value"} -->
<p class="aa-kv__value"><?php echo esc_html( akira_audit_t( 'con_v3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"aa-kv__row","layout":{"type":"default"}} -->
<div class="wp-block-group aa-kv__row">
<!-- wp:paragraph {"className":"aa-kv__label"} -->
<p class="aa-kv__label"><?php echo esc_html( akira_audit_t( 'con_l4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"aa-kv__value"} -->
<p class="aa-kv__value"><?php echo esc_html( akira_audit_t( 'con_v4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
