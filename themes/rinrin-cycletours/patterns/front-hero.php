<?php
/**
 * Title: Home: quay hero
 * Slug: rinrin-cycletours/front-hero
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Full-bleed high-angle quay photograph with scroll parallax, a tall vertical headline at the lower right and a four-line catch at the left.
 */
?>
<!-- wp:group {"className":"rc-hero sp-parallax","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull rc-hero sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rc-hero__img"} -->
<figure class="wp-block-image size-full rc-hero__img"><img src="<?php echo rinrin_cycletours_img( 'hero-quay.webp' ); ?>" alt="<?php echo rinrin_cycletours_a( 'alt_hero_quay' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"rc-hero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group rc-hero__inner"><!-- wp:paragraph {"className":"rc-hero__catch"} -->
<p class="rc-hero__catch"><?php echo rinrin_cycletours_lines( 'hero_catch' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"rc-hero__title"} -->
<h1 class="wp-block-heading rc-hero__title"><span class="rc-hero__col"><?php echo esc_html( rinrin_cycletours_t( 'hero_h1' ) ); ?></span> <span class="rc-hero__col"><?php echo esc_html( rinrin_cycletours_t( 'hero_h2' ) ); ?></span> <span class="rc-hero__col"><?php echo esc_html( rinrin_cycletours_t( 'hero_h3' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"rc-hero__scroll","layout":{"type":"default"}} -->
<div class="wp-block-group rc-hero__scroll"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
