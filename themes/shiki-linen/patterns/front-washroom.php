<?php
/**
 * Title: Home: washroom
 * Slug: shiki-linen/front-washroom
 * Categories: shiki-linen
 * Keywords: linen, bedding, shop
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the washroom with one spec tag, and the care note below.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sl-sec sl-washroom","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sl-sec sl-washroom">
<!-- wp:html -->
<div class="sl-stitch sl-stitch--e1 sp-reveal sp-reveal--wipe" aria-hidden="true"><div></div></div>
<!-- /wp:html -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/w1-washroom.webp' ) ); ?>","dimRatio":0,"minHeight":640,"minHeightUnit":"px","isDark":false,"align":"full","className":"sl-washcover sp-parallax"} -->
<div class="wp-block-cover alignfull is-light sl-washcover sp-parallax" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( shiki_linen_t( 'a2b4984c5' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/w1-washroom.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"sl-tag"} -->
<p class="sl-tag"><?php echo wp_kses_post( shiki_linen_t( 'k1300657c' ) ); ?></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"sl-washroom__text","layout":{"type":"default"}} -->
<div class="wp-block-group sl-washroom__text">
<!-- wp:heading {"level":2,"className":"sl-h2"} -->
<h2 class="wp-block-heading sl-h2"><?php echo wp_kses_post( shiki_linen_t( 'k1300657c' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sl-prose"} -->
<p class="sl-prose"><?php echo wp_kses_post( shiki_linen_t( 'kd5f598aa' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sl-more"} -->
<p class="sl-more"><a href="/care/"><?php echo wp_kses_post( shiki_linen_t( 'kd59048f2' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
