<?php
/**
 * Title: Home: price table and outlined banner
 * Slug: kodou-charging/front-pricing
 * Categories: kodou-charging
 * Viewport Width: 1440
 * Description: Six-row price table, full width, then the outlined notice banner as the mid-page request.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"pricing","align":"full","className":"kc-sec kc-sec--pricing","layout":{"type":"default"}} -->
<section id="pricing" class="wp-block-group alignfull kc-sec kc-sec--pricing">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:heading {"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2"><?php echo esc_html( kodou_charging_t( 'pr_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"kc-intro"} -->
<p class="kc-intro"><?php echo esc_html( kodou_charging_t( 'pr_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:table {"hasFixedLayout":false,"className":"kc-ptable"} -->
<figure class="wp-block-table kc-ptable"><table><thead><tr><th><?php echo esc_html( kodou_charging_t( 'pr_th1' ) ); ?></th><th><?php echo esc_html( kodou_charging_t( 'pr_th2' ) ); ?></th><th><?php echo esc_html( kodou_charging_t( 'pr_th3' ) ); ?></th></tr></thead><tbody><tr><td class="kc-pt__i"><?php echo esc_html( kodou_charging_t( 'pr1_i' ) ); ?></td><td class="kc-pt__n"><?php echo esc_html( kodou_charging_t( 'pr1_n' ) ); ?></td><td class="kc-pt__p"><?php echo esc_html( kodou_charging_t( 'pr1_p' ) ); ?></td></tr><tr><td class="kc-pt__i"><?php echo esc_html( kodou_charging_t( 'pr2_i' ) ); ?></td><td class="kc-pt__n"><?php echo esc_html( kodou_charging_t( 'pr2_n' ) ); ?></td><td class="kc-pt__p"><?php echo esc_html( kodou_charging_t( 'pr2_p' ) ); ?></td></tr><tr><td class="kc-pt__i"><?php echo esc_html( kodou_charging_t( 'pr3_i' ) ); ?></td><td class="kc-pt__n"><?php echo esc_html( kodou_charging_t( 'pr3_n' ) ); ?></td><td class="kc-pt__p"><?php echo esc_html( kodou_charging_t( 'pr3_p' ) ); ?></td></tr><tr><td class="kc-pt__i"><?php echo esc_html( kodou_charging_t( 'pr4_i' ) ); ?></td><td class="kc-pt__n"><?php echo esc_html( kodou_charging_t( 'pr4_n' ) ); ?></td><td class="kc-pt__p"><?php echo esc_html( kodou_charging_t( 'pr4_p' ) ); ?></td></tr><tr><td class="kc-pt__i"><?php echo esc_html( kodou_charging_t( 'pr5_i' ) ); ?></td><td class="kc-pt__n"><?php echo esc_html( kodou_charging_t( 'pr5_n' ) ); ?></td><td class="kc-pt__p"><?php echo esc_html( kodou_charging_t( 'pr5_p' ) ); ?></td></tr><tr><td class="kc-pt__i"><?php echo esc_html( kodou_charging_t( 'pr6_i' ) ); ?></td><td class="kc-pt__n"><?php echo esc_html( kodou_charging_t( 'pr6_n' ) ); ?></td><td class="kc-pt__p"><?php echo esc_html( kodou_charging_t( 'pr6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"kc-note"} -->
<p class="kc-note"><?php echo esc_html( kodou_charging_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-mid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-mid">
<!-- wp:html -->
<a class="kc-banner kc-banner--mid" href="/contact/"><span class="kc-banner__pic"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" stroke="#2F4A45" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="16" y="5" width="24" height="32" rx="4"/><path d="M22 27h12"/><circle cx="28" cy="15" r="4" fill="#C8873A" stroke="none"/><path d="M28 37v3"/><ellipse cx="28" cy="46" rx="9" ry="5.5"/><ellipse cx="28" cy="46" rx="4.5" ry="2.5"/></svg></span><span class="kc-banner__text"><?php echo esc_html( kodou_charging_t( 'mid_a' ) ); ?><b class="kc-acc"><?php echo esc_html( kodou_charging_t( 'mid_b' ) ); ?></b><?php echo esc_html( kodou_charging_t( 'mid_c' ) ); ?></span><span class="kc-banner__go"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="20" cy="20" r="19"/><path d="M14 26 26 14M16.5 14H26v9.5"/></svg></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
