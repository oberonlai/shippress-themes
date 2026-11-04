<?php
/**
 * Title: Home: parallax photograph
 * Slug: sokuten-survey/front-ground
 * Categories: sokuten-survey
 * Viewport Width: 1440
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/wide-lot.webp' ) ); ?>","dimRatio":0,"minHeight":640,"contentPosition":"bottom left","isDark":false,"align":"full","className":"sp-parallax ss-ground"} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-bottom-left sp-parallax ss-ground" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( sokuten_survey_t( 'p11_alt' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/wide-lot.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"ss-ground__panel","layout":{"type":"default"}} -->
<div class="wp-block-group ss-ground__panel">
<!-- wp:paragraph {"className":"ss-eyebrow"} -->
<p class="ss-eyebrow"><?php echo esc_html( sokuten_survey_t( 'eb_ground' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-ground__line"} -->
<p class="ss-ground__line"><?php echo esc_html( sokuten_survey_t( 'ground_line' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
