<?php
/**
 * Title: Header: bar
 * Slug: minori-seminars/head-main
 * Categories: minori-seminars
 * Keywords: seminar, management, header
 * Viewport Width: 1440
 * Description: White 80 px bar: mark and wordmark, centred anchor menu, language label and the plum "Reserve a seat" square.
 */
?>
<!-- wp:group {"className":"ms-bar","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar"><!-- wp:html -->
<a class="ms-logo" href="/"><svg class="ms-mark" viewBox="0 0 40 40" width="40" height="40" aria-hidden="true" focusable="false"><circle cx="20" cy="20" r="19.25" fill="none" stroke="currentColor" stroke-width="1"/><text x="20" y="26.5" text-anchor="middle" font-family="Libre Baskerville, Georgia, serif" font-size="18" fill="currentColor">M</text></svg><span class="ms-logo__name"><?php echo minori_seminars_e( 'brand_name' ); ?></span></a>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"always","showSubmenuIcon":false,"className":"ms-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->

<!-- wp:group {"className":"ms-bar__end","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__end"><!-- wp:paragraph {"className":"ms-lang"} -->
<p class="ms-lang"><a href="/"><?php echo minori_seminars_e( 'lang_label' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="ms-cta" href="/enrol/" aria-label="<?php echo esc_attr( minori_seminars_t( 'cta_aria' ) ); ?>"><span class="ms-cta__t"><?php echo minori_seminars_lines( 'cta_label' ); ?></span><svg viewBox="0 0 24 8" width="24" height="8" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1"><path d="M0 4h23M19 1l4 3-4 3"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
