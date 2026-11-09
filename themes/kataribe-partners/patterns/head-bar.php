<?php
/**
 * Title: Header: logo, anchor menu, request button
 * Slug: kataribe-partners/head-bar
 * Categories: kataribe-partners
 * Keywords: header, navigation
 * Viewport Width: 1440
 * Inserter: no
 * Description: White 77 px header with the bars mark and wordmark at the left, the centred menu and the outline request pill at the right.
 */
$e = 'kataribe_partners_e';
?>
<!-- wp:group {"className":"kp-bar","layout":{"type":"default"}} -->
<div class="wp-block-group kp-bar"><!-- wp:group {"className":"kp-brand","layout":{"type":"default"}} -->
<div class="wp-block-group kp-brand"><!-- wp:html -->
<a class="kp-brand__mark" href="/" aria-hidden="true" tabindex="-1"><i></i><i></i><i></i><i></i><i></i></a>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"kp-brand__title"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"kp-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:buttons {"className":"kp-bar__cta"} -->
<div class="wp-block-buttons kp-bar__cta"><!-- wp:button {"className":"kp-outline"} -->
<div class="wp-block-button kp-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo is_front_page() ? "#request" : "/contact/"; ?>"><?php echo esc_html( kataribe_partners_t( "cta" ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
