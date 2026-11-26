<?php
/**
 * Title: Home: notice strip
 * Slug: noki-surveyors/front-notice
 * Categories: noki-surveyors
 * Viewport Width: 1440
 * Description: Grey notice strip with a bold label, a purple Latin sub-label and one underlined line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nk-notice","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-notice">
<!-- wp:group {"className":"nk-notice__box","layout":{"type":"default"}} -->
<div class="wp-block-group nk-notice__box">
<!-- wp:group {"className":"nk-notice__label","layout":{"type":"default"}} -->
<div class="wp-block-group nk-notice__label">
<!-- wp:paragraph {"className":"nk-notice__t"} -->
<p class="nk-notice__t"><?php echo esc_html( noki_surveyors_t( 'notice_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-notice__s"} -->
<p class="nk-notice__s"><?php echo esc_html( noki_surveyors_t( 'notice_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"nk-notice__line"} -->
<p class="nk-notice__line"><a href="#questions"><?php echo esc_html( noki_surveyors_t( 'notice_line' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
