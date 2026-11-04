<?php
/**
 * Title: 404
 * Slug: sokuten-survey/tpl-404
 * Categories: sokuten-survey
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ss-sec","tagName":"section","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ss-sec">
<!-- wp:heading {"level":1,"className":"ss-tag__main"} -->
<h1 class="wp-block-heading ss-tag__main"><?php echo esc_html( sokuten_survey_t( 'e404_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-intro"} -->
<p class="ss-intro"><?php echo esc_html( sokuten_survey_t( 'e404_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-fig__n"} -->
<p class="ss-fig__n">404</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ss-btn-wrap","layout":{"type":"flex"}} -->
<div class="wp-block-buttons ss-btn-wrap"><!-- wp:button {"className":"is-style-outline ss-btn"} -->
<div class="wp-block-button is-style-outline ss-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( sokuten_survey_t( 'e404_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
