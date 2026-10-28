<?php
/**
 * Title: Home: morning in the barn
 * Slug: hatake-greens/front-barn
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: Full-bleed photograph of the packing barn, revealed with a wipe, one white caption at the bottom left.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"barn","className":"hg-barn","layout":{"type":"default"}} -->
<section id="barn" class="wp-block-group alignfull hg-barn">
<!-- wp:group {"className":"hg-barn__fig sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hg-barn__fig sp-reveal sp-reveal--wipe">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-barn__img"} -->
<figure class="wp-block-image size-full hg-barn__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hk-08.webp' ) ); ?>" alt="<?php echo esc_attr( hatake_greens_t( 'alt_hk-08' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-barn__cap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-barn__cap">
<!-- wp:paragraph {"className":"hg-label hg-label--leaf"} -->
<p class="hg-label hg-label--leaf"><?php echo esc_html( hatake_greens_t( 'barn_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-barn__p"} -->
<p class="hg-barn__p"><?php echo esc_html( hatake_greens_t( 'barn_cap' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
