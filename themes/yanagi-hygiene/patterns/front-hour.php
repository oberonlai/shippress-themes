<?php
/**
 * Title: Home: inspection hour
 * Slug: yanagi-hygiene/front-hour
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, landing
 * Viewport Width: 1440
 * Description: Sticky photograph beside four timed chapters.
 */
?>
<!-- wp:group {"anchor":"hour","align":"full","className":"yh-sec yh-hour","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-sec yh-hour" id="hour"><!-- wp:group {"className":"yh-in","layout":{"type":"default"}} -->
<div class="wp-block-group yh-in"><?php echo yh_lock( yh_t( 'hour_t' ), yh_t( 'hour_s' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"className":"yh-hour__grid","layout":{"type":"default"}} -->
<div class="wp-block-group yh-hour__grid"><!-- wp:group {"className":"yh-hour__media","layout":{"type":"default"}} -->
<div class="wp-block-group yh-hour__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yh-ph yh-hour__sticky"} -->
<figure class="wp-block-image size-full yh-ph yh-hour__sticky"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/i02-kitchen.webp' ) ); ?>" alt="<?php echo esc_attr( yh_t( 'hour_alt' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"yh-hour__chaps","layout":{"type":"default"}} -->
<div class="wp-block-group yh-hour__chaps"><?php
for ( $i = 1; $i <= 4; $i++ ) {
	?>
<!-- wp:group {"className":"yh-chap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yh-chap sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yh-min"} -->
<p class="yh-min"><?php echo esc_html( yh_t( "min{$i}" ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( yh_t( "ch{$i}_h" ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( yh_t( "ch{$i}_p" ) ); ?></p>
<!-- /wp:paragraph --><?php if ( 1 === $i ) { ?><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yh-ph yh-chap__img"} -->
<figure class="wp-block-image size-full yh-ph yh-chap__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/i03-corridor.webp' ) ); ?>" alt="<?php echo esc_attr( yh_t( 'hour_alt3' ) ); ?>"/></figure>
<!-- /wp:image --><?php } elseif ( 3 === $i ) { ?><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yh-ph yh-chap__img"} -->
<figure class="wp-block-image size-full yh-ph yh-chap__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/i04-seal.webp' ) ); ?>" alt="<?php echo esc_attr( yh_t( 'hour_alt4' ) ); ?>"/></figure>
<!-- /wp:image --><?php } ?></div>
<!-- /wp:group -->
<?php } ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
