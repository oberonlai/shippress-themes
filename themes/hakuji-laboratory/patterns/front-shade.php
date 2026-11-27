<?php
/**
 * Title: Home: shade room sheet
 * Slug: hakuji-laboratory/front-shade
 * Categories: hakuji-laboratory
 * Viewport Width: 1440
 * Description: Pale-wash sheet with a 40px top radius lying over the bottom of the band: text left, 3:2 photo with a rounded top-left corner right.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"shade","align":"full","className":"hk-sheet hk-sheet--t hk-shade","layout":{"type":"default"}} -->
<section id="shade" class="wp-block-group alignfull hk-sheet hk-sheet--t hk-shade">
<!-- wp:group {"className":"hk-inner hk-split","layout":{"type":"default"}} -->
<div class="wp-block-group hk-inner hk-split">
<!-- wp:group {"className":"hk-split__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-split__text sp-reveal sp-reveal--up">
<!-- wp:group {"className":"hk-lock","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lock">
<!-- wp:paragraph {"className":"hk-lock__w"} -->
<p class="hk-lock__w"><?php echo esc_html( hakuji_laboratory_t( 'lock_shade' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-lock__l"} -->
<p class="hk-lock__l"><?php echo esc_html( hakuji_laboratory_t( 'lock_shade_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":2,"className":"hk-h2"} -->
<h2 class="wp-block-heading hk-h2"><?php echo esc_html( hakuji_laboratory_t( 'shade_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hk-body"} -->
<p class="hk-body"><?php echo esc_html( hakuji_laboratory_t( 'shade_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-note"} -->
<p class="hk-note"><?php echo esc_html( hakuji_laboratory_t( 'shade_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"hk-pill"} -->
<div class="wp-block-buttons hk-pill"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( hakuji_laboratory_t( 'btn_shade' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-split__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-split__photo sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-shade__img"} -->
<figure class="wp-block-image size-full hk-shade__img"><img src="<?php echo hakuji_laboratory_img( 'img-06.webp' ); ?>" alt="<?php echo hakuji_laboratory_a( 'alt_img06' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
