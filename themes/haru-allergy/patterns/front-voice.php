<?php
/**
 * Title: Home: voices (rounded paper card)
 * Slug: haru-allergy/front-voice
 * Categories: haru-allergy
 * Keywords: voices, quotes
 * Viewport Width: 1440
 * Description: A rounded paper card with a ruled footer and a dot pager beside a tall 2:3 photo; three slides in a scroll-snap track.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ha-voice sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ha-voice sp-reveal sp-reveal--up"><!-- wp:group {"className":"ha-voice__in","layout":{"type":"default"}} -->
<div class="wp-block-group ha-voice__in"><!-- wp:heading {"className":"ha-voice__h"} -->
<h2 class="wp-block-heading ha-voice__h"><?php echo esc_html( haru_allergy_t( 'vo_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ha-voice__track","layout":{"type":"default"}} -->
<div class="wp-block-group ha-voice__track">
<!-- wp:group {"className":"ha-slide","layout":{"type":"default"}} -->
<div class="wp-block-group ha-slide" id="voice-1"><!-- wp:group {"className":"ha-card3","layout":{"type":"default"}} -->
<div class="wp-block-group ha-card3"><!-- wp:heading {"level":3,"className":"ha-card3__t"} -->
<h3 class="wp-block-heading ha-card3__t"><?php echo esc_html( haru_allergy_t( 'vo_1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ha-card3__q"} -->
<p class="ha-card3__q"><?php echo esc_html( haru_allergy_t( 'vo_1_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-card3__by"} -->
<p class="ha-card3__by"><?php echo esc_html( haru_allergy_t( 'vo_1_by' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-slide__photo"} -->
<figure class="wp-block-image size-full ha-slide__photo"><img src="<?php echo haru_allergy_img( 'p09-windowsill' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-slide","layout":{"type":"default"}} -->
<div class="wp-block-group ha-slide" id="voice-2"><!-- wp:group {"className":"ha-card3","layout":{"type":"default"}} -->
<div class="wp-block-group ha-card3"><!-- wp:heading {"level":3,"className":"ha-card3__t"} -->
<h3 class="wp-block-heading ha-card3__t"><?php echo esc_html( haru_allergy_t( 'vo_2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ha-card3__q"} -->
<p class="ha-card3__q"><?php echo esc_html( haru_allergy_t( 'vo_2_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-card3__by"} -->
<p class="ha-card3__by"><?php echo esc_html( haru_allergy_t( 'vo_2_by' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-slide__photo"} -->
<figure class="wp-block-image size-full ha-slide__photo"><img src="<?php echo haru_allergy_img( 'p14-walk' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p14' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-slide","layout":{"type":"default"}} -->
<div class="wp-block-group ha-slide" id="voice-3"><!-- wp:group {"className":"ha-card3","layout":{"type":"default"}} -->
<div class="wp-block-group ha-card3"><!-- wp:heading {"level":3,"className":"ha-card3__t"} -->
<h3 class="wp-block-heading ha-card3__t"><?php echo esc_html( haru_allergy_t( 'vo_3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ha-card3__q"} -->
<p class="ha-card3__q"><?php echo esc_html( haru_allergy_t( 'vo_3_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-card3__by"} -->
<p class="ha-card3__by"><?php echo esc_html( haru_allergy_t( 'vo_3_by' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-slide__photo"} -->
<figure class="wp-block-image size-full ha-slide__photo"><img src="<?php echo haru_allergy_img( 'p15-watering' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p15' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<nav class="ha-dots" aria-label="<?php echo esc_attr( haru_allergy_t( 'vo_dot' ) ); ?>"><a href="#voice-1" aria-label="1"></a><a href="#voice-2" aria-label="2"></a><a href="#voice-3" aria-label="3"></a></nav>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
