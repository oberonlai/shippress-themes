<?php
/**
 * Title: Home: records
 * Slug: yanagi-hygiene/front-records
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, landing
 * Viewport Width: 1440
 * Description: A photograph beside a ruled list of what every visit leaves behind.
 */
?>
<!-- wp:group {"anchor":"records","align":"full","className":"yh-sec yh-records","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-sec yh-records" id="records"><!-- wp:group {"className":"yh-in","layout":{"type":"default"}} -->
<div class="wp-block-group yh-in"><?php echo yh_lock( yh_t( 'rec_t' ), yh_t( 'rec_s' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"className":"yh-records__grid","layout":{"type":"default"}} -->
<div class="wp-block-group yh-records__grid"><!-- wp:group {"className":"yh-records__media","layout":{"type":"default"}} -->
<div class="wp-block-group yh-records__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yh-ph yh-records__img"} -->
<figure class="wp-block-image size-full yh-ph yh-records__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/i06-sheet.webp' ) ); ?>" alt="<?php echo esc_attr( yh_t( 'rec_alt' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"yh-records__text","layout":{"type":"default"}} -->
<div class="wp-block-group yh-records__text"><!-- wp:group {"className":"yh-rlist sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yh-rlist sp-stagger"><?php for ( $i = 1; $i <= 5; $i++ ) { ?>
<!-- wp:group {"className":"yh-ritem sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yh-ritem sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yh-ritem__a"} -->
<p class="yh-ritem__a"><?php echo esc_html( yh_t( "rec{$i}_a" ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"yh-ritem__b"} -->
<p class="yh-ritem__b"><?php echo esc_html( yh_t( "rec{$i}_b" ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php } ?></div>
<!-- /wp:group --><!-- wp:paragraph -->
<p><?php echo esc_html( yh_t( 'rec_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
