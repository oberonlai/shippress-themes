<?php
/**
 * Title: Home: what we make
 * Slug: tana-furniture/front-make
 * Categories: tana-furniture
 * Keywords: furniture, cards, tiles
 * Viewport Width: 1440
 * Description: Grey band with a bracket label, a pair of white photo-top cards, a 5 by 2 line-icon tile index and a second pair of cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec tf-band tf-make","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec tf-band tf-make"><!-- wp:paragraph {"align":"center","className":"is-style-bracket-label tf-label"} -->
<p class="has-text-align-center is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'mk_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","className":"tf-pair sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tf-pair sp-stagger"><!-- wp:group {"className":"tf-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tf-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tf-card__img"} -->
<figure class="wp-block-image size-large tf-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p07-couple-sofa.webp' ) ); ?>" alt="<?php echo esc_attr( tana_furniture_t( 'alt_p07' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tf-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group tf-card__body"><!-- wp:paragraph {"align":"center","className":"tf-card__cat"} -->
<p class="has-text-align-center tf-card__cat"><?php echo esc_html( tana_furniture_t( 'mk_c1_cat' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"tf-card__title"} -->
<h3 class="wp-block-heading has-text-align-center tf-card__title"><a href="/made-to-order/"><?php echo tana_furniture_lines( 'mk_c1_title' ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tf-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tf-card__img"} -->
<figure class="wp-block-image size-large tf-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08-table-laying.webp' ) ); ?>" alt="<?php echo esc_attr( tana_furniture_t( 'alt_p08' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tf-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group tf-card__body"><!-- wp:paragraph {"align":"center","className":"tf-card__cat"} -->
<p class="has-text-align-center tf-card__cat"><?php echo esc_html( tana_furniture_t( 'mk_c2_cat' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"tf-card__title"} -->
<h3 class="wp-block-heading has-text-align-center tf-card__title"><a href="/made-to-order/"><?php echo tana_furniture_lines( 'mk_c2_title' ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"tf-tiles sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tf-tiles sp-reveal sp-reveal--up"><!-- wp:group {"className":"tf-tile","layout":{"type":"default"}} -->
<div class="wp-block-group tf-tile"><!-- wp:paragraph {"className":"tf-tile__label tf-ic tf-ic--sofa"} -->
<p class="tf-tile__label tf-ic tf-ic--sofa"><a href="/collection/"><?php echo esc_html( tana_furniture_t( 'tile_sofa' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-tile","layout":{"type":"default"}} -->
<div class="wp-block-group tf-tile"><!-- wp:paragraph {"className":"tf-tile__label tf-ic tf-ic--table"} -->
<p class="tf-tile__label tf-ic tf-ic--table"><a href="/collection/"><?php echo esc_html( tana_furniture_t( 'tile_table' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-tile","layout":{"type":"default"}} -->
<div class="wp-block-group tf-tile"><!-- wp:paragraph {"className":"tf-tile__label tf-ic tf-ic--chair"} -->
<p class="tf-tile__label tf-ic tf-ic--chair"><a href="/collection/"><?php echo esc_html( tana_furniture_t( 'tile_chair' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-tile","layout":{"type":"default"}} -->
<div class="wp-block-group tf-tile"><!-- wp:paragraph {"className":"tf-tile__label tf-ic tf-ic--bed"} -->
<p class="tf-tile__label tf-ic tf-ic--bed"><a href="/collection/"><?php echo esc_html( tana_furniture_t( 'tile_bed' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-tile","layout":{"type":"default"}} -->
<div class="wp-block-group tf-tile"><!-- wp:paragraph {"className":"tf-tile__label tf-ic tf-ic--storage"} -->
<p class="tf-tile__label tf-ic tf-ic--storage"><a href="/collection/"><?php echo esc_html( tana_furniture_t( 'tile_storage' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-tile","layout":{"type":"default"}} -->
<div class="wp-block-group tf-tile"><!-- wp:paragraph {"className":"tf-tile__label tf-ic tf-ic--desk"} -->
<p class="tf-tile__label tf-ic tf-ic--desk"><a href="/collection/"><?php echo esc_html( tana_furniture_t( 'tile_desk' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-tile","layout":{"type":"default"}} -->
<div class="wp-block-group tf-tile"><!-- wp:paragraph {"className":"tf-tile__label tf-ic tf-ic--shelf"} -->
<p class="tf-tile__label tf-ic tf-ic--shelf"><a href="/collection/"><?php echo esc_html( tana_furniture_t( 'tile_shelf' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-tile","layout":{"type":"default"}} -->
<div class="wp-block-group tf-tile"><!-- wp:paragraph {"className":"tf-tile__label tf-ic tf-ic--rug"} -->
<p class="tf-tile__label tf-ic tf-ic--rug"><a href="/collection/"><?php echo esc_html( tana_furniture_t( 'tile_rug' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-tile","layout":{"type":"default"}} -->
<div class="wp-block-group tf-tile"><!-- wp:paragraph {"className":"tf-tile__label tf-ic tf-ic--curtain"} -->
<p class="tf-tile__label tf-ic tf-ic--curtain"><a href="/collection/"><?php echo esc_html( tana_furniture_t( 'tile_curtain' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-tile","layout":{"type":"default"}} -->
<div class="wp-block-group tf-tile"><!-- wp:paragraph {"className":"tf-tile__label tf-ic tf-ic--lamp"} -->
<p class="tf-tile__label tf-ic tf-ic--lamp"><a href="/collection/"><?php echo esc_html( tana_furniture_t( 'tile_lamp' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"tf-pair sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tf-pair sp-stagger"><!-- wp:group {"className":"tf-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tf-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tf-card__img"} -->
<figure class="wp-block-image size-large tf-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p09-woods.webp' ) ); ?>" alt="<?php echo esc_attr( tana_furniture_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tf-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group tf-card__body"><!-- wp:paragraph {"align":"center","className":"tf-card__cat"} -->
<p class="has-text-align-center tf-card__cat"><?php echo esc_html( tana_furniture_t( 'mk_c3_cat' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"tf-card__title"} -->
<h3 class="wp-block-heading has-text-align-center tf-card__title"><a href="/made-to-order/"><?php echo tana_furniture_lines( 'mk_c3_title' ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tf-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tf-card__img"} -->
<figure class="wp-block-image size-large tf-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p10-swatch-book.webp' ) ); ?>" alt="<?php echo esc_attr( tana_furniture_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tf-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group tf-card__body"><!-- wp:paragraph {"align":"center","className":"tf-card__cat"} -->
<p class="has-text-align-center tf-card__cat"><?php echo esc_html( tana_furniture_t( 'mk_c4_cat' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"tf-card__title"} -->
<h3 class="wp-block-heading has-text-align-center tf-card__title"><a href="/made-to-order/"><?php echo tana_furniture_lines( 'mk_c4_title' ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/collection/"><?php echo esc_html( tana_furniture_t( 'mk_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
