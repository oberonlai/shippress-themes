<?php
/**
 * Title: Inner: request card
 * Slug: kataribe-partners/inner-request
 * Categories: kataribe-partners
 * Keywords: request, contact
 * Viewport Width: 1440
 * Description: Pale band with the white docked request card and the navy request button, for the foot of inner pages.
 */
$e = 'kataribe_partners_e';
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kp-request kp-request--small","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kp-request kp-request--small"><!-- wp:group {"className":"kp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kp-wrap"><!-- wp:group {"className":"kp-reqcard","layout":{"type":"default"}} -->
<div class="wp-block-group kp-reqcard"><!-- wp:heading {"className":"kp-reqcard__title"} -->
<h2 class="wp-block-heading kp-reqcard__title"><?php echo $e( 'rq_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"kp-reqcard__list"} -->
<ul class="wp-block-list kp-reqcard__list"><!-- wp:list-item -->
<li><?php echo $e( 'rq_1' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo $e( 'rq_2' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo $e( 'rq_3' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kp-solid"} -->
<div class="wp-block-button kp-solid"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo $e( 'cta' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
