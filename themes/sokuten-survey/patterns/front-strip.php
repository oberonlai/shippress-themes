<?php
/**
 * Title: Home: tagline and accordion photo strip
 * Slug: sokuten-survey/front-strip
 * Categories: sokuten-survey
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ss-hero","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-hero">
<!-- wp:group {"className":"ss-tag","layout":{"type":"default"}} -->
<div class="wp-block-group ss-tag">
<!-- wp:heading {"level":1,"className":"ss-tag__main"} -->
<h1 class="wp-block-heading ss-tag__main"><?php echo sokuten_survey_lines( 'hero_title' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-tag__sub"} -->
<p class="ss-tag__sub"><?php echo esc_html( sokuten_survey_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-strip","layout":{"type":"default"}} -->
<div class="wp-block-group ss-strip">
<!-- wp:group {"className":"ss-panel","layout":{"type":"default"}} -->
<div class="wp-block-group ss-panel">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pin.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p02_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ss-panel__label"} -->
<p class="ss-panel__label"><?php echo esc_html( sokuten_survey_t( 'strip_lab1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-panel__caption"} -->
<p class="ss-panel__caption"><a href="#hour"><?php echo esc_html( sokuten_survey_t( 'strip_cap1' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-panel","layout":{"type":"default"}} -->
<div class="wp-block-group ss-panel">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stakes.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p03_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ss-panel__label"} -->
<p class="ss-panel__label"><?php echo esc_html( sokuten_survey_t( 'strip_lab2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-panel__caption"} -->
<p class="ss-panel__caption"><a href="#hour"><?php echo esc_html( sokuten_survey_t( 'strip_cap2' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-panel is-open ss-panel--key","layout":{"type":"default"}} -->
<div class="wp-block-group ss-panel is-open ss-panel--key">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kv-visit.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p01_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ss-panel__label"} -->
<p class="ss-panel__label"><?php echo esc_html( sokuten_survey_t( 'strip_lab3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-panel__caption"} -->
<p class="ss-panel__caption"><a href="#sites"><?php echo esc_html( sokuten_survey_t( 'strip_cap3' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-panel","layout":{"type":"default"}} -->
<div class="wp-block-group ss-panel">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/instrument.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p04_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ss-panel__label"} -->
<p class="ss-panel__label"><?php echo esc_html( sokuten_survey_t( 'strip_lab4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-panel__caption"} -->
<p class="ss-panel__caption"><a href="#hour"><?php echo esc_html( sokuten_survey_t( 'strip_cap4' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-panel","layout":{"type":"default"}} -->
<div class="wp-block-group ss-panel">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/fence-tape.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p05_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ss-panel__label"} -->
<p class="ss-panel__label"><?php echo esc_html( sokuten_survey_t( 'strip_lab5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-panel__caption"} -->
<p class="ss-panel__caption"><a href="#notes"><?php echo esc_html( sokuten_survey_t( 'strip_cap5' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-panel","layout":{"type":"default"}} -->
<div class="wp-block-group ss-panel">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/aerial-lot.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p06_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ss-panel__label"} -->
<p class="ss-panel__label"><?php echo esc_html( sokuten_survey_t( 'strip_lab6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-panel__caption"} -->
<p class="ss-panel__caption"><a href="#takeaway"><?php echo esc_html( sokuten_survey_t( 'strip_cap6' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
