<?php
/**
 * Title: Home: sites
 * Slug: yanagi-hygiene/front-sites
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, landing
 * Viewport Width: 1440
 * Description: A drawn building cross-section with six plus pills laid over it.
 */
?>
<!-- wp:group {"anchor":"sites","align":"full","className":"yh-sec yh-sites","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-sec yh-sites" id="sites"><!-- wp:group {"className":"yh-in","layout":{"type":"default"}} -->
<div class="wp-block-group yh-in"><?php echo yh_lock( yh_t( 'sites_t' ), yh_t( 'sites_s' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"className":"yh-plan","layout":{"type":"default"}} -->
<div class="wp-block-group yh-plan"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yh-plan__img"} -->
<figure class="wp-block-image size-full yh-plan__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/section.svg' ) ); ?>" alt="<?php echo esc_attr( yh_t( 'sites_alt' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"yh-plan__pills","layout":{"type":"default"}} -->
<div class="wp-block-group yh-plan__pills"><?php for ( $i = 1; $i <= 6; $i++ ) { echo yh_pill( 'yh-pill yh-pill--' . $i, yh_t( "pill{$i}" ), yh_t( "pill{$i}_n" ) ) . "\n"; } // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"yh-sites__p sp-reveal sp-reveal--up"} -->
<p class="yh-sites__p sp-reveal sp-reveal--up"><?php echo esc_html( yh_t( 'sites_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
