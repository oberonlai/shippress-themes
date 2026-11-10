<?php
/**
 * Title: Home: half-and-half first screen
 * Slug: yawara-rheumatology/front-kv
 * Categories: yawara-rheumatology
 * Keywords: hero, clinic, strip, notice
 * Viewport Width: 1440
 * Description: A photo strip over the top half (one wide cell and square cells with seam tabs, drifting sideways) and an all-white half with the lockup, slogan, links, one notice at a time, phone and hours.
 */
$kv_alt   = array(
	'p01' => __( 'A rheumatologist holds a patient\'s wrist in both hands in a bright, window-lit consulting room.', 'yawara-rheumatology' ),
	'p02' => __( 'Two hands with swollen knuckles rest flat on a pale wooden table in daylight.', 'yawara-rheumatology' ),
	'p03' => __( 'A doctor places an ultrasound probe with gel onto a patient\'s wrist.', 'yawara-rheumatology' ),
	'p04' => __( 'A nurse and a patient read a single printed sheet together by a window.', 'yawara-rheumatology' ),
);
$kv_tabs  = array(
	'p02' => array( __( 'Where it hurts', 'yawara-rheumatology' ), __( 'WHERE TO START', 'yawara-rheumatology' ), '/conditions/' ),
	'p03' => array( __( 'How a plan is agreed', 'yawara-rheumatology' ), __( 'FIRST VISIT', 'yawara-rheumatology' ), '/first-visit/' ),
	'p04' => array( __( 'Who stays with you', 'yawara-rheumatology' ), __( 'THE TEAM', 'yawara-rheumatology' ), '/team/' ),
);
$caption  = '<!-- wp:paragraph {"className":"yw-caption"} -->' . "\n" . '<p class="yw-caption">' . esc_html__( 'Consulting room 2 / OCTOBER, 8:40', 'yawara-rheumatology' ) . '</p>' . "\n" . '<!-- /wp:paragraph -->';
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yw-kv"} -->
<section class="wp-block-group alignfull yw-kv"><!-- wp:group {"className":"yw-strip-wrap"} -->
<div class="wp-block-group yw-strip-wrap"><!-- wp:group {"className":"yw-strip sp-marquee"} -->
<div class="wp-block-group yw-strip sp-marquee"><!-- wp:group {"className":"yw-strip__set"} -->
<div class="wp-block-group yw-strip__set"><?php echo yawara_cell( 'p01-wrist.webp', $kv_alt['p01'], $caption, 'yw-cell--wide yw-cell--haze' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php foreach ( $kv_tabs as $k => $tab ) : ?>
<?php echo yawara_cell( $k . ( 'p02' === $k ? '-hands' : ( 'p03' === $k ? '-ultrasound' : '-plan' ) ) . '.webp', $kv_alt[ $k ], yawara_tab( $tab[0], $tab[1], $tab[2] ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="yw-strip__set" aria-hidden="true"><div class="yw-cell yw-cell--wide"><figure class="yw-cell__img"><img src="<?php echo yawara_img( 'p01-wrist.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="" loading="lazy"/></figure></div><?php foreach ( array( 'p02-hands', 'p03-ultrasound', 'p04-plan' ) as $f ) : ?><div class="yw-cell"><figure class="yw-cell__img"><img src="<?php echo yawara_img( $f . '.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="" loading="lazy"/></figure></div><?php endforeach; ?></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-white"} -->
<div class="wp-block-group yw-white"><!-- wp:group {"className":"yw-lockup"} -->
<div class="wp-block-group yw-lockup"><!-- wp:paragraph {"className":"yw-lockup__name"} -->
<p class="yw-lockup__name">Yawara Rheumatology</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-lockup__sub"} -->
<p class="yw-lockup__sub"><?php esc_html_e( 'HARROW QUAY · SINCE 2014', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-slogan"} -->
<div class="wp-block-group yw-slogan"><!-- wp:heading {"level":1,"className":"yw-slogan__h"} -->
<h1 class="wp-block-heading yw-slogan__h"><?php esc_html_e( 'Keep the shape of your day.', 'yawara-rheumatology' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yw-slogan__sub"} -->
<p class="yw-slogan__sub"><?php esc_html_e( 'RHEUMATOLOGY · HARROW QUAY', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-col"} -->
<div class="wp-block-group yw-col"><!-- wp:group {"className":"yw-links"} -->
<div class="wp-block-group yw-links"><!-- wp:paragraph -->
<p><a href="/conditions/"><?php esc_html_e( 'Where it hurts', 'yawara-rheumatology' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/first-visit/"><?php esc_html_e( 'Your first visit', 'yawara-rheumatology' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/fees/"><?php esc_html_e( 'Fees', 'yawara-rheumatology' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-notices"} -->
<div class="wp-block-group yw-notices"><!-- wp:group {"className":"yw-notices__head"} -->
<div class="wp-block-group yw-notices__head"><!-- wp:paragraph {"className":"yw-notices__label"} -->
<p class="yw-notices__label"><?php esc_html_e( 'NOTICES', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-notices__all"} -->
<p class="yw-notices__all"><a href="/journal/"><?php esc_html_e( 'all notices', 'yawara-rheumatology' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-reel"} -->
<div class="wp-block-group yw-reel"><!-- wp:paragraph {"className":"yw-reel__i"} -->
<p class="yw-reel__i"><a href="/journal/"><span class="yw-chip">2026.11.04 <?php esc_html_e( 'Flare-day slots now open at 8:30 on Saturdays', 'yawara-rheumatology' ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-reel__i"} -->
<p class="yw-reel__i"><a href="/fees/"><span class="yw-chip">2026.04.01 <?php esc_html_e( 'Fees reviewed for the new year', 'yawara-rheumatology' ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-reel__i"} -->
<p class="yw-reel__i"><a href="/first-visit/"><span class="yw-chip">2026.03.12 <?php esc_html_e( 'Morning-stiffness diary sheet now printable', 'yawara-rheumatology' ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yw-phone"} -->
<p class="yw-phone"><a href="tel:+15550142300">+1 555 0142 300</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-hours"} -->
<p class="yw-hours"><?php esc_html_e( 'Mon–Fri 8:30–17:30 · Sat 8:30–12:30 · Closed Sun & public holidays', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yw-cta"} -->
<div class="wp-block-buttons yw-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php esc_html_e( 'Book a first visit', 'yawara-rheumatology' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
