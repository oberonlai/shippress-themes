<?php
/**
 * Title: Home: fees and visit
 * Slug: eiyo-clinic/front-fees
 * Categories: eiyo-clinic
 * Keywords: fees, prices, visit
 * Viewport Width: 1440
 * Description: Quiet price list across the full width (seven rows, prices right-aligned), then the address and hours with a photograph of the reception.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"fees","className":"ec-sec ec-fees","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull ec-sec ec-fees"><!-- wp:group {"className":"ec-in","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in"><!-- wp:heading {"className":"ec-h2"} -->
<h2 class="wp-block-heading ec-h2">Fees</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ec-feelist","layout":{"type":"default"}} -->
<div class="wp-block-group ec-feelist"><!-- wp:group {"className":"ec-fee","layout":{"type":"default"}} -->
<div class="wp-block-group ec-fee"><!-- wp:paragraph {"className":"ec-fee__name"} -->
<p class="ec-fee__name">First consult</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__note"} -->
<p class="ec-fee__note">60 min, three-day food note reviewed, handwritten plan + typed copy within 2 working days</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__price"} -->
<p class="ec-fee__price">$120</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-fee","layout":{"type":"default"}} -->
<div class="wp-block-group ec-fee"><!-- wp:paragraph {"className":"ec-fee__name"} -->
<p class="ec-fee__name">Follow-up</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__note"} -->
<p class="ec-fee__note">30 min, in person</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__price"} -->
<p class="ec-fee__price">$65</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-fee","layout":{"type":"default"}} -->
<div class="wp-block-group ec-fee"><!-- wp:paragraph {"className":"ec-fee__name"} -->
<p class="ec-fee__name">Video follow-up</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__note"} -->
<p class="ec-fee__note">30 min</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__price"} -->
<p class="ec-fee__price">$60</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-fee","layout":{"type":"default"}} -->
<div class="wp-block-group ec-fee"><!-- wp:paragraph {"className":"ec-fee__name"} -->
<p class="ec-fee__name">Three-month plan</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__note"} -->
<p class="ec-fee__note">First consult + 3 follow-ups at weeks 2, 6, 12 + written plan</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__price"} -->
<p class="ec-fee__price">$295</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-fee","layout":{"type":"default"}} -->
<div class="wp-block-group ec-fee"><!-- wp:paragraph {"className":"ec-fee__name"} -->
<p class="ec-fee__name">Family meals consult</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__note"} -->
<p class="ec-fee__note">75 min, up to 4 household members</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__price"} -->
<p class="ec-fee__price">$150</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-fee","layout":{"type":"default"}} -->
<div class="wp-block-group ec-fee"><!-- wp:paragraph {"className":"ec-fee__name"} -->
<p class="ec-fee__name">Grocery walk</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__note"} -->
<p class="ec-fee__note">45 min, at a store near the clinic</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__price"} -->
<p class="ec-fee__price">$80</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-fee","layout":{"type":"default"}} -->
<div class="wp-block-group ec-fee"><!-- wp:paragraph {"className":"ec-fee__name"} -->
<p class="ec-fee__name">Kitchen class</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__note"} -->
<p class="ec-fee__note">2 hours, small group of up to 6, per person</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-fee__price"} -->
<p class="ec-fee__price">$45</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-visit","layout":{"type":"default"}} -->
<div class="wp-block-group ec-visit"><!-- wp:group {"className":"ec-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group ec-visit__text"><!-- wp:paragraph {"className":"ec-addr"} -->
<p class="ec-addr">418 Alder Row, Suite 2, Seattle, WA 98103</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Mon–Fri 8:30–18:00 (Thu until 20:00); Sat 9:00–13:00. Closed Sun and public holidays.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Payment by card. Itemised receipt (superbill) for your insurer on request; we do not bill insurers directly. Cancellation free up to 24 hours before.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ec-chip"} -->
<div class="wp-block-buttons ec-chip"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/fees/' ) ); ?>">Fees & insurance</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-visit__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ec-visit__photo"><?php echo eiyo_clinic_image( 'p13', '' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
