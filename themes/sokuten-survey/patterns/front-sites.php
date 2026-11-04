<?php
/**
 * Title: Home: which sites a visit suits
 * Slug: sokuten-survey/front-sites
 * Categories: sokuten-survey
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ss-sec ss-sites","tagName":"section","align":"full","anchor":"sites","layout":{"type":"constrained"}} -->
<section id="sites" class="wp-block-group alignfull ss-sec ss-sites">
<!-- wp:paragraph {"className":"ss-eyebrow"} -->
<p class="ss-eyebrow"><?php echo esc_html( sokuten_survey_t( 'eb_sites' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-h2"} -->
<h2 class="wp-block-heading ss-h2"><?php echo esc_html( sokuten_survey_t( 'sites_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-intro"} -->
<p class="ss-intro"><?php echo esc_html( sokuten_survey_t( 'sites_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ss-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ss-cards sp-stagger">
<!-- wp:group {"className":"ss-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ss-card__img","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/site-plot.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p07_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ss-card__cap"} -->
<p class="ss-card__cap"><?php echo esc_html( sokuten_survey_t( 'card1_name' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-card__text"} -->
<p class="ss-card__text"><?php echo esc_html( sokuten_survey_t( 'card1_body' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ss-card__img","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/site-boundary.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p08_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ss-card__cap"} -->
<p class="ss-card__cap"><?php echo esc_html( sokuten_survey_t( 'card2_name' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-card__text"} -->
<p class="ss-card__text"><?php echo esc_html( sokuten_survey_t( 'card2_body' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card sp-reveal sp-reveal--up">
<!-- wp:group {"className":"ss-card__img","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/site-buy.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p09_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ss-card__cap"} -->
<p class="ss-card__cap"><?php echo esc_html( sokuten_survey_t( 'card3_name' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-card__text"} -->
<p class="ss-card__text"><?php echo esc_html( sokuten_survey_t( 'card3_body' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ss-dotline"} -->
<p class="ss-dotline"><?php echo esc_html( sokuten_survey_t( 'sites_notfor' ) ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
