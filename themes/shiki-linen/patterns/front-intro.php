<?php
/**
 * Title: Home: intro
 * Slug: shiki-linen/front-intro
 * Categories: shiki-linen
 * Keywords: linen, bedding, shop
 * Viewport Width: 1440
 * Description: A tone-on-tone photograph on the left and how the six cloths are chosen on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sl-sec sl-intro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sl-sec sl-intro">
<!-- wp:html -->
<div class="sl-stitch sl-stitch--b sp-reveal sp-reveal--wipe" aria-hidden="true"><div></div></div>
<!-- /wp:html -->

<!-- wp:group {"className":"sl-intro__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sl-intro__grid">
<!-- wp:group {"className":"sl-frame sl-frame--intro","layout":{"type":"default"}} -->
<div class="wp-block-group sl-frame sl-frame--intro">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sl-photo sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full sl-photo sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/t1-moss-tone.webp' ) ); ?>" alt="<?php echo esc_attr( shiki_linen_t( 'a10a0b192' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sl-intro__text","layout":{"type":"default"}} -->
<div class="wp-block-group sl-intro__text">
<!-- wp:paragraph {"className":"sl-statement"} -->
<p class="sl-statement"><?php echo wp_kses_post( shiki_linen_t( 'kc11e3ea5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sl-prose"} -->
<p class="sl-prose"><?php echo wp_kses_post( shiki_linen_t( 'keb41d1cf' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sl-more"} -->
<p class="sl-more"><a href="/about/"><?php echo wp_kses_post( shiki_linen_t( 'kd59048f2' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
