<?php
/**
 * Title: Hero: scattered photo tiles
 * Slug: shizuka-hearing/front-hero
 * Categories: shizuka-hearing
 * Viewport Width: 1440
 * Description: Nine rounded photo tiles scattered around a statement in white highlight strips, on a parallax layer.
 */
?>
<!-- wp:group {"align":"full","className":"sh-hero sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-hero sp-parallax"><!-- wp:group {"className":"sh-tiles sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sh-tiles sp-parallax__layer">
<?php echo shizuka_hearing_img( 'h01', 'sh-tile sh-tile--h01' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo shizuka_hearing_img( 'h02', 'sh-tile sh-tile--h02' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo shizuka_hearing_img( 'h03', 'sh-tile sh-tile--h03' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo shizuka_hearing_img( 'h04', 'sh-tile sh-tile--h04' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo shizuka_hearing_img( 'h05', 'sh-tile sh-tile--h05' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo shizuka_hearing_img( 'h06', 'sh-tile sh-tile--h06' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo shizuka_hearing_img( 'h08', 'sh-tile sh-tile--h08' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo shizuka_hearing_img( 'h10', 'sh-tile sh-tile--h10' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo shizuka_hearing_img( 'h18', 'sh-tile sh-tile--h18' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group sh-hero__copy"><!-- wp:heading {"level":1,"className":"sh-strip"} -->
<h1 class="wp-block-heading sh-strip"><span class="sh-strip__in"><?php echo wp_kses_post( shizuka_hearing_t( 'k47bb3536' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sh-lead"} -->
<p class="sh-lead"><?php echo wp_kses_post( shizuka_hearing_t( 'k9fce6099' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sh-hero__buttons"} -->
<div class="wp-block-buttons sh-hero__buttons">
<!-- wp:button {"className":"sh-pill "} -->
<div class="wp-block-button sh-pill "><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( shizuka_hearing_t( 'k44df529b' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"sh-pill "} -->
<div class="wp-block-button sh-pill "><a class="wp-block-button__link wp-element-button" href="/fitting-method/"><?php echo wp_kses_post( shizuka_hearing_t( 'kf3e02b6a' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sh-notice"} -->
<p class="sh-notice"><?php echo wp_kses_post( shizuka_hearing_t( 'k7002e723' ) ); ?> <a href="/contact/">→</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
