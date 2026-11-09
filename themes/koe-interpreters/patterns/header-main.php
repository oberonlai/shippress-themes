<?php
/**
 * Title: Header: wordmark, anchors, language pill and request button
 * Slug: koe-interpreters/header-main
 * Categories: koe-interpreters
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"ko-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ko-header"><!-- wp:paragraph {"className":"ko-header__word"} -->
<p class="ko-header__word"><a href="/">Koe Interpreters</a></p>
<!-- /wp:paragraph --><!-- wp:navigation {"overlayMenu":"mobile","className":"ko-nav","icon":"menu","layout":{"type":"flex","orientation":"horizontal"}} /--><!-- wp:html -->
<p class="ko-lang" role="group" aria-label="<?php echo esc_attr( koe_interpreters_t( 'hdr_lang' ) ); ?>"><span class="is-on" aria-current="true">EN</span><span>ZH</span><span>JA</span><span>FR</span><span>DE</span></p>
<!-- /wp:html --><!-- wp:paragraph {"className":"ko-pill ko-header__cta"} -->
<p class="ko-pill ko-header__cta"><a href="/request/"><?php echo esc_html( koe_interpreters_t( 'kff78594b' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
