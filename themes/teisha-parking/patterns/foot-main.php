<?php
/**
 * Title: Footer block
 * Slug: teisha-parking/foot-main
 * Categories: teisha-parking
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"tp-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group tp-foot__in"><!-- wp:group {"className":"tp-foot__id","layout":{"type":"default"}} -->
<div class="wp-block-group tp-foot__id"><!-- wp:site-title {"level":0,"className":"tp-foot__mark"} /-->

<!-- wp:paragraph {"className":"tp-foot__addr"} -->
<p class="tp-foot__addr"><?php echo esc_html( teisha_parking_t( 'foot_addr' ) ); ?><br><?php echo esc_html( teisha_parking_t( 'foot_hours' ) ); ?><br><?php echo esc_html( teisha_parking_t( 'foot_sites' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tp-foot__links"} -->
<p class="tp-foot__links"><a href="<?php echo esc_url( home_url( '/#sites' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'nav_sites' ) ); ?></a> <a href="<?php echo esc_url( home_url( '/#choosing' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'nav_choosing' ) ); ?></a> <a href="<?php echo esc_url( home_url( '/#contract' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'nav_contract' ) ); ?></a> <a href="<?php echo esc_url( home_url( '/#fees' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'nav_fees' ) ); ?></a> <a href="<?php echo esc_url( home_url( '/#stories' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'nav_stories' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tp-foot__links tp-foot__links--pages"} -->
<p class="tp-foot__links tp-foot__links--pages"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'pg_about' ) ); ?></a> <a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'pg_journal' ) ); ?></a> <a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'pg_newsletter' ) ); ?></a> <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'pg_contact' ) ); ?></a> <a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'pg_privacy' ) ); ?></a> <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'pg_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
