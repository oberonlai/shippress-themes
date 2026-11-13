<?php
/**
 * Title: Home: programmes and fees
 * Slug: hatoba-college/front-fees
 * Categories: hatoba-college
 * Keywords: college, maritime, training, harbour
 * Viewport Width: 1440
 * Description: Full-width ledger of four programmes: name, weeks, next intake and price (prices never clipped; rows stack on phones).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"fees","className":"hc-sec hc-fees","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull hc-sec hc-fees"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'fees_h_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'fees_h_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'fees_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<figure class="wp-block-table hc-ledger"><table><thead><tr><th><?php echo esc_html( hatoba_college_t( 'fees_c1' ) ); ?></th><th><?php echo esc_html( hatoba_college_t( 'fees_c2' ) ); ?></th><th><?php echo esc_html( hatoba_college_t( 'fees_c3' ) ); ?></th><th class="hc-price"><?php echo esc_html( hatoba_college_t( 'fees_c4' ) ); ?></th></tr></thead><tbody><tr><td data-label=""><?php echo esc_html( hatoba_college_t( 'fees_r1n' ) ); ?></td><td><?php echo esc_html( hatoba_college_t( 'fees_r1w' ) ); ?></td><td><?php echo esc_html( hatoba_college_t( 'fees_next' ) ); ?></td><td class="hc-price"><?php echo esc_html( hatoba_college_t( 'fees_r1p' ) ); ?></td></tr><tr><td data-label=""><?php echo esc_html( hatoba_college_t( 'fees_r2n' ) ); ?></td><td><?php echo esc_html( hatoba_college_t( 'fees_r2w' ) ); ?></td><td><?php echo esc_html( hatoba_college_t( 'fees_next2' ) ); ?></td><td class="hc-price"><?php echo esc_html( hatoba_college_t( 'fees_r2p' ) ); ?></td></tr><tr><td data-label=""><?php echo esc_html( hatoba_college_t( 'fees_r3n' ) ); ?></td><td><?php echo esc_html( hatoba_college_t( 'fees_r3w' ) ); ?></td><td><?php echo esc_html( hatoba_college_t( 'fees_next3' ) ); ?></td><td class="hc-price"><?php echo esc_html( hatoba_college_t( 'fees_r3p' ) ); ?></td></tr><tr><td data-label=""><?php echo esc_html( hatoba_college_t( 'fees_r4n' ) ); ?></td><td><?php echo esc_html( hatoba_college_t( 'fees_r4w' ) ); ?></td><td><?php echo esc_html( hatoba_college_t( 'fees_next4' ) ); ?></td><td class="hc-price"><?php echo esc_html( hatoba_college_t( 'fees_r4p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hc-link"} -->
<p class="hc-link"><a href="<?php echo hatoba_college_url( '/programmes/' ); ?>"><?php echo esc_html( hatoba_college_t( 'fees_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
