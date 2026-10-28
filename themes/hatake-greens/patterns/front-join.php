<?php
/**
 * Title: Home: join band
 * Slug: hatake-greens/front-join
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: Full-bleed late-afternoon table photo under a dim scrim, a huge white closing line at the bottom left and the Join pill.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"join","className":"hg-join sp-parallax","layout":{"type":"default"}} -->
<section id="join" class="wp-block-group alignfull hg-join sp-parallax">
<!-- wp:group {"className":"hg-join__bg sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group hg-join__bg sp-parallax__layer">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-join__img"} -->
<figure class="wp-block-image size-full hg-join__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hk-16.webp' ) ); ?>" alt="<?php echo esc_attr( hatake_greens_t( 'alt_hk-16' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-join__fg","layout":{"type":"default"}} -->
<div class="wp-block-group hg-join__fg">
<!-- wp:heading {"className":"hg-join__h"} -->
<h2 class="wp-block-heading hg-join__h"><?php echo esc_html( hatake_greens_t( 'join_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-join__p"} -->
<p class="hg-join__p"><?php echo esc_html( hatake_greens_t( 'join_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hg-btns"} -->
<div class="wp-block-buttons hg-btns"><!-- wp:button {"className":"is-style-outline hg-pill hg-pill--hero"} -->
<div class="wp-block-button is-style-outline hg-pill hg-pill--hero"><a class="wp-block-button__link wp-element-button" href="/waitlist/"><?php echo esc_html( hatake_greens_t( 'join_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
