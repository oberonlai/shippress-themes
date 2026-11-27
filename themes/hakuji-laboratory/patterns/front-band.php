<?php
/**
 * Title: Home: from the bench band
 * Slug: hakuji-laboratory/front-band
 * Categories: hakuji-laboratory
 * Viewport Width: 1440
 * Description: Full-bleed photo band with parallax; ghost title left, narrative paragraph and white outline button right.
 */
?>
<!-- wp:cover {"url":"<?php echo hakuji_laboratory_img( 'img-05.webp' ); ?>","dimRatio":30,"overlayColor":"contrast","align":"full","className":"hk-band sp-parallax"} -->
<div class="wp-block-cover alignfull hk-band sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo hakuji_laboratory_a( 'alt_img05' ); ?>" src="<?php echo hakuji_laboratory_img( 'img-05.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"hk-band__in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-band__in">
<!-- wp:heading {"level":2,"className":"hk-ghost hk-ghost--band"} -->
<h2 class="wp-block-heading hk-ghost hk-ghost--band"><?php echo esc_html( hakuji_laboratory_t( 'band_title' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-band__label"} -->
<p class="hk-band__label"><?php echo esc_html( hakuji_laboratory_t( 'band_label' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-band__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-band__text sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-band__p"} -->
<p class="hk-band__p"><?php echo esc_html( hakuji_laboratory_t( 'band_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"hk-pill hk-pill--white"} -->
<div class="wp-block-buttons hk-pill hk-pill--white"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( hakuji_laboratory_t( 'btn_lab' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
