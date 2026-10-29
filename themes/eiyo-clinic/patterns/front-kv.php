<?php
/**
 * Title: Home: inset photograph
 * Slug: eiyo-clinic/front-kv
 * Categories: eiyo-clinic
 * Keywords: hero, first screen
 * Viewport Width: 1440
 * Description: One rounded photograph inset 32 px from the sides that slowly crossfades between three table scenes and drifts with the scroll; the headline sits under it with a paper strip at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"ec-kvsec","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull ec-kvsec"><!-- wp:group {"className":"ec-kv sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ec-kv sp-parallax"><!-- wp:group {"className":"sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer"><?php echo eiyo_clinic_image( 'p01', 'ec-slide ec-slide--1', 'fetchpriority="high"' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo eiyo_clinic_image( 'p02', 'ec-slide ec-slide--2' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo eiyo_clinic_image( 'p03', 'ec-slide ec-slide--3' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-kvrow","layout":{"type":"default"}} -->
<div class="wp-block-group ec-kvrow"><!-- wp:heading {"className":"ec-h1","level":1} -->
<h1 class="wp-block-heading ec-h1">Plainer everyday meals, planned with you.</h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ec-strip","layout":{"type":"default"}} -->
<div class="wp-block-group ec-strip"><!-- wp:paragraph {"className":"ec-strip__day"} -->
<p class="ec-strip__day">Tue &amp; Thu</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-strip__text"} -->
<p class="ec-strip__text"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">First consults have mornings open this month</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
