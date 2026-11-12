<?php
/**
 * Title: Home: the problem (edge portraits)
 * Slug: haru-allergy/front-problem
 * Categories: haru-allergy
 * Keywords: problem, portraits
 * Viewport Width: 1440
 * Description: Two tall portraits flush to the left and right viewport edges at different heights with a narrow heading between them, then a text column with a veiled photo behind its lower left.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ha-problem","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ha-problem"><!-- wp:group {"className":"ha-problem__row1","layout":{"type":"default"}} -->
<div class="wp-block-group ha-problem__row1"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-problem__a"} -->
<figure class="wp-block-image size-full ha-problem__a"><img src="<?php echo haru_allergy_img( 'p02-forearm' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"className":"ha-problem__h sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading ha-problem__h sp-reveal sp-reveal--mask"><?php echo haru_allergy_lines( 'pr_h' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-problem__b"} -->
<figure class="wp-block-image size-full ha-problem__b"><img src="<?php echo haru_allergy_img( 'p03-inhaler' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-problem__row2","layout":{"type":"default"}} -->
<div class="wp-block-group ha-problem__row2"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-problem__c"} -->
<figure class="wp-block-image size-full ha-problem__c"><img src="<?php echo haru_allergy_img( 'p04-curtain' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ha-problem__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ha-problem__text sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( haru_allergy_t( 'fp_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( haru_allergy_t( 'fp_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( haru_allergy_t( 'fp_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
