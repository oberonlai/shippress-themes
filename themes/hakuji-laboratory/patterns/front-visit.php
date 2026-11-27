<?php
/**
 * Title: Home: pick-up and hours
 * Slug: hakuji-laboratory/front-visit
 * Categories: hakuji-laboratory
 * Viewport Width: 1440
 * Description: Full-bleed photo band with a white panel at the right (40px bottom-left radius) holding the address, pick-up times, hours, phone and email.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"visit","align":"full","className":"hk-visit-wrap","layout":{"type":"default"}} -->
<section id="visit" class="wp-block-group alignfull hk-visit-wrap">
<!-- wp:cover {"url":"<?php echo hakuji_laboratory_img( 'img-12.webp' ); ?>","dimRatio":20,"overlayColor":"contrast","align":"full","className":"hk-visit"} -->
<div class="wp-block-cover alignfull hk-visit"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo hakuji_laboratory_a( 'alt_img12' ); ?>" src="<?php echo hakuji_laboratory_img( 'img-12.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"hk-panel","layout":{"type":"default"}} -->
<div class="wp-block-group hk-panel">
<!-- wp:heading {"level":2,"className":"hk-panel__h"} -->
<h2 class="wp-block-heading hk-panel__h"><?php echo esc_html( hakuji_laboratory_t( 'visit_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-panel__a"} -->
<p class="hk-panel__a"><?php echo esc_html( hakuji_laboratory_t( 'visit_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-panel__a"} -->
<p class="hk-panel__a"><?php echo esc_html( hakuji_laboratory_t( 'visit_pick' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<table class="hk-hours"><tbody><tr><th scope="row"><?php echo esc_html( hakuji_laboratory_t( 'hours_1_d' ) ); ?></th><td><?php echo esc_html( hakuji_laboratory_t( 'hours_1_t' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hakuji_laboratory_t( 'hours_2_d' ) ); ?></th><td><?php echo esc_html( hakuji_laboratory_t( 'hours_2_t' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hakuji_laboratory_t( 'hours_3_d' ) ); ?></th><td><?php echo esc_html( hakuji_laboratory_t( 'hours_3_t' ) ); ?></td></tr></tbody></table>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"hk-panel__a"} -->
<p class="hk-panel__a"><?php echo esc_html( hakuji_laboratory_t( 'visit_tel' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-panel__a"} -->
<p class="hk-panel__a"><a href="mailto:<?php echo esc_html( hakuji_laboratory_t( 'email' ) ); ?>"><?php echo esc_html( hakuji_laboratory_t( 'email' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
</section>
<!-- /wp:group -->
