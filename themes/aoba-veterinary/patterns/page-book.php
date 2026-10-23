<?php
/**
 * Title: Page: Book a visit
 * Slug: aoba-veterinary/page-book
 * Categories: aoba-veterinary
 * Keywords: page
 * Viewport Width: 1440
 * Description: Book a visit: email or phone, what happens after you book, signs worth a visit and the hours.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-hero av-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-hero av-hero--page"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p01-consult-room.webp' ); ?>","alt":"Vet kneeling beside a golden mixed-breed dog in a bright consult room","dimRatio":0,"focalPoint":{"x":0.35,"y":0.45},"minHeight":360,"minHeightUnit":"px","isDark":false,"align":"full","className":"av-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light av-hero__photo" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( aoba_veterinary_t( 'a033cd596' ) ); ?>" src="<?php echo esc_url( $av . 'p01-consult-room.webp' ); ?>" style="object-position:35% 45%" data-object-fit="cover" data-object-position="35% 45%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"av-box","layout":{"type":"default"}} -->
<div class="wp-block-group av-box"><!-- wp:heading {"textAlign":"center","level":1,"className":"av-box__title"} -->
<h1 class="wp-block-heading has-text-align-center av-box__title"><?php echo wp_kses_post( aoba_veterinary_t( 'k26bd62d6' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-box__line"} -->
<p class="has-text-align-center av-box__line"><?php echo wp_kses_post( aoba_veterinary_t( 'k644528e7' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-page"><!-- wp:paragraph {"className":"av-lead"} -->
<p class="av-lead"><?php echo wp_kses_post( aoba_veterinary_t( 'kb8abf288' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small av-long--first"} -->
<h2 class="wp-block-heading av-long av-long--small av-long--first"><?php echo wp_kses_post( aoba_veterinary_t( 'ke8baeb46' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'kebac13a7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'kd9e0d93f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small"><?php echo wp_kses_post( aoba_veterinary_t( 'k669fd236' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k444f5920' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'kb37d593a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small"><?php echo wp_kses_post( aoba_veterinary_t( 'k6a7e7316' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k8ab594be' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k4332479a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"aoba-veterinary/timetable"} /-->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small"><?php echo wp_kses_post( aoba_veterinary_t( 'k9e3bb09a' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k7ef92867' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k900fda63' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"av-book"} -->
<div class="wp-block-buttons av-book"><!-- wp:button {"className":"av-book__btn"} -->
<div class="wp-block-button av-book__btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@aobavet.example"><?php echo wp_kses_post( aoba_veterinary_t( 'kd6d50ec4' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
