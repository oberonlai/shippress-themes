<?php
/**
 * Title: Home: sample-kit contact card
 * Slug: seiwa-furniture/front-contact
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: An outlined card running to the right edge with a photograph flush right, the request pill and the phone and email line.
 */
$sw_btn = '<!-- wp:buttons {"className":"sw-hbtn"} -->
<div class="wp-block-buttons sw-hbtn"><!-- wp:button {"className":"sw-pill"} -->
<div class="wp-block-button sw-pill"><a class="wp-block-button__link wp-element-button" href="/contact/">' . sw_t( 'con_btn' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

';
$sw_card = sw_group( 'sw-card sp-reveal sp-reveal--up', sw_group( 'sw-card__tx', sw_p( 'sw-kick', sw_t( 'con_k' ) ) . sw_h( 3, 'sw-card__t', sw_t( 'con_t' ) ) . sw_p( 'sw-card__b', sw_t( 'con_b' ) ) . $sw_btn . sw_p( 'sw-card__tel', sw_t( 'con_tel' ) ) . sw_img( 'line-envelope.svg', '', 'sw-card__ln' ) ) . sw_img( 'contact-kit-desk.webp', sw_ta( 'alt_P14' ), 'sw-card__ph' ) );
echo sw_group( 'sw-sec sw-band sw-contact', sw_group( 'sw-cards', $sw_card ), 'section' ); // phpcs:ignore WordPress.Security.EscapeOutput
