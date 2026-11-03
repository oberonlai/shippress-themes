<?php
/**
 * Title: Home: first light on the pontoon (full-bleed photograph)
 * Slug: tomari-marina/front-hero
 * Categories: tomari-marina
 * Keywords: home, hero
 * Viewport Width: 1440
 * Description: A full-bleed low-key photograph of the harbour master and an owner on a pontoon with the two-line headline low on the left, a tagline at the right, and the bottom line.
 */
?>
<!-- wp:cover {"alt":"<?php echo substr( wp_json_encode( tomari_marina_t( 'front_hero_07' ), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ), 1, -1 ); ?>","url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-pontoon-master.webp' ) ); ?>","dimRatio":40,"overlayColor":"ink","minHeight":720,"minHeightUnit":"px","focalPoint":{"x":1,"y":0.5},"contentPosition":"bottom left","align":"full","className":"tm-hero sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left tm-hero sp-parallax" style="min-height:720px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( tomari_marina_t( 'front_hero_07' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-pontoon-master.webp' ) ); ?>" data-object-fit="cover" data-object-position="100% 50%" style="object-position:100% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"tm-hero__row","layout":{"type":"default"}} -->
<div class="wp-block-group tm-hero__row"><!-- wp:group {"className":"tm-hero__main","layout":{"type":"default"}} -->
<div class="wp-block-group tm-hero__main"><!-- wp:paragraph {"className":"tm-hero__tag-a"} -->
<p class="tm-hero__tag-a"><?php echo wp_kses_post( tomari_marina_t( 'front_hero_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"tm-h1"} -->
<h1 class="wp-block-heading tm-h1"><span class="tm-rise"><span><?php echo wp_kses_post( tomari_marina_t( 'front_hero_02' ) ); ?></span></span><span class="tm-rise"><span><?php echo wp_kses_post( tomari_marina_t( 'front_hero_03' ) ); ?></span></span></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tm-hero__tag-b"} -->
<p class="tm-hero__tag-b"><?php echo wp_kses_post( tomari_marina_t( 'front_hero_04' ) ); ?><br><?php echo wp_kses_post( tomari_marina_t( 'front_hero_05' ) ); ?><br><?php echo wp_kses_post( tomari_marina_t( 'front_hero_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"tomari-marina/bottom-line"} /--></div></div>
<!-- /wp:cover -->