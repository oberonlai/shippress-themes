<?php
/**
 * Title: New cars: list
 * Slug: michi-motors/new-cars-main
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Description: Static vehicle list.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mm-sec mm-cars","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mm-sec mm-cars"><!-- wp:group {"align":"wide","className":"mm-chipbar","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mm-chipbar"><!-- wp:group {"className":"mm-chips","layout":{"type":"default"}} -->
<div class="wp-block-group mm-chips"><!-- wp:paragraph {"className":"mm-chip"} -->
<p class="mm-chip"><a href="#new"><?php echo esc_html( michi_motors_t( 'new_cars_main_1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-chip"} -->
<p class="mm-chip"><a href="#approved"><?php echo esc_html( michi_motors_t( 'finance_head_2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","anchor":"new","className":"mm-carsec","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mm-carsec" id="new"><!-- wp:group {"className":"mm-head","layout":{"type":"default"}} -->
<div class="wp-block-group mm-head"><!-- wp:paragraph {"className":"mm-label"} -->
<p class="mm-label"><?php echo esc_html( michi_motors_t( 'new_cars_main_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"mm-h"} -->
<h2 class="wp-block-heading mm-h"><?php echo michi_motors_lines( 'new_cars_main_2' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mm-lead"} -->
<p class="mm-lead"><?php echo esc_html( michi_motors_t( 'new_cars_main_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"mm-ledger mm-ledger--page","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mm-ledger mm-ledger--page"><!-- wp:group {"className":"mm-row","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-row__img"} -->
<figure class="wp-block-image size-full mm-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v1-arden.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'new_cars_main_4' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row__text"><!-- wp:paragraph {"className":"mm-row__name"} -->
<p class="mm-row__name"><a href="<?php echo esc_url( michi_motors_car_url( 'arden-tourer-hybrid' ) ); ?>"><?php echo esc_html( michi_motors_t( 'front_forecourt_6' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-row__meta"} -->
<p class="mm-row__meta"><?php echo esc_html( michi_motors_t( 'front_forecourt_7' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-row__price"} -->
<p class="mm-row__price">$36,900</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-row","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-row__img"} -->
<figure class="wp-block-image size-full mm-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v6-pacer.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'new_cars_main_5' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row__text"><!-- wp:paragraph {"className":"mm-row__name"} -->
<p class="mm-row__name"><a href="<?php echo esc_url( michi_motors_car_url( 'pacer-van-7' ) ); ?>"><?php echo esc_html( michi_motors_t( 'new_cars_main_6' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-row__meta"} -->
<p class="mm-row__meta"><?php echo esc_html( michi_motors_t( 'new_cars_main_7' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-row__price"} -->
<p class="mm-row__price">$41,200</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-row","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-row__img"} -->
<figure class="wp-block-image size-full mm-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v7-crossover.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'new_cars_main_8' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row__text"><!-- wp:paragraph {"className":"mm-row__name"} -->
<p class="mm-row__name"><a href="<?php echo esc_url( michi_motors_car_url( 'arden-crossover-2-0' ) ); ?>"><?php echo esc_html( michi_motors_t( 'new_cars_main_9' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-row__meta"} -->
<p class="mm-row__meta"><?php echo esc_html( michi_motors_t( 'new_cars_main_10' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-row__price"} -->
<p class="mm-row__price">$33,400</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","anchor":"approved","className":"mm-carsec","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mm-carsec" id="approved"><!-- wp:group {"className":"mm-head","layout":{"type":"default"}} -->
<div class="wp-block-group mm-head"><!-- wp:paragraph {"className":"mm-label"} -->
<p class="mm-label"><?php echo esc_html( michi_motors_t( 'finance_head_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"mm-h"} -->
<h2 class="wp-block-heading mm-h"><?php echo michi_motors_lines( 'new_cars_main_11' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mm-lead"} -->
<p class="mm-lead"><?php echo esc_html( michi_motors_t( 'new_cars_main_12' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"mm-ledger mm-ledger--page","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mm-ledger mm-ledger--page"><!-- wp:group {"className":"mm-row","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-row__img"} -->
<figure class="wp-block-image size-full mm-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v2-corvel.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_forecourt_8' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row__text"><!-- wp:paragraph {"className":"mm-row__name"} -->
<p class="mm-row__name"><a href="<?php echo esc_url( michi_motors_car_url( 'corvel-compact-se' ) ); ?>"><?php echo esc_html( michi_motors_t( 'front_forecourt_9' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-row__meta"} -->
<p class="mm-row__meta"><?php echo esc_html( michi_motors_t( 'new_cars_main_13' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-row__price"} -->
<p class="mm-row__price">$21,450</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-row","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-row__img"} -->
<figure class="wp-block-image size-full mm-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v3-halden.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_forecourt_11' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row__text"><!-- wp:paragraph {"className":"mm-row__name"} -->
<p class="mm-row__name"><a href="<?php echo esc_url( michi_motors_car_url( 'halden-4-awd' ) ); ?>"><?php echo esc_html( michi_motors_t( 'front_forecourt_12' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-row__meta"} -->
<p class="mm-row__meta"><?php echo esc_html( michi_motors_t( 'new_cars_main_14' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-row__price"} -->
<p class="mm-row__price">$28,900</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-row","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-row__img"} -->
<figure class="wp-block-image size-full mm-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v4-lumen.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_forecourt_14' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row__text"><!-- wp:paragraph {"className":"mm-row__name"} -->
<p class="mm-row__name"><a href="<?php echo esc_url( michi_motors_car_url( 'lumen-e-hatch' ) ); ?>"><?php echo esc_html( michi_motors_t( 'front_forecourt_15' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-row__meta"} -->
<p class="mm-row__meta"><?php echo esc_html( michi_motors_t( 'new_cars_main_15' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-row__price"} -->
<p class="mm-row__price">$27,800</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-row","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-row__img"} -->
<figure class="wp-block-image size-full mm-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v5-norvik.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_forecourt_17' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row__text"><!-- wp:paragraph {"className":"mm-row__name"} -->
<p class="mm-row__name"><a href="<?php echo esc_url( michi_motors_car_url( 'norvik-sedan-lx' ) ); ?>"><?php echo esc_html( michi_motors_t( 'front_forecourt_18' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-row__meta"} -->
<p class="mm-row__meta"><?php echo esc_html( michi_motors_t( 'new_cars_main_16' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-row__price"} -->
<p class="mm-row__price">$19,750</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-row","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-row__img"} -->
<figure class="wp-block-image size-full mm-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v8-estate.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'new_cars_main_17' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row__text"><!-- wp:paragraph {"className":"mm-row__name"} -->
<p class="mm-row__name"><a href="<?php echo esc_url( michi_motors_car_url( 'corvel-estate-touring' ) ); ?>"><?php echo esc_html( michi_motors_t( 'new_cars_main_18' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-row__meta"} -->
<p class="mm-row__meta"><?php echo esc_html( michi_motors_t( 'new_cars_main_19' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-row__price"} -->
<p class="mm-row__price">$16,900</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"mm-endcta","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mm-endcta"><!-- wp:paragraph {"className":"mm-more"} -->
<p class="mm-more"><a href="/test-drive/"><?php echo esc_html( michi_motors_t( 'contact_head_2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
