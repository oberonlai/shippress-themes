<?php
/**
 * Title: Home: full-width price list
 * Slug: aoba-veterinary/front-fees
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: Eight published fees in a full-width two-column list with right-aligned prices that never wrap, a note and an arrow button to the fees page.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-fees","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-fees"><!-- wp:heading {"textAlign":"center","className":"av-label"} -->
<h2 class="wp-block-heading has-text-align-center av-label">Fees</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-fees__lead"} -->
<p class="has-text-align-center av-fees__lead">Published fees, in US dollars. Prices include VAT. You always get a written estimate first.</p>
<!-- /wp:paragraph -->

<!-- wp:table {"align":"wide","className":"av-pricelist"} -->
<figure class="wp-block-table alignwide av-pricelist"><table><tbody><tr><td>First consultation (30 min, full examination)</td><td>$65</td></tr><tr><td>Follow-up consultation (15 min)</td><td>$45</td></tr><tr><td>Annual vaccination (dog DHPP or cat FVRCP), incl. check</td><td>$58</td></tr><tr><td>Microchip and registration</td><td>$49</td></tr><tr><td>Senior blood panel</td><td>$110</td></tr><tr><td>Cat spay / neuter</td><td>from $240</td></tr><tr><td>Dog spay / neuter</td><td>from $380</td></tr><tr><td>Dental scale and polish under anaesthesia</td><td>from $320</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:buttons {"className":"av-arrow av-arrow--center"} -->
<div class="wp-block-buttons av-arrow av-arrow--center"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/fees/">See fees</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
