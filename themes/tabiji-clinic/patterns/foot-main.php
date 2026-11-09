<?php
/**
 * Title: Footer
 * Slug: tabiji-clinic/foot-main
 * Categories: tabiji-clinic
 * Keywords: clinic, travel, vaccination
 * Viewport Width: 1440
 * Description: Footer with address, hours, contact and the fixed ring badge.
 */
?>
<!-- wp:group {"align":"full","className":"tc-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tc-footer"><!-- wp:group {"className":"tc-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group tc-footer__in"><!-- wp:group {"className":"tc-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group tc-foot__cols"><!-- wp:group {"className":"tc-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group tc-foot__col"><!-- wp:paragraph {"className":"tc-foot__name"} -->
<p class="tc-foot__name"><?php echo esc_html( tabiji_clinic_t( 'foot_name' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-foot__text"} -->
<p class="tc-foot__text"><?php echo esc_html( tabiji_clinic_t( 'foot_blurb' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-foot__text"} -->
<p class="tc-foot__text"><?php echo esc_html( tabiji_clinic_t( 'addr1' ) ); ?><br><?php echo esc_html( tabiji_clinic_t( 'addr2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"tc-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group tc-foot__col"><!-- wp:paragraph {"className":"tc-foot__h"} -->
<p class="tc-foot__h"><?php echo esc_html( tabiji_clinic_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-row"} -->
<p class="tc-row"><span><?php echo esc_html( tabiji_clinic_t( 'f1_a' ) ); ?></span><span><?php echo esc_html( tabiji_clinic_t( 'f1_b' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-row"} -->
<p class="tc-row"><span><?php echo esc_html( tabiji_clinic_t( 'f2_a' ) ); ?></span><span><?php echo esc_html( tabiji_clinic_t( 'f2_b' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-foot__text"} -->
<p class="tc-foot__text"><?php echo esc_html( tabiji_clinic_t( 'f_closed' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"tc-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group tc-foot__col"><!-- wp:paragraph {"className":"tc-foot__h"} -->
<p class="tc-foot__h"><?php echo esc_html( tabiji_clinic_t( 'foot_contact' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-foot__text"} -->
<p class="tc-foot__text"><a href="tel:6045550142">604-555-0142</a><br><a href="mailto:hello@tabiji-clinic.example">hello@tabiji-clinic.example</a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-foot__text"} -->
<p class="tc-foot__text"><?php echo esc_html( tabiji_clinic_t( 'foot_transit' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"tc-foot__legal"} -->
<p class="tc-foot__legal"><?php echo esc_html( tabiji_clinic_t( 'legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:html -->
<a class="tc-badge" href="/#journeys" aria-label="<?php echo esc_attr( tabiji_clinic_t( 'badge_label' ) ); ?>"><svg viewBox="0 0 80 80" width="80" height="80" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="40" cy="40" r="39.5" fill="#fff" stroke="#423E3E"/><defs><path id="tc-ring" d="M40 40m-30 0a30 30 0 1 1 60 0a30 30 0 1 1-60 0"/></defs><g class="tc-badge__ring"><text font-size="8" letter-spacing="1" fill="#423E3E"><textPath href="#tc-ring" textLength="184" lengthAdjust="spacing"><?php echo esc_html( tabiji_clinic_t( 'badge_ring' ) ); ?></textPath></text></g><g fill="none" stroke="#423E3E" stroke-width="1.4" stroke-linejoin="round" stroke-linecap="round"><rect x="31" y="29" width="18" height="22" rx="2"/><path d="M36 40l3 3 5-6"/></g></svg></a>
<!-- /wp:html -->
