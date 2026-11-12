<?php
/**
 * Title: Home: parallax visit band
 * Slug: homura-safety/front-visit
 * Categories: homura-safety
 * Keywords: process, parallax, steps
 * Viewport Width: 1440
 * Description: A full-width corridor photo band with parallax and a white panel listing the four steps of the visit.
 */
?>
<!-- wp:cover {"url":"<?php echo homura_safety_img( 'hs-08-corridor-walk' ); ?>","dimRatio":20,"focalPoint":{"x":0.5,"y":0.5},"minHeight":560,"minHeightUnit":"px","align":"full","anchor":"process","className":"hs-visit sp-parallax","layout":{"type":"default"}} -->
<div id="process" class="wp-block-cover alignfull hs-visit sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( homura_safety_t( 'alt_08' ) ); ?>" src="<?php echo homura_safety_img( 'hs-08-corridor-walk' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"hs-visit__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-visit__in"><!-- wp:group {"className":"hs-visit__panel","layout":{"type":"default"}} -->
<div class="wp-block-group hs-visit__panel"><!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'pr_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'pr_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-steps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hs-steps sp-stagger"><!-- wp:paragraph {"className":"hs-step sp-reveal sp-reveal--left"} -->
<p class="hs-step sp-reveal sp-reveal--left"><span class="hs-step__n"><?php echo esc_html( homura_safety_t( 'pr1_n' ) ); ?></span> <strong><?php echo esc_html( homura_safety_t( 'pr1_h' ) ); ?></strong> <?php echo esc_html( homura_safety_t( 'pr1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-step sp-reveal sp-reveal--left"} -->
<p class="hs-step sp-reveal sp-reveal--left"><span class="hs-step__n"><?php echo esc_html( homura_safety_t( 'pr2_n' ) ); ?></span> <strong><?php echo esc_html( homura_safety_t( 'pr2_h' ) ); ?></strong> <?php echo esc_html( homura_safety_t( 'pr2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-step sp-reveal sp-reveal--left"} -->
<p class="hs-step sp-reveal sp-reveal--left"><span class="hs-step__n"><?php echo esc_html( homura_safety_t( 'pr3_n' ) ); ?></span> <strong><?php echo esc_html( homura_safety_t( 'pr3_h' ) ); ?></strong> <?php echo esc_html( homura_safety_t( 'pr3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-step sp-reveal sp-reveal--left"} -->
<p class="hs-step sp-reveal sp-reveal--left"><span class="hs-step__n"><?php echo esc_html( homura_safety_t( 'pr4_n' ) ); ?></span> <strong><?php echo esc_html( homura_safety_t( 'pr4_h' ) ); ?></strong> <?php echo esc_html( homura_safety_t( 'pr4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
