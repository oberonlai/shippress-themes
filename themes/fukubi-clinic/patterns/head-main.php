<?php
/**
 * Title: Header
 * Slug: fukubi-clinic/head-main
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: White floating bar with rounded lower corners: round mark and wordmark, an outline FAQ pill and an orange booking pill, the menu beneath.
 */
?>
<!-- wp:group {"align":"full","className":"fc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-header"><!-- wp:group {"className":"fc-header__in","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group fc-header__in"><!-- wp:group {"className":"fc-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group fc-brand"><!-- wp:html -->
<a class="fc-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><svg class="fc-logo" width="40" height="40" viewBox="0 0 40 40" role="img" aria-label="<?php echo esc_attr( fc_t( 'logo_alt' ) ); ?>" xmlns="http://www.w3.org/2000/svg"><circle cx="20" cy="20" r="18" fill="none" stroke="#5E6A72" stroke-width="2"/><path d="M11 21c0-6 4-10 9-10s9 4 9 10" fill="none" stroke="#7E8F98" stroke-width="2.4" stroke-linecap="round"/><circle cx="20" cy="25" r="3.4" fill="#5E6A72"/></svg></a>
<!-- /wp:html --><!-- wp:group {"className":"fc-brand__txt","layout":{"type":"default"}} -->
<div class="wp-block-group fc-brand__txt"><!-- wp:site-title {"level":0,"className":"fc-brand__title"} /-->
<!-- wp:paragraph {"className":"fc-brand__sub"} -->
<p class="fc-brand__sub"><?php echo esc_html( fc_t( 'tagline' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"fc-header__right","layout":{"type":"default"}} -->
<div class="wp-block-group fc-header__right"><!-- wp:buttons {"className":"fc-pills"} -->
<div class="wp-block-buttons fc-pills"><!-- wp:button {"className":"fc-pill fc-pill--faq"} -->
<div class="wp-block-button fc-pill fc-pill--faq"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><?php echo esc_html( fc_t( 'faq' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:html -->
<div class="wp-block-button fc-pill fc-pill--book"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><svg class="fc-pill__cal" width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><rect x="2" y="3.5" width="14" height="12" rx="2"/><path d="M2 7.5h14M6 2v3M12 2v3"/></svg><span><?php echo esc_html( fc_t( 'book_first' ) ); ?></span></a></div>
<!-- /wp:html --></div>
<!-- /wp:buttons --><!-- wp:navigation {"overlayMenu":"mobile","className":"fc-nav","layout":{"type":"flex","orientation":"horizontal"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
