<?php
/**
 * Title: Page: Team
 * Slug: aoba-veterinary/page-team
 * Categories: aoba-veterinary
 * Keywords: page
 * Viewport Width: 1440
 * Description: Team: seven named people as ruled rows, then the three areas of the clinic.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-hero av-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-hero av-hero--page"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p16-team.webp' ); ?>","alt":"Three clinic staff talking in a bright corridor","dimRatio":0,"focalPoint":{"x":0.5,"y":0.45},"minHeight":360,"minHeightUnit":"px","isDark":false,"align":"full","className":"av-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light av-hero__photo" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( aoba_veterinary_t( 'a257b6081' ) ); ?>" src="<?php echo esc_url( $av . 'p16-team.webp' ); ?>" style="object-position:50% 45%" data-object-fit="cover" data-object-position="50% 45%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"av-box","layout":{"type":"default"}} -->
<div class="wp-block-group av-box"><!-- wp:heading {"textAlign":"center","level":1,"className":"av-box__title"} -->
<h1 class="wp-block-heading has-text-align-center av-box__title"><?php echo wp_kses_post( aoba_veterinary_t( 'kac848fa2' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-box__line"} -->
<p class="has-text-align-center av-box__line"><?php echo wp_kses_post( aoba_veterinary_t( 'k422eaaa2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"av-path","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-path"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>","alt":"Bright empty waiting area with an oak bench and green plants","dimRatio":60,"overlayColor":"ground","minHeight":600,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","align":"full","className":"av-path__band","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-top-center av-path__band" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-ground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( aoba_veterinary_t( 'a07c523c6' ) ); ?>" src="<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","className":"av-label"} -->
<h2 class="wp-block-heading has-text-align-center av-label"><?php echo wp_kses_post( aoba_veterinary_t( 'k53bebca1' ) ); ?></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","className":"av-path__cards sp-stagger","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide av-path__cards sp-stagger">
<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p07-director.webp' ); ?>","alt":"Dr. Elena Varga holding a grey cat and facing the camera","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( aoba_veterinary_t( 'a0d64d0ee' ) ); ?>" src="<?php echo esc_url( $av . 'p07-director.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/services/"><?php echo wp_kses_post( aoba_veterinary_t( 'kb1edecbc' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text"><?php echo wp_kses_post( aoba_veterinary_t( 'k76657eab' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p12-surgery-prep.webp' ); ?>","alt":"Clean surgery preparation room with covered instrument trays","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( aoba_veterinary_t( 'a9d6609aa' ) ); ?>" src="<?php echo esc_url( $av . 'p12-surgery-prep.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/surgery-dental/"><?php echo wp_kses_post( aoba_veterinary_t( 'k4cc2ab05' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text"><?php echo wp_kses_post( aoba_veterinary_t( 'kbc61dc76' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p11-recovery.webp' ); ?>","alt":"Dog resting on a soft blanket in a recovery kennel with the door open","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( aoba_veterinary_t( 'a9acab175' ) ); ?>" src="<?php echo esc_url( $av . 'p11-recovery.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/stories/"><?php echo wp_kses_post( aoba_veterinary_t( 'k43394703' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text"><?php echo wp_kses_post( aoba_veterinary_t( 'k0c5cd900' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-page"><!-- wp:paragraph {"className":"av-lead"} -->
<p class="av-lead"><?php echo wp_kses_post( aoba_veterinary_t( 'ke22b31ad' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small av-long--first"} -->
<h2 class="wp-block-heading av-long av-long--small av-long--first"><?php echo wp_kses_post( aoba_veterinary_t( 'k422eaaa2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"av-people","layout":{"type":"default"}} -->
<div class="wp-block-group av-people"><!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name"><?php echo wp_kses_post( aoba_veterinary_t( 'kb22150d8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role"><?php echo wp_kses_post( aoba_veterinary_t( 'kb526b31a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text"><?php echo wp_kses_post( aoba_veterinary_t( 'k29ccd4c5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name"><?php echo wp_kses_post( aoba_veterinary_t( 'k9c8172c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role"><?php echo wp_kses_post( aoba_veterinary_t( 'kda99671b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text"><?php echo wp_kses_post( aoba_veterinary_t( 'k7e51e90e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name"><?php echo wp_kses_post( aoba_veterinary_t( 'k62335762' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role"><?php echo wp_kses_post( aoba_veterinary_t( 'k6a77de19' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text"><?php echo wp_kses_post( aoba_veterinary_t( 'ka90646e4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name"><?php echo wp_kses_post( aoba_veterinary_t( 'ka0161f91' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role"><?php echo wp_kses_post( aoba_veterinary_t( 'ke159729b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text"><?php echo wp_kses_post( aoba_veterinary_t( 'k950bfa45' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name"><?php echo wp_kses_post( aoba_veterinary_t( 'ke4333cab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role"><?php echo wp_kses_post( aoba_veterinary_t( 'kf0f5effe' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text"><?php echo wp_kses_post( aoba_veterinary_t( 'ke92bbbfe' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name"><?php echo wp_kses_post( aoba_veterinary_t( 'ka5e25c20' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role"><?php echo wp_kses_post( aoba_veterinary_t( 'kc3b0b5dc' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text"><?php echo wp_kses_post( aoba_veterinary_t( 'k349be30b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-person","layout":{"type":"default"}} -->
<div class="wp-block-group av-person"><!-- wp:group {"className":"av-person__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-person__id"><!-- wp:paragraph {"className":"av-person__name"} -->
<p class="av-person__name"><?php echo wp_kses_post( aoba_veterinary_t( 'k7e9e1e76' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-person__role"} -->
<p class="av-person__role"><?php echo wp_kses_post( aoba_veterinary_t( 'k49ed52bb' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-person__text"} -->
<p class="av-person__text"><?php echo wp_kses_post( aoba_veterinary_t( 'kb098dd3e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"av-long av-long--small av-long--first"} -->
<h2 class="wp-block-heading av-long av-long--small av-long--first"><?php echo wp_kses_post( aoba_veterinary_t( 'kf77ccbdb' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'kebd0db45' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'kfc258426' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small"><?php echo wp_kses_post( aoba_veterinary_t( 'ke6eec068' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k4403e684' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k1bf982e3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small"><?php echo wp_kses_post( aoba_veterinary_t( 'k62fc54d7' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k6326d28f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k11fc5bc5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"av-arrow"} -->
<div class="wp-block-buttons av-arrow"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/book/"><?php echo wp_kses_post( aoba_veterinary_t( 'k26bd62d6' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
