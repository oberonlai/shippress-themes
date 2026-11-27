<?php
/**
 * Title: Home: how a case is uploaded
 * Slug: hakuji-laboratory/front-upload
 * Categories: hakuji-laboratory
 * Viewport Width: 1440
 * Description: Photo with a top-right radius at the left; title lockup, intro, four ruled steps, format chips and an outline button at the right.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"upload","align":"full","className":"hk-upload","layout":{"type":"default"}} -->
<section id="upload" class="wp-block-group alignfull hk-upload">
<!-- wp:group {"className":"hk-inner hk-upload__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hk-inner hk-upload__grid">
<!-- wp:group {"className":"hk-upload__photo","layout":{"type":"default"}} -->
<div class="wp-block-group hk-upload__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-upload__img"} -->
<figure class="wp-block-image size-full hk-upload__img"><img src="<?php echo hakuji_laboratory_img( 'img-10.webp' ); ?>" alt="<?php echo hakuji_laboratory_a( 'alt_img10' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-upload__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-upload__text">
<!-- wp:group {"className":"hk-upload__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-upload__head sp-reveal sp-reveal--up">
<!-- wp:group {"className":"hk-lock","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lock">
<!-- wp:paragraph {"className":"hk-lock__w"} -->
<p class="hk-lock__w"><?php echo esc_html( hakuji_laboratory_t( 'lock_upload' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-lock__l"} -->
<p class="hk-lock__l"><?php echo esc_html( hakuji_laboratory_t( 'lock_upload_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"hk-body"} -->
<p class="hk-body"><?php echo esc_html( hakuji_laboratory_t( 'upload_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-steps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hk-steps sp-stagger">
<!-- wp:group {"className":"hk-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-step sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-step__i"} -->
<p class="hk-step__i">01</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"hk-step__b","layout":{"type":"default"}} -->
<div class="wp-block-group hk-step__b">
<!-- wp:paragraph {"className":"hk-step__t"} -->
<p class="hk-step__t"><?php echo esc_html( hakuji_laboratory_t( 'step_1_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-step__p"} -->
<p class="hk-step__p"><?php echo esc_html( hakuji_laboratory_t( 'step_1_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-step sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-step__i"} -->
<p class="hk-step__i">02</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"hk-step__b","layout":{"type":"default"}} -->
<div class="wp-block-group hk-step__b">
<!-- wp:paragraph {"className":"hk-step__t"} -->
<p class="hk-step__t"><?php echo esc_html( hakuji_laboratory_t( 'step_2_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-step__p"} -->
<p class="hk-step__p"><?php echo esc_html( hakuji_laboratory_t( 'step_2_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-step sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-step__i"} -->
<p class="hk-step__i">03</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"hk-step__b","layout":{"type":"default"}} -->
<div class="wp-block-group hk-step__b">
<!-- wp:paragraph {"className":"hk-step__t"} -->
<p class="hk-step__t"><?php echo esc_html( hakuji_laboratory_t( 'step_3_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-step__p"} -->
<p class="hk-step__p"><?php echo esc_html( hakuji_laboratory_t( 'step_3_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-step sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-step__i"} -->
<p class="hk-step__i">04</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"hk-step__b","layout":{"type":"default"}} -->
<div class="wp-block-group hk-step__b">
<!-- wp:paragraph {"className":"hk-step__t"} -->
<p class="hk-step__t"><?php echo esc_html( hakuji_laboratory_t( 'step_4_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-step__p"} -->
<p class="hk-step__p"><?php echo esc_html( hakuji_laboratory_t( 'step_4_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-upload__foot sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-upload__foot sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-chips__l"} -->
<p class="hk-chips__l"><?php echo esc_html( hakuji_laboratory_t( 'formats_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-chips"} -->
<p class="hk-chips"><span>STL</span><span>PLY</span><span>OBJ</span><span>DCM</span></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"hk-pill"} -->
<div class="wp-block-buttons hk-pill"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/upload-guide/"><?php echo esc_html( hakuji_laboratory_t( 'btn_upload' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
