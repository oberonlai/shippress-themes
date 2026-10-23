<?php
/**
 * Title: Home: framed statement box on a full-bleed photo
 * Slug: aoba-veterinary/front-hero
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: A full-bleed consult-room photograph with a 2 px outlined translucent statement box at the lower right, and a white info bar with one filled booking button.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-hero"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p01-consult-room.webp' ); ?>","alt":"Vet kneeling beside a golden mixed-breed dog in a bright consult room","dimRatio":0,"focalPoint":{"x":0.35,"y":0.4},"minHeight":560,"minHeightUnit":"px","isDark":false,"align":"full","className":"av-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light av-hero__photo sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( aoba_veterinary_t( 'a033cd596' ) ); ?>" src="<?php echo esc_url( $av . 'p01-consult-room.webp' ); ?>" style="object-position:35% 40%" data-object-fit="cover" data-object-position="35% 40%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"av-box","layout":{"type":"default"}} -->
<div class="wp-block-group av-box"><!-- wp:heading {"textAlign":"center","level":1,"className":"av-box__title"} -->
<h1 class="wp-block-heading has-text-align-center av-box__title"><?php echo wp_kses_post( aoba_veterinary_t( 'k72572def' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-box__line"} -->
<p class="has-text-align-center av-box__line"><?php echo wp_kses_post( aoba_veterinary_t( 'k6d4d67e2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"av-info","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull av-info"><!-- wp:group {"align":"wide","className":"av-info__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide av-info__in"><!-- wp:group {"className":"av-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group av-info__cell"><!-- wp:paragraph {"className":"av-info__k"} -->
<p class="av-info__k"><?php echo wp_kses_post( aoba_veterinary_t( 'k6a7e7316' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-info__v"} -->
<p class="av-info__v"><?php echo wp_kses_post( aoba_veterinary_t( 'kb30cb190' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group av-info__cell"><!-- wp:paragraph {"className":"av-info__k"} -->
<p class="av-info__k"><?php echo wp_kses_post( aoba_veterinary_t( 'kedf7553d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-info__v"} -->
<p class="av-info__v"><?php echo wp_kses_post( aoba_veterinary_t( 'k412de67f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group av-info__cell"><!-- wp:paragraph {"className":"av-info__k"} -->
<p class="av-info__k"><?php echo wp_kses_post( aoba_veterinary_t( 'k12ff8025' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-info__v"} -->
<p class="av-info__v"><?php echo wp_kses_post( aoba_veterinary_t( 'ke74fae46' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-info__cell av-info__cell--cta","layout":{"type":"default"}} -->
<div class="wp-block-group av-info__cell av-info__cell--cta"><!-- wp:buttons {"className":"av-book"} -->
<div class="wp-block-buttons av-book"><!-- wp:button {"className":"av-book__btn"} -->
<div class="wp-block-button av-book__btn"><a class="wp-block-button__link wp-element-button" href="/book/"><?php echo wp_kses_post( aoba_veterinary_t( 'k26bd62d6' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
