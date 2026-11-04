<?php
/**
 * Title: Header: language and request pill
 * Slug: sokuten-survey/head-util
 * Categories: sokuten-survey
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ss-util","layout":{"type":"default"}} -->
<div class="wp-block-group ss-util">
<!-- wp:paragraph {"className":"ss-lang"} -->
<p class="ss-lang"><span class="is-current">EN</span> <span>ZH</span> <span>JA</span> <span>FR</span> <span>DE</span></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ss-pill-wrap","layout":{"type":"flex"}} -->
<div class="wp-block-buttons ss-pill-wrap"><!-- wp:button {"className":"ss-pill ss-pill--sm"} -->
<div class="wp-block-button ss-pill ss-pill--sm"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/request-a-visit/' ) ); ?>"><?php echo esc_html( sokuten_survey_t( 'cta_request' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
