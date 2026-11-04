<?php
/**
 * Title: Home: what you leave with
 * Slug: sokuten-survey/front-takeaway
 * Categories: sokuten-survey
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ss-sec ss-take","tagName":"section","align":"full","layout":{"type":"constrained"}} -->
<section id="takeaway" class="wp-block-group alignfull ss-sec ss-take">
<!-- wp:group {"className":"ss-take__cols","layout":{"type":"default"}} -->
<div class="wp-block-group ss-take__cols">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ss-take__photo"} -->
<figure class="wp-block-image size-full ss-take__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/takeaway.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p14_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ss-take__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-take__text sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ss-eyebrow"} -->
<p class="ss-eyebrow"><?php echo esc_html( sokuten_survey_t( 'eb_take' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-h2"} -->
<h2 class="wp-block-heading ss-h2"><?php echo esc_html( sokuten_survey_t( 'take_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-intro"} -->
<p class="ss-intro"><?php echo esc_html( sokuten_survey_t( 'take_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-dotitem"} -->
<p class="ss-dotitem"><?php echo esc_html( sokuten_survey_t( 'take1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-dotitem"} -->
<p class="ss-dotitem"><?php echo esc_html( sokuten_survey_t( 'take2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-dotitem"} -->
<p class="ss-dotitem"><?php echo esc_html( sokuten_survey_t( 'take3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
