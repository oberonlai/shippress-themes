<?php
/**
 * Title: Header: wordmark, utility row and one anchor menu
 * Slug: mise-studio/header-main
 * Categories: mise-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: A 120px white header: mark and wordmark left; a utility row (phone, studio hours) over the single anchor menu with slanted separators and the one Book a site visit pill.
 */
?>
<!-- wp:group {"align":"full","className":"ms-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ms-head"><!-- wp:group {"className":"ms-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group ms-head__in"><!-- wp:group {"className":"ms-head__brand","layout":{"type":"default"}} -->
<div class="wp-block-group ms-head__brand"><!-- wp:html -->
<a class="ms-brand__mark" href="/" aria-label="<?php echo esc_attr( mise_studio_t( 'hd_home' ) ); ?>"><svg class="ms-mark" width="26" height="26" viewBox="0 0 26 26" aria-hidden="true" focusable="false"><path d="M1.5 1.5h15.5v6.5h7.5v16.5h-23z" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"ms-brand"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-head__right","layout":{"type":"default"}} -->
<div class="wp-block-group ms-head__right"><!-- wp:paragraph {"className":"ms-util"} -->
<p class="ms-util"><?php echo esc_html( mise_studio_t( 'hd_phone' ) ); ?> <span class="ms-sep" aria-hidden="true"></span> <?php echo esc_html( mise_studio_t( 'hd_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-head__navrow","layout":{"type":"default"}} -->
<div class="wp-block-group ms-head__navrow"><!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","className":"ms-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->

<!-- wp:buttons {"className":"ms-pill-wrap"} -->
<div class="wp-block-buttons ms-pill-wrap"><!-- wp:button {"className":"ms-pill"} -->
<div class="wp-block-button ms-pill"><a class="wp-block-button__link wp-element-button" href="/book-a-visit/"><?php echo esc_html( mise_studio_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
