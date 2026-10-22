<?php
/**
 * Title: Home: request and visit
 * Slug: denki-components/front-close
 * Categories: denki-components
 * Keywords: denki, components, capacitors
 * Viewport Width: 1440
 * Description: Plant exterior beside the address, hours and a call to request samples.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"dk-sec dk-close","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull dk-sec dk-close"><!-- wp:group {"align":"wide","className":"dk-close__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide dk-close__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"dk-close__photo"} -->
<figure class="wp-block-image size-full dk-close__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-plant-exterior.webp' ) ); ?>" alt="<?php echo esc_attr( denki_components_t( 'a4a0a3365' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"dk-close__col sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group dk-close__col sp-stagger"><!-- wp:heading {"className":"dk-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading dk-h2 sp-reveal sp-reveal--up"><?php echo wp_kses_post( denki_components_t( 'k5e04e916' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"dk-body sp-reveal sp-reveal--up"} -->
<p class="dk-body sp-reveal sp-reveal--up"><?php echo wp_kses_post( denki_components_t( 'k31cfeac4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"dk-body dk-body--meta sp-reveal sp-reveal--up"} -->
<p class="dk-body dk-body--meta sp-reveal sp-reveal--up"><a href="mailto:samples@denki-components.example"><?php echo wp_kses_post( denki_components_t( 'kf002a515' ) ); ?></a> · +31 40 000 1987</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="dk-badge dk-badge--static" href="/samples/" aria-label="<?php echo esc_attr( denki_components_t( 'ae48c1e77' ) ); ?>"><svg class="dk-badge__ring" viewBox="0 0 140 140" aria-hidden="true" focusable="false"><defs><path id="dk-ring-2" d="M70,70 m-60,0 a60,60 0 1,1 120,0 a60,60 0 1,1 -120,0"/></defs><text><textPath href="#dk-ring-2">REQUEST SAMPLES · 3-DAY DISPATCH · EST. 1987 · </textPath></text><circle cx="70" cy="4" r="3" fill="#B5683A"/></svg><span class="dk-badge__disc"><span class="dk-badge__word"><?php echo wp_kses_post( denki_components_t( 'kdb8d5033' ) ); ?></span></span></a>
<!-- /wp:html -->

<!-- wp:buttons {"className":"sp-reveal sp-reveal--up"} -->
<div class="wp-block-buttons sp-reveal sp-reveal--up"><!-- wp:button {"className":"is-style-pill"} -->
<div class="wp-block-button is-style-pill"><a class="wp-block-button__link wp-element-button" href="/samples/"><?php echo wp_kses_post( denki_components_t( 'ke48c1e77' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
