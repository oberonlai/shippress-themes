<?php
/**
 * Title: Home: case notes (slate band)
 * Slug: haru-allergy/front-cases
 * Categories: haru-allergy
 * Keywords: cases, posts, query
 * Viewport Width: 1440
 * Description: A slate band over a parallax photo with a white heading and the three newest posts as translucent cards in a horizontal track, with a thin progress line.
 */
?>
<!-- wp:cover {"url":"<?php echo haru_allergy_img( 'p08-waiting' ); ?>","dimRatio":0,"align":"full","className":"ha-cases sp-parallax"} -->
<div class="wp-block-cover alignfull ha-cases sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p08' ) ); ?>" src="<?php echo haru_allergy_img( 'p08-waiting' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ha-cases__in","layout":{"type":"default"}} -->
<div class="wp-block-group ha-cases__in"><!-- wp:paragraph {"className":"ha-cases__label"} -->
<p class="ha-cases__label"><?php echo esc_html( haru_allergy_t( 'ca_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ha-cases__h sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading ha-cases__h sp-reveal sp-reveal--mask"><?php echo haru_allergy_lines( 'ca_h' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ha-cases__q"} -->
<div class="wp-block-query ha-cases__q"><!-- wp:post-template {"className":"ha-cases__track"} -->
<!-- wp:group {"className":"ha-card","layout":{"type":"default"}} -->
<div class="wp-block-group ha-card"><!-- wp:post-featured-image {"isLink":true,"width":"256px","height":"199px","className":"ha-card__thumb"} /-->

<!-- wp:group {"className":"ha-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group ha-card__body"><!-- wp:post-title {"level":3,"isLink":true,"className":"ha-card__title"} /-->

<!-- wp:post-excerpt {"excerptLength":25,"className":"ha-card__excerpt"} /-->

<!-- wp:read-more {"content":"<?php echo esc_attr( haru_allergy_t( 'ca_read' ) ); ?>","className":"ha-card__more"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"className":"ha-cases__foot","layout":{"type":"default"}} -->
<div class="wp-block-group ha-cases__foot"><!-- wp:html -->
<div class="ha-prog" aria-hidden="true"><span></span></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ha-cases__all"} -->
<p class="ha-cases__all"><a href="/case-notes/"><?php echo esc_html( haru_allergy_t( 'ca_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
