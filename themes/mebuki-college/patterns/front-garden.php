<?php
/**
 * Title: Home: the garden at Fernhill
 * Slug: mebuki-college/front-garden
 * Categories: mebuki-college
 * Viewport Width: 1440
 * Description: Full-width photograph that drifts slower than the page, with a white caption card docked at its lower left.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-garden sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-garden sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-garden__img"} -->
<figure class="wp-block-image size-full mb-garden__img"><img src="<?php echo mebuki_college_img( 'p10-garden-mud-kitchen.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p10' ); ?>" loading="lazy"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"mb-garden__card","layout":{"type":"default"}} -->
<div class="wp-block-group mb-garden__card"><!-- wp:paragraph {"className":"mb-eyebrow"} -->
<p class="mb-eyebrow"><?php echo esc_html( mebuki_college_t( 'garden_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-garden__p"} -->
<p class="mb-garden__p"><?php echo esc_html( mebuki_college_t( 'garden_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
