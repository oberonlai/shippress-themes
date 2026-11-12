<?php
/**
 * Title: Template: case notes page
 * Slug: haru-allergy/tpl-home
 * Categories: haru-allergy
 * Keywords: tpl-home
 * Viewport Width: 1440
 * Description: Case notes posts page: photo head, short introduction, slate card grid.
 */
?>
<!-- wp:group {"className":"ha-kv ha-kv--page ha-head","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ha-kv ha-kv--page ha-head"><!-- wp:cover {"url":"<?php echo haru_allergy_img( 'p16-reception' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":70,"minHeightUnit":"svh","className":"ha-kv__stage sp-parallax"} -->
<div class="wp-block-cover ha-kv__stage sp-parallax" style="min-height:70svh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p16' ) ); ?>" src="<?php echo haru_allergy_img( 'p16-reception' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"ha-head__kicker"} -->
<p class="ha-head__kicker"><?php echo esc_html( haru_allergy_t( 'head_kicker' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"ha-kv__veil ha-kv__veil--page","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull ha-kv__veil ha-kv__veil--page"><!-- wp:group {"className":"ha-kv__veil-in","layout":{"type":"default"}} -->
<div class="wp-block-group ha-kv__veil-in"><!-- wp:heading {"level":1,"className":"ha-head__title"} -->
<h1 class="wp-block-heading ha-head__title"><?php echo haru_allergy_lines( 'h_cn' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ha-poem sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ha-poem sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo haru_allergy_lines( 'cn_i1' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo haru_allergy_lines( 'cn_i2' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-prose","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ha-prose"><!-- wp:group {"className":"ha-prose__in","layout":{"type":"default"}} -->
<div class="wp-block-group ha-prose__in"><!-- wp:heading {"level":2,"className":"ha-prose__h sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading ha-prose__h sp-reveal sp-reveal--mask"><?php echo esc_html( haru_allergy_t( 'cn_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ha-prose__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ha-prose__body sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( haru_allergy_t( 'cn_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( haru_allergy_t( 'cn_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( haru_allergy_t( 'cn_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"haru-allergy/tpl-grid"} /-->
