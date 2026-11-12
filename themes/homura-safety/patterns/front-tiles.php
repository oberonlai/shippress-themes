<?php
/**
 * Title: Home: premises scrim tiles
 * Slug: homura-safety/front-tiles
 * Categories: homura-safety
 * Keywords: tiles, premises
 * Viewport Width: 1440
 * Description: Three equal photo tiles with a dark scrim and a centred title.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hs-sec hs-sec--pale hs-tiles","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-sec hs-sec--pale hs-tiles"><!-- wp:group {"align":"wide","className":"hs-title hs-title--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-title hs-title--row"><!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up"><?php echo esc_html( homura_safety_t( 'ti_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'ti_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hs-tiles__row sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-tiles__row sp-stagger"><!-- wp:group {"className":"hs-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hs-tile sp-reveal sp-reveal--up"><!-- wp:image {"aspectRatio":"1.3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo homura_safety_img( 'hs-05-food-hall' ); ?>" alt="<?php echo esc_attr( homura_safety_t( 'alt_05' ) ); ?>" style="aspect-ratio:1.3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hs-tile__text","layout":{"type":"default"}} -->
<div class="wp-block-group hs-tile__text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'ti1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'ti1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hs-tile sp-reveal sp-reveal--up"><!-- wp:image {"aspectRatio":"1.3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo homura_safety_img( 'hs-06-workshop' ); ?>" alt="<?php echo esc_attr( homura_safety_t( 'alt_06' ) ); ?>" style="aspect-ratio:1.3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hs-tile__text","layout":{"type":"default"}} -->
<div class="wp-block-group hs-tile__text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'ti2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'ti2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hs-tile sp-reveal sp-reveal--up"><!-- wp:image {"aspectRatio":"1.3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo homura_safety_img( 'hs-07-clinic-corridor' ); ?>" alt="<?php echo esc_attr( homura_safety_t( 'alt_07' ) ); ?>" style="aspect-ratio:1.3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hs-tile__text","layout":{"type":"default"}} -->
<div class="wp-block-group hs-tile__text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'ti3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'ti3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
