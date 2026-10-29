<?php
/**
 * Title: Journal: inset photograph head
 * Slug: eiyo-clinic/journal-head
 * Categories: eiyo-clinic
 * Keywords: journal, header
 * Viewport Width: 1440
 * Description: The inner-page head for the journal index: a rounded photograph inset 32 px with a slow parallax drift, the title under it and a paper strip at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ec-ihsec ec-jhead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ec-ihsec ec-jhead"><!-- wp:group {"className":"ec-ihead sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ec-ihead sp-parallax"><!-- wp:group {"className":"sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer"><?php echo eiyo_clinic_image( 'p03', '' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-kvrow","layout":{"type":"default"}} -->
<div class="wp-block-group ec-kvrow"><!-- wp:heading {"level":1,"className":"ec-h1"} -->
<h1 class="wp-block-heading ec-h1">Journal</h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ec-strip","layout":{"type":"default"}} -->
<div class="wp-block-group ec-strip"><!-- wp:paragraph {"className":"ec-strip__day"} -->
<p class="ec-strip__day">From the consult room</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-strip__text"} -->
<p class="ec-strip__text"><a href="<?php echo esc_url( home_url( '/approach/' ) ); ?>">How a consult runs</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
