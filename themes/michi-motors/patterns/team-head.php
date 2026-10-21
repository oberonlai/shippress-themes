<?php
/**
 * Title: Team head
 * Slug: michi-motors/team-head
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Inserter: no
 * Description: Photo band head with a staggered light heading, rule lead and ring.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mm-band mm-pagehead mm-pagehead--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mm-band mm-pagehead mm-pagehead--photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-band__img"} -->
<figure class="wp-block-image size-full mm-band__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s8-floor.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'team_head_1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-band__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mm-band__grid"><!-- wp:heading {"level":1,"className":"mm-t1 mm-t1--page"} -->
<h1 class="wp-block-heading mm-t1 mm-t1--page"><span class="mm-t1__l mm-t1__l--1"><?php echo esc_html( michi_motors_t( 'team_head_2' ) ); ?></span><span class="mm-t1__l mm-t1__l--2"><?php echo esc_html( michi_motors_t( 'team_head_3' ) ); ?></span></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-band__foot","layout":{"type":"default"}} -->
<div class="wp-block-group mm-band__foot"><!-- wp:paragraph {"className":"mm-label mm-label--light"} -->
<p class="mm-label mm-label--light"><?php echo esc_html( michi_motors_t( 'team_head_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-rule-lead"} -->
<p class="mm-rule-lead"><?php echo esc_html( michi_motors_t( 'team_head_5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-ringlink mm-ringlink--corner"} -->
<p class="mm-ringlink mm-ringlink--corner"><a href="/contact/" aria-label="<?php echo esc_attr( michi_motors_t( 'drive_head_2' ) ); ?>"></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
