<?php
/**
 * Title: Header: wordmark, centred menu and sample-kit pill
 * Slug: seiwa-furniture/header-main
 * Categories: seiwa-furniture
 * Description: Wordmark with a one-line descriptor at the left, one centred menu, an ink pill at the right.
 */
$sw_pill = '<!-- wp:buttons {"className":"sw-hbtn"} -->
<div class="wp-block-buttons sw-hbtn"><!-- wp:button {"className":"sw-pill"} -->
<div class="wp-block-button sw-pill"><a class="wp-block-button__link wp-element-button" href="/contact/">' . sw_t( 'hdr_cta' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->';
echo sw_group( 'sw-bar', sw_group( 'sw-bar__mark', '<!-- wp:html -->
<div class="sw-mark"><a href="/">Seiwa Furniture</a><span>' . sw_t( 'hdr_tag' ) . '</span></div>
<!-- /wp:html -->' ) . '<!-- wp:navigation {"overlayMenu":"mobile","className":"sw-nav","layout":{"type":"flex","justifyContent":"center"}} /-->' . "\n\n" . sw_group( 'sw-bar__r', $sw_pill ) ); // phpcs:ignore WordPress.Security.EscapeOutput
