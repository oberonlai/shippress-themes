<?php
/**
 * Title: Page: About
 * Slug: aoba-veterinary/page-about
 * Categories: aoba-veterinary
 * Keywords: page
 * Viewport Width: 1440
 * Description: About the clinic: how it began in 2014, dogs and cats only, 30-minute first consultations, and the values behind the day.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-hero av-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-hero av-hero--page"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p14-reception.webp' ); ?>","alt":"Owner with a cat carrier talking to a receptionist across an oak desk","dimRatio":0,"focalPoint":{"x":0.5,"y":0.45},"minHeight":360,"minHeightUnit":"px","isDark":false,"align":"full","className":"av-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light av-hero__photo" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( aoba_veterinary_t( 'a7356fddb' ) ); ?>" src="<?php echo esc_url( $av . 'p14-reception.webp' ); ?>" style="object-position:50% 45%" data-object-fit="cover" data-object-position="50% 45%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"av-box","layout":{"type":"default"}} -->
<div class="wp-block-group av-box"><!-- wp:heading {"textAlign":"center","level":1,"className":"av-box__title"} -->
<h1 class="wp-block-heading has-text-align-center av-box__title"><?php echo wp_kses_post( aoba_veterinary_t( 'k8f7f4c1c' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-box__line"} -->
<p class="has-text-align-center av-box__line"><?php echo wp_kses_post( aoba_veterinary_t( 'k0484744d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-page"><!-- wp:paragraph {"className":"av-lead"} -->
<p class="av-lead"><?php echo wp_kses_post( aoba_veterinary_t( 'kfb9e5d38' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small av-long--first"} -->
<h2 class="wp-block-heading av-long av-long--small av-long--first"><?php echo wp_kses_post( aoba_veterinary_t( 'k592ddcb8' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k94ccad2d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k76ff99bb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small"><?php echo wp_kses_post( aoba_veterinary_t( 'ka3c5ac3b' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k40b75c96' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k5e29c304' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none","className":"av-wide av-wide--inpage"} -->
<figure class="wp-block-image alignwide size-large av-wide av-wide--inpage"><img src="<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>" alt="<?php echo esc_attr( aoba_veterinary_t( 'a07c523c6' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"className":"av-long av-long--small av-long--first"} -->
<h2 class="wp-block-heading av-long av-long--small av-long--first"><?php echo wp_kses_post( aoba_veterinary_t( 'kfb4abec4' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'kfd46a268' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'kfc18f74a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small"><?php echo wp_kses_post( aoba_veterinary_t( 'k2a1f83ea' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'kcaea8d1d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k254f5882' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"av-arrow"} -->
<div class="wp-block-buttons av-arrow"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/team/"><?php echo wp_kses_post( aoba_veterinary_t( 'ke79c6603' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
