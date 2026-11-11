<?php
/**
 * Title: Home: three-pane stage
 * Slug: tana-furniture/front-stage
 * Categories: tana-furniture
 * Keywords: furniture, hero, stage
 * Viewport Width: 1440
 * Description: Ink-black stage with two stacked photo panes left, one tall pane right, a stepped headline across the seam, a pentagon stamp and a docked white info bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-stage","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tf-stage"><!-- wp:group {"className":"tf-panes","layout":{"type":"default"}} -->
<div class="wp-block-group tf-panes"><!-- wp:group {"className":"tf-pane tf-pane--tl","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--tl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-tape-sofa.webp' ) ); ?>" alt="<?php echo esc_attr( tana_furniture_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="wp-block-image size-full tf-pane__b" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04-table-tape.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-pane tf-pane--bl","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--bl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-swatch.webp' ) ); ?>" alt="<?php echo esc_attr( tana_furniture_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="wp-block-image size-full tf-pane__b" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05-chair-leg.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-pane tf-pane--r sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--r sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03-living-room.webp' ) ); ?>" alt="<?php echo esc_attr( tana_furniture_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="wp-block-image size-full tf-pane__b" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-delivery-door.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:html --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-stage__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tf-stage__copy"><!-- wp:heading {"level":1,"className":"tf-h1"} -->
<h1 class="wp-block-heading tf-h1"><?php echo tana_furniture_hero( array( 'st_h1_1', 'st_h1_2', 'st_h1_3', 'st_h1_4' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-stamp tf-stamp"} -->
<p class="is-style-stamp tf-stamp"><a href="/measure/"><?php echo tana_furniture_lines( 'st_stamp' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-bar","layout":{"type":"default"}} -->
<div class="wp-block-group tf-bar"><!-- wp:group {"className":"tf-bar__text","layout":{"type":"default"}} -->
<div class="wp-block-group tf-bar__text"><!-- wp:paragraph {"className":"tf-bar__label"} -->
<p class="tf-bar__label"><?php echo esc_html( tana_furniture_t( 'st_bar_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tf-bar__hours"} -->
<p class="tf-bar__hours"><?php echo esc_html( tana_furniture_t( 'st_bar_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tf-bar__note"} -->
<p class="tf-bar__note"><a href="/journal/"><?php echo esc_html( tana_furniture_t( 'st_bar_note' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"tf-bar__btn"} -->
<div class="wp-block-buttons tf-bar__btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( tana_furniture_t( 'st_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
