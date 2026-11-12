<?php
/**
 * Title: Home: pinned photo and rising poem
 * Slug: haru-allergy/front-kv
 * Categories: haru-allergy
 * Keywords: hero, stage, poem
 * Viewport Width: 1440
 * Description: A full-bleed high-key photo pinned to the first screen with the wordmark, tagline and info bar; a blurred slate veil rises over it while four stanzas appear one by one.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ha-kv","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ha-kv"><!-- wp:cover {"url":"<?php echo haru_allergy_img( 'p01-skin-prick' ); ?>","dimRatio":0,"focalPoint":{"x":0.62,"y":0.45},"minHeight":100,"minHeightUnit":"svh","className":"ha-kv__stage sp-parallax"} -->
<div class="wp-block-cover ha-kv__stage sp-parallax" style="min-height:100svh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p01' ) ); ?>" src="<?php echo haru_allergy_img( 'p01-skin-prick' ); ?>" style="object-position:62% 45%" data-object-fit="cover" data-object-position="62% 45%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ha-kv__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ha-kv__grid"><!-- wp:paragraph {"className":"ha-kv__desc"} -->
<p class="ha-kv__desc"><?php echo haru_allergy_lines( 'kv_desc' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-kv__tag"} -->
<p class="ha-kv__tag"><?php echo haru_allergy_lines( 'kv_tag' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ha-kv__mark","layout":{"type":"default"}} -->
<div class="wp-block-group ha-kv__mark"><!-- wp:heading {"level":1,"className":"ha-kv__word"} -->
<h1 class="wp-block-heading ha-kv__word"><?php echo esc_html( haru_allergy_t( 'brand_name' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ha-kv__sub"} -->
<p class="ha-kv__sub"><?php echo esc_html( haru_allergy_t( 'brand_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ha-kv__cue"} -->
<p class="ha-kv__cue"><?php echo esc_html( haru_allergy_t( 'kv_cue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ha-kv__bar","layout":{"type":"default"}} -->
<div class="wp-block-group ha-kv__bar"><!-- wp:paragraph {"className":"ha-kv__bar-text"} -->
<p class="ha-kv__bar-text"><?php $segs = explode( ' · ', haru_allergy_t( 'kv_bar' ) ); foreach ( $segs as $i => $seg ) { echo '<span class="ha-kv__seg">' . esc_html( $seg . ( $i < count( $segs ) - 1 ? ' ·' : '' ) ) . '</span> '; } ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ha-kv__btn is-style-outline"} -->
<div class="wp-block-buttons ha-kv__btn is-style-outline"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( haru_allergy_t( 'kv_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","className":"ha-kv__veil","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ha-kv__veil"><!-- wp:group {"className":"ha-kv__veil-in","layout":{"type":"default"}} -->
<div class="wp-block-group ha-kv__veil-in"><!-- wp:paragraph {"className":"ha-kv__latin"} -->
<p class="ha-kv__latin"><?php echo esc_html( haru_allergy_t( 'kv_latin' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ha-poem sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ha-poem sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo haru_allergy_lines( 'kv_s1' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo haru_allergy_lines( 'kv_s2' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo haru_allergy_lines( 'kv_s3' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo haru_allergy_lines( 'kv_s4' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up ha-poem__link"} -->
<p class="sp-reveal sp-reveal--up ha-poem__link"><a href="/first-visit/"><?php echo esc_html( haru_allergy_t( 'kv_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
