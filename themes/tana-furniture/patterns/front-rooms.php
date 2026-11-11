<?php
/**
 * Title: Home: rooms
 * Slug: tana-furniture/front-rooms
 * Categories: tana-furniture
 * Keywords: furniture, rooms, case stories
 * Viewport Width: 1440
 * Description: Grey band with a headline and a strip of hairline-ruled room cells (photo on top, counter, title, line and link) plus one text cell.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec tf-band tf-rooms","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec tf-band tf-rooms"><!-- wp:group {"align":"wide","className":"tf-rooms__head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tf-rooms__head"><!-- wp:paragraph {"className":"is-style-bracket-label tf-label"} -->
<p class="is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'rm_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tf-h2"} -->
<h2 class="wp-block-heading tf-h2"><?php echo tana_furniture_lines( 'rm_title' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"tf-strip sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tf-strip sp-stagger"><!-- wp:group {"className":"tf-cell sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tf-cell sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tf-cell__img"} -->
<figure class="wp-block-image size-large tf-cell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p15-loft-bed.webp' ) ); ?>" alt="<?php echo esc_attr( tana_furniture_t( 'alt_p15' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tf-cell__n"} -->
<p class="tf-cell__n">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tf-cell__title"} -->
<h3 class="wp-block-heading tf-cell__title"><?php echo esc_html( tana_furniture_t( 'rm1_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tf-cell__text"} -->
<p class="tf-cell__text"><?php echo esc_html( tana_furniture_t( 'rm1_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tf-cell__more"} -->
<p class="tf-cell__more"><a href="/rooms/"><?php echo esc_html( tana_furniture_t( 'rm_view' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-cell sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tf-cell sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tf-cell__img"} -->
<figure class="wp-block-image size-large tf-cell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p16-study.webp' ) ); ?>" alt="<?php echo esc_attr( tana_furniture_t( 'alt_p16' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tf-cell__n"} -->
<p class="tf-cell__n">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tf-cell__title"} -->
<h3 class="wp-block-heading tf-cell__title"><?php echo esc_html( tana_furniture_t( 'rm2_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tf-cell__text"} -->
<p class="tf-cell__text"><?php echo esc_html( tana_furniture_t( 'rm2_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tf-cell__more"} -->
<p class="tf-cell__more"><a href="/rooms/"><?php echo esc_html( tana_furniture_t( 'rm_view' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-cell sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tf-cell sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tf-cell__img"} -->
<figure class="wp-block-image size-large tf-cell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p17-kitchen-corner.webp' ) ); ?>" alt="<?php echo esc_attr( tana_furniture_t( 'alt_p17' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tf-cell__n"} -->
<p class="tf-cell__n">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tf-cell__title"} -->
<h3 class="wp-block-heading tf-cell__title"><?php echo esc_html( tana_furniture_t( 'rm3_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tf-cell__text"} -->
<p class="tf-cell__text"><?php echo esc_html( tana_furniture_t( 'rm3_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tf-cell__more"} -->
<p class="tf-cell__more"><a href="/rooms/"><?php echo esc_html( tana_furniture_t( 'rm_view' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-cell tf-cell--text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tf-cell tf-cell--text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tf-cell__all"} -->
<p class="tf-cell__all"><a href="/rooms/"><?php echo esc_html( tana_furniture_t( 'rm_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
