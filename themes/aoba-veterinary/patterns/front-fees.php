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
<h2 class="wp-block-heading has-text-align-center av-label"><?php echo wp_kses_post( aoba_veterinary_t( 'k006300ef' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-fees__lead"} -->
<p class="has-text-align-center av-fees__lead"><?php echo wp_kses_post( aoba_veterinary_t( 'k80502fcb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"align":"wide","className":"av-pricelist"} -->
<figure class="wp-block-table alignwide av-pricelist"><table><tbody><tr><td><?php echo wp_kses_post( aoba_veterinary_t( 'k08f54be8' ) ); ?></td><td>$65</td></tr><tr><td><?php echo wp_kses_post( aoba_veterinary_t( 'k106c9a67' ) ); ?></td><td>$45</td></tr><tr><td><?php echo wp_kses_post( aoba_veterinary_t( 'k8a89d63c' ) ); ?></td><td>$58</td></tr><tr><td><?php echo wp_kses_post( aoba_veterinary_t( 'kfe28e203' ) ); ?></td><td>$49</td></tr><tr><td><?php echo wp_kses_post( aoba_veterinary_t( 'kebfbf9b3' ) ); ?></td><td>$110</td></tr><tr><td><?php echo wp_kses_post( aoba_veterinary_t( 'kf6166df5' ) ); ?></td><td><?php echo wp_kses_post( aoba_veterinary_t( 'kdfb0e8f3' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( aoba_veterinary_t( 'k1c02742f' ) ); ?></td><td><?php echo wp_kses_post( aoba_veterinary_t( 'k0efb22e1' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( aoba_veterinary_t( 'k6782ada7' ) ); ?></td><td><?php echo wp_kses_post( aoba_veterinary_t( 'kb2560709' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:buttons {"className":"av-arrow av-arrow--center"} -->
<div class="wp-block-buttons av-arrow av-arrow--center"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/fees/"><?php echo wp_kses_post( aoba_veterinary_t( 'k66effee6' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
