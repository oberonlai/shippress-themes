<?php
/**
 * Title: Home: closing banner
 * Slug: kodou-charging/front-close
 * Categories: kodou-charging
 * Viewport Width: 1440
 * Description: The outlined notice banner a third time, with the address, email and phone below.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"contact","align":"full","className":"kc-sec kc-sec--close","layout":{"type":"default"}} -->
<section id="contact" class="wp-block-group alignfull kc-sec kc-sec--close">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:group {"className":"kc-close","layout":{"type":"default"}} -->
<div class="wp-block-group kc-close">
<!-- wp:html -->
<a class="kc-banner kc-banner--close" href="/contact/"><span class="kc-banner__pic"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" stroke="#2F4A45" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="16" y="5" width="24" height="32" rx="4"/><path d="M22 27h12"/><circle cx="28" cy="15" r="4" fill="#C8873A" stroke="none"/><path d="M28 37v3"/><ellipse cx="28" cy="46" rx="9" ry="5.5"/><ellipse cx="28" cy="46" rx="4.5" ry="2.5"/></svg></span><span class="kc-banner__text"><?php echo esc_html( kodou_charging_t( 'close_a' ) ); ?><b class="kc-acc"><?php echo esc_html( kodou_charging_t( 'close_b' ) ); ?></b><?php echo esc_html( kodou_charging_t( 'close_c' ) ); ?></span><span class="kc-banner__go"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="20" cy="20" r="19"/><path d="M14 26 26 14M16.5 14H26v9.5"/></svg></span></a>
<!-- /wp:html -->
<!-- wp:html -->
<p class="kc-close__x"><?php echo esc_html( kodou_charging_t( 'close_p' ) ); ?><a href="mailto:visits@kodou-charging.example"><?php echo esc_html( kodou_charging_t( 'email' ) ); ?></a> · <a href="tel:+002079460180"><?php echo esc_html( kodou_charging_t( 'phone' ) ); ?></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
