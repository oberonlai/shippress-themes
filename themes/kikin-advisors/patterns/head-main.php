<?php
/**
 * Title: Header: bar
 * Slug: kikin-advisors/head-main
 * Categories: kikin-advisors
 * Keywords: pension, adviser, employer briefing
 * Viewport Width: 1440
 * Description: Round outline mark with the wordmark, the five captioned anchor links and the language label.
 */
?>
<!-- wp:group {"className":"kk-bar-head","layout":{"type":"default"}} -->
<div class="wp-block-group kk-bar-head"><!-- wp:html -->
<a class="kk-logo" href="/"><svg class="kk-mark" viewBox="0 0 88 88" width="88" height="88" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><circle cx="44" cy="44" r="42"/><path d="M33 26v28M33 41l16-15M37 38l14 16" stroke-width="3"/><path d="M26 64q18 8 36 0" stroke-width="1.2"/></svg><span class="kk-logo__text"><span class="kk-logo__name">Kikin Advisors</span><span class="kk-logo__sub"><?php echo esc_html( kikin_advisors_t( 'brand_sub' ) ); ?></span></span></a>
<!-- /wp:html -->

<!-- wp:group {"className":"kk-navwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kk-navwrap"><!-- wp:navigation {"overlayMenu":"always","showSubmenuIcon":false,"className":"kk-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:paragraph {"className":"kk-lang"} -->
<p class="kk-lang"><a href="/"><?php echo esc_html( kikin_advisors_t( 'lang_label' ) ); ?> ▾</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
