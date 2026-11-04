<?php
/**
 * Title: Request band: contact page (mailto)
 * Slug: sokuten-survey/band-contact
 * Categories: sokuten-survey
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ss-band","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-band">
<!-- wp:group {"className":"ss-band__cols","layout":{"type":"default"}} -->
<div class="wp-block-group ss-band__cols">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ss-band__photo"} -->
<figure class="wp-block-image size-full ss-band__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kv-visit.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p01_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ss-band__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-band__text sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ss-eyebrow"} -->
<p class="ss-eyebrow"><?php echo esc_html( sokuten_survey_t( 'eb_request' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-h2"} -->
<h2 class="wp-block-heading ss-h2"><?php echo esc_html( sokuten_survey_t( 'request_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-band__line"} -->
<p class="ss-band__line"><?php echo esc_html( sokuten_survey_t( 'request_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-band__line"} -->
<p class="ss-band__line"><?php echo esc_html( sokuten_survey_t( 'request_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-band__line"} -->
<p class="ss-band__line"><?php echo esc_html( sokuten_survey_t( 'request_l3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ss-pill-wrap","layout":{"type":"flex"}} -->
<div class="wp-block-buttons ss-pill-wrap"><!-- wp:button {"className":"ss-pill"} -->
<div class="wp-block-button ss-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:visits@sokuten.example?subject=Visit%20request' ); ?>"><?php echo esc_html( sokuten_survey_t( 'cta_request' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
