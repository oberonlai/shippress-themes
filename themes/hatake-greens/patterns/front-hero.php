<?php
/**
 * Title: Home: photo hero
 * Slug: hatake-greens/front-hero
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: Full-bleed documentary photo that moves slower than the page, a wide-tracked white headline at the bottom left, a small Latin sub-line and one Join pill.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"hero","className":"hg-hero sp-parallax","layout":{"type":"default"}} -->
<section id="hero" class="wp-block-group alignfull hg-hero sp-parallax">
<!-- wp:group {"className":"hg-hero__bg sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group hg-hero__bg sp-parallax__layer">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-hero__img"} -->
<figure class="wp-block-image size-full hg-hero__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hk-01.webp' ) ); ?>" alt="<?php echo esc_attr( hatake_greens_t( 'alt_hk-01' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-hero__fg","layout":{"type":"default"}} -->
<div class="wp-block-group hg-hero__fg">
<!-- wp:heading {"level":1,"className":"hg-hero__h"} -->
<h1 class="wp-block-heading hg-hero__h"><?php echo esc_html( hatake_greens_t( 'hero_l1' ) ); ?><br><?php echo esc_html( hatake_greens_t( 'hero_l2' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-hero__sub"} -->
<p class="hg-hero__sub"><?php echo esc_html( hatake_greens_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hg-btns"} -->
<div class="wp-block-buttons hg-btns"><!-- wp:button {"className":"is-style-outline hg-pill hg-pill--hero"} -->
<div class="wp-block-button is-style-outline hg-pill hg-pill--hero"><a class="wp-block-button__link wp-element-button" href="#plan"><?php echo esc_html( hatake_greens_t( 'hero_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
