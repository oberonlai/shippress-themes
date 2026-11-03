<?php
/**
 * Title: Home: from the logbook (three owner stories)
 * Slug: tomari-marina/front-logbook
 * Categories: tomari-marina
 * Keywords: home, stories
 * Viewport Width: 1440
 * Description: A two-line heading, then three hairline-separated columns, each a 3:2 photograph, a bracketed boat tag, a title and a short story.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-logbook tm-section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-logbook tm-section"><!-- wp:group {"className":"tm-logbook__head","layout":{"type":"default"}} -->
<div class="wp-block-group tm-logbook__head"><!-- wp:heading {"level":2,"className":"tm-h2 sp-stagger"} -->
<h2 class="wp-block-heading tm-h2 sp-stagger"><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_16' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_17' ) ); ?></span></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-logbook__cols","layout":{"type":"default"}} -->
<div class="wp-block-group tm-logbook__cols"><!-- wp:group {"className":"tm-story","layout":{"type":"default"}} -->
<div class="wp-block-group tm-story"><!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"tm-story__photo"} -->
<figure class="wp-block-image size-large tm-story__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p10-ketch-couple.webp' ) ); ?>" alt="<?php echo esc_attr( tomari_marina_t( 'front_logbook_01' ) ); ?>" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tm-story__tag"} -->
<p class="tm-story__tag"><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tm-story__title"} -->
<h3 class="wp-block-heading tm-story__title"><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_03' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-link"} -->
<p class="tm-link"><a href="<?php echo esc_url( home_url( '/logbook/' ) ); ?>"><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_05' ) ); ?> ›</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-story","layout":{"type":"default"}} -->
<div class="wp-block-group tm-story"><!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"tm-story__photo"} -->
<figure class="wp-block-image size-large tm-story__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p11-tiller-varnish.webp' ) ); ?>" alt="<?php echo esc_attr( tomari_marina_t( 'front_logbook_06' ) ); ?>" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tm-story__tag"} -->
<p class="tm-story__tag"><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_07' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tm-story__title"} -->
<h3 class="wp-block-heading tm-story__title"><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_08' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_09' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-link"} -->
<p class="tm-link"><a href="<?php echo esc_url( home_url( '/logbook/' ) ); ?>"><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_10' ) ); ?> ›</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-story","layout":{"type":"default"}} -->
<div class="wp-block-group tm-story"><!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"tm-story__photo"} -->
<figure class="wp-block-image size-large tm-story__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-sloop-dusk.webp' ) ); ?>" alt="<?php echo esc_attr( tomari_marina_t( 'front_logbook_11' ) ); ?>" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tm-story__tag"} -->
<p class="tm-story__tag"><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_12' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tm-story__title"} -->
<h3 class="wp-block-heading tm-story__title"><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_13' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_14' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-link"} -->
<p class="tm-link"><a href="<?php echo esc_url( home_url( '/logbook/' ) ); ?>"><?php echo wp_kses_post( tomari_marina_t( 'front_logbook_15' ) ); ?> ›</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->