<?php
/**
 * Title: Home: visit the shop
 * Slug: enban-records/front-visit
 * Categories: enban-records
 * Keywords: record shop
 * Viewport Width: 1440
 * Description: Shopfront photograph beside the hours list, address and a link to the prices.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"visit","className":"eb-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec" id="visit"><!-- wp:group {"className":"eb-head3 sp-reveal sp-reveal--up","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3 sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo wp_kses_post( enban_records_t( 'kf0929274' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub"><?php echo wp_kses_post( enban_records_t( 'kf066d29f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-visit","layout":{"type":"default"}} -->
<div class="wp-block-group eb-visit"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"eb-visit__img"} -->
<figure class="wp-block-image size-full eb-visit__img"><img src="<?php echo enban_records_img( 'shopfront-dusk.webp' ); ?>" alt="<?php echo esc_attr( enban_records_t( 'a88893094' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"eb-visit__info","layout":{"type":"default"}} -->
<div class="wp-block-group eb-visit__info"><!-- wp:group {"className":"eb-hours","layout":{"type":"default"}} -->
<div class="wp-block-group eb-hours"><!-- wp:group {"className":"eb-hours__row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group eb-hours__row"><!-- wp:paragraph {"className":"eb-hours__d"} -->
<p class="eb-hours__d"><?php echo wp_kses_post( enban_records_t( 'k45311fd3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-hours__t"} -->
<p class="eb-hours__t">11:00–19:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-hours__row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group eb-hours__row"><!-- wp:paragraph {"className":"eb-hours__d"} -->
<p class="eb-hours__d"><?php echo wp_kses_post( enban_records_t( 'k79e9a3f0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-hours__t"} -->
<p class="eb-hours__t"><?php echo wp_kses_post( enban_records_t( 'kd4872a24' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-hours__row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group eb-hours__row"><!-- wp:paragraph {"className":"eb-hours__d"} -->
<p class="eb-hours__d"><?php echo wp_kses_post( enban_records_t( 'k502598f9' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-hours__t"} -->
<p class="eb-hours__t"><?php echo wp_kses_post( enban_records_t( 'k03f4a478' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( enban_records_t( 'k270f55a6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-visit__contact"} -->
<p class="eb-visit__contact">+00 41 555 0147 · <a href="mailto:hello@enban-records.example"><?php echo wp_kses_post( enban_records_t( 'k021374bd' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-textlink"} -->
<p class="eb-textlink"><a href="/prices/"><?php echo wp_kses_post( enban_records_t( 'k77979d18' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
