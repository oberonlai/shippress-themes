<?php
/**
 * Title: Home: logbook cases
 * Slug: yanagi-hygiene/front-cases
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, landing
 * Viewport Width: 1440
 * Description: A grey panel with an inset frame holding four logbook cases.
 */
?>
<?php $imgs = array( 1 => 'i07-dining.webp', 2 => 'i08-coldstore.webp', 3 => 'i09-linen.webp', 4 => 'i16-binstore.webp' ); ?>
<!-- wp:group {"anchor":"cases","align":"full","className":"yh-sec yh-cases","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-sec yh-cases" id="cases"><!-- wp:group {"className":"yh-in","layout":{"type":"default"}} -->
<div class="wp-block-group yh-in"><?php echo yh_lock( yh_t( 'case_t' ), yh_t( 'case_s' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"className":"yh-panel sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yh-panel sp-reveal sp-reveal--up"><?php foreach ( $imgs as $i => $f ) { ?>
<!-- wp:group {"className":"yh-case","layout":{"type":"default"}} -->
<div class="wp-block-group yh-case"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yh-ph yh-case__img"} -->
<figure class="wp-block-image size-full yh-ph yh-case__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $f ) ); ?>" alt="<?php echo esc_attr( yh_t( "case{$i}_alt" ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"yh-case__text","layout":{"type":"default"}} -->
<div class="wp-block-group yh-case__text"><!-- wp:paragraph {"className":"yh-case__h"} -->
<p class="yh-case__h"><?php echo esc_html( yh_t( "case{$i}_h" ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( yh_t( "case{$i}_p" ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"yh-case__plan"} -->
<p class="yh-case__plan"><?php echo esc_html( yh_t( "case{$i}_plan" ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php } ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
