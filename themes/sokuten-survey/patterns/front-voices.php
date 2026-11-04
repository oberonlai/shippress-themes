<?php
/**
 * Title: Home: owners and builders
 * Slug: sokuten-survey/front-voices
 * Categories: sokuten-survey
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ss-sec ss-voices","tagName":"section","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ss-sec ss-voices">
<!-- wp:paragraph {"className":"ss-eyebrow"} -->
<p class="ss-eyebrow"><?php echo esc_html( sokuten_survey_t( 'eb_voices' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-h2"} -->
<h2 class="wp-block-heading ss-h2"><?php echo esc_html( sokuten_survey_t( 'voices_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ss-voices__cols sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ss-voices__cols sp-stagger">
<!-- wp:group {"className":"ss-voice sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-voice sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ss-voice__photo"} -->
<figure class="wp-block-image size-full ss-voice__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/owner.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p12_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"ss-h3"} -->
<h3 class="wp-block-heading ss-h3"><?php echo esc_html( sokuten_survey_t( 'voice1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-voice__text"} -->
<p class="ss-voice__text"><?php echo esc_html( sokuten_survey_t( 'voice1_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-quote"} -->
<p class="ss-quote">“<?php echo esc_html( sokuten_survey_t( 'voice1_quote' ) ); ?>”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-cite"} -->
<p class="ss-cite"><?php echo esc_html( sokuten_survey_t( 'voice1_who' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-voice sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-voice sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ss-voice__photo"} -->
<figure class="wp-block-image size-full ss-voice__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/builder.webp' ) ); ?>" alt="<?php echo esc_attr( sokuten_survey_t( 'p13_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"ss-h3"} -->
<h3 class="wp-block-heading ss-h3"><?php echo esc_html( sokuten_survey_t( 'voice2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-voice__text"} -->
<p class="ss-voice__text"><?php echo esc_html( sokuten_survey_t( 'voice2_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-quote"} -->
<p class="ss-quote">“<?php echo esc_html( sokuten_survey_t( 'voice2_quote' ) ); ?>”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-cite"} -->
<p class="ss-cite"><?php echo esc_html( sokuten_survey_t( 'voice2_who' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
