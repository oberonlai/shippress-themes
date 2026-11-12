<?php
/**
 * Title: Home: fee table
 * Slug: homura-safety/front-fees
 * Categories: homura-safety
 * Keywords: fees, price, table
 * Viewport Width: 1440
 * Description: The five fixed review fees as a full-width table with the price right-aligned and never clipped; rows stack on mobile.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"fees","className":"hs-sec hs-sec--pale hs-fees","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull hs-sec hs-sec--pale hs-fees"><!-- wp:group {"align":"wide","className":"hs-title hs-title--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-title hs-title--row"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'fe_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'fe_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"align":"wide","className":"hs-feetable"} -->
<figure class="wp-block-table alignwide hs-feetable"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( homura_safety_t( 'fe_c1' ) ); ?></th><th><?php echo esc_html( homura_safety_t( 'fe_c2' ) ); ?></th><th><?php echo esc_html( homura_safety_t( 'fe_c3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( homura_safety_t( 'fe1_s' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe1_d' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( homura_safety_t( 'fe2_s' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe2_d' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( homura_safety_t( 'fe3_s' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe3_d' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( homura_safety_t( 'fe4_s' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe4_d' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( homura_safety_t( 'fe5_s' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe5_d' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe5_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"hs-note"} -->
<p class="hs-note"><?php echo esc_html( homura_safety_t( 'fe_note' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
