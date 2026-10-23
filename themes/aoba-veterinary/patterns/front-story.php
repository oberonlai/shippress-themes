<?php
/**
 * Title: Home: one recovery story on a parallax photo band
 * Slug: aoba-veterinary/front-story
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: The proof: a full-bleed walking photograph with a framed quote box at lower left, the figure 10 weeks at 4.25rem and the story in three paragraphs.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-story","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-story"><!-- wp:group {"className":"av-story__stage","layout":{"type":"default"}} -->
<div class="wp-block-group av-story__stage"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p06-walk.webp' ); ?>","alt":"Owner walking a beagle along a park path in morning light","dimRatio":0,"minHeight":520,"minHeightUnit":"px","isDark":false,"align":"full","className":"av-story__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light av-story__photo sp-parallax" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( aoba_veterinary_t( 'afbbe7868' ) ); ?>" src="<?php echo esc_url( $av . 'p06-walk.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"av-box av-box--left","layout":{"type":"default"}} -->
<div class="wp-block-group av-box av-box--left"><!-- wp:heading {"textAlign":"center","level":2,"className":"av-box__title av-box__title--quote"} -->
<h2 class="wp-block-heading has-text-align-center av-box__title av-box__title--quote"><?php echo wp_kses_post( aoba_veterinary_t( 'k60452be4' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-box__line"} -->
<p class="has-text-align-center av-box__line"><?php echo wp_kses_post( aoba_veterinary_t( 'k74c17cfd' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"av-story__cols","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide av-story__cols"><!-- wp:group {"className":"av-story__fig","layout":{"type":"default"}} -->
<div class="wp-block-group av-story__fig"><!-- wp:paragraph {"className":"av-figure"} -->
<p class="av-figure"><?php echo wp_kses_post( aoba_veterinary_t( 'kf0cd45ee' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-figure__cap"} -->
<p class="av-figure__cap"><?php echo wp_kses_post( aoba_veterinary_t( 'kf0292604' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-story__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group av-story__text sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k8f4fca40' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'kfa659ab7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aoba_veterinary_t( 'k988f82d8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"av-arrow"} -->
<div class="wp-block-buttons av-arrow"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/biscuit/"><?php echo wp_kses_post( aoba_veterinary_t( 'k21957bfd' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
