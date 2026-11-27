<?php
/**
 * Title: Template: pickup row and foot band
 * Slug: shirogane-college/tpl-foot
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Where-to-next pickup tiles and the foot call-to-action band for the news templates.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"next","align":"full","className":"sg-sec sg-sec--picks","layout":{"type":"default"}} -->
<section id="next" class="wp-block-group alignfull sg-sec sg-sec--picks">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'nx_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'nx_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="sg-picks sp-stagger"><a class="sg-pick sp-reveal sp-reveal--up" href="/visit/#ward-visit"><span class="sg-pick__ico" style="--sg-tile:#8E6E2A"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 20.5v-17h12v17"/><path d="M4 20.5h16M14.5 12v1"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx3' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/admissions/#apply"><span class="sg-pick__ico" style="--sg-tile:#5C6B48"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="5.5" width="16" height="14"/><path d="M4 10h16M8.5 3.5v4M15.5 3.5v4"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx7' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/newsletter/"><span class="sg-pick__ico" style="--sg-tile:#657A3E"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 8a5 5 0 0 1 10 0v11.5H7z"/><path d="M9.5 8h5M7 14h10M10 14v3h4v-3"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx12' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"sg-cta","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-cta">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-cta__in","layout":{"type":"default"}} -->
<div class="wp-block-group sg-cta__in">
<!-- wp:paragraph {"className":"sg-cta__t"} -->
<p class="sg-cta__t"><?php echo esc_html( shirogane_college_t( 'cta_line' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"sg-btns"} -->
<div class="wp-block-buttons sg-btns"><!-- wp:button {"className":"sg-btn"} -->
<div class="wp-block-button sg-btn"><a class="wp-block-button__link wp-element-button" href="/admissions/#apply"><?php echo esc_html( shirogane_college_t( 'cta_apply' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"sg-btn sg-btn--outline"} -->
<div class="wp-block-button sg-btn sg-btn--outline"><a class="wp-block-button__link wp-element-button" href="/visit/#ward-visit"><?php echo esc_html( shirogane_college_t( 'cta_visit' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
