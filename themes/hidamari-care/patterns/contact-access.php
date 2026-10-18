<?php
/**
 * Title: Home: contact and access
 * Slug: hidamari-care/contact-access
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Description: A celadon field with the address, phone and a plain route description.
 */
?>
<!-- wp:group {"tagName":"section","className":"hc-find","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-find"><!-- wp:group {"className":"hc-find__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-find__head"><!-- wp:paragraph {"className":"hc-eyebrow"} -->
<p class="hc-eyebrow"><?php echo esc_html( hidamari_care_t( 'ca_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hc-sec__title"} -->
<h2 class="wp-block-heading hc-sec__title"><?php echo esc_html( hidamari_care_t( 'ca_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:html -->
<dl class="hc-find__dl"><div><dt><?php echo esc_html( hidamari_care_t( 'ca_addr_l' ) ); ?></dt><dd><?php echo esc_html( hidamari_care_t( 'ca_addr' ) ); ?></dd></div><div><dt><?php echo esc_html( hidamari_care_t( 'ca_tel_l' ) ); ?></dt><dd><a href="tel:+810000000480"><?php echo esc_html( hidamari_care_t( 'ca_tel' ) ); ?></a></dd></div><div class="hc-find__route"><dt><?php echo esc_html( hidamari_care_t( 'ca_route_l' ) ); ?></dt><dd><?php echo esc_html( hidamari_care_t( 'ca_route' ) ); ?></dd></div></dl>
<!-- /wp:html --></section>
<!-- /wp:group -->
