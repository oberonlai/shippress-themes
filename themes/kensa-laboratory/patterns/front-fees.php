<?php
/**
 * Title: Home: fees
 * Slug: kensa-laboratory/front-fees
 * Categories: kensa-laboratory
 * Keywords: materials testing, laboratory, concrete
 * Viewport Width: 1440
 * Description: Full-width fee table, eight rows with the price column right-aligned, and the turnaround note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kl-sec kl-fees-sec","layout":{"type":"constrained"},"anchor":"fees"} -->
<section id="fees" class="wp-block-group alignfull kl-sec kl-fees-sec"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kensa_laboratory_t( 'lbl_fees' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( kensa_laboratory_t( 'fees_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"className":"kl-fees"} -->
<figure class="wp-block-table kl-fees"><table><thead><tr><th><?php echo esc_html( kensa_laboratory_t( 'fee_th0' ) ); ?></th><th><?php echo esc_html( kensa_laboratory_t( 'fee_th1' ) ); ?></th><th><?php echo esc_html( kensa_laboratory_t( 'fee_th2' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( kensa_laboratory_t( 'fee_0_n' ) ); ?></td><td><?php echo esc_html( kensa_laboratory_t( 'fee_0_u' ) ); ?></td><td><span class="kl-price"><?php echo esc_html( kensa_laboratory_t( 'fee_0_p' ) ); ?></span></td></tr><tr><td><?php echo esc_html( kensa_laboratory_t( 'fee_1_n' ) ); ?></td><td><?php echo esc_html( kensa_laboratory_t( 'fee_1_u' ) ); ?></td><td><span class="kl-price"><?php echo esc_html( kensa_laboratory_t( 'fee_1_p' ) ); ?></span></td></tr><tr><td><?php echo esc_html( kensa_laboratory_t( 'fee_2_n' ) ); ?></td><td><?php echo esc_html( kensa_laboratory_t( 'fee_2_u' ) ); ?></td><td><span class="kl-price"><?php echo esc_html( kensa_laboratory_t( 'fee_2_p' ) ); ?></span></td></tr><tr><td><?php echo esc_html( kensa_laboratory_t( 'fee_3_n' ) ); ?></td><td><?php echo esc_html( kensa_laboratory_t( 'fee_3_u' ) ); ?></td><td><span class="kl-price"><?php echo esc_html( kensa_laboratory_t( 'fee_3_p' ) ); ?></span></td></tr><tr><td><?php echo esc_html( kensa_laboratory_t( 'fee_4_n' ) ); ?></td><td><?php echo esc_html( kensa_laboratory_t( 'fee_4_u' ) ); ?></td><td><span class="kl-price"><?php echo esc_html( kensa_laboratory_t( 'fee_4_p' ) ); ?></span></td></tr><tr><td><?php echo esc_html( kensa_laboratory_t( 'fee_5_n' ) ); ?></td><td><?php echo esc_html( kensa_laboratory_t( 'fee_5_u' ) ); ?></td><td><span class="kl-price"><?php echo esc_html( kensa_laboratory_t( 'fee_5_p' ) ); ?></span></td></tr><tr><td><?php echo esc_html( kensa_laboratory_t( 'fee_6_n' ) ); ?></td><td><?php echo esc_html( kensa_laboratory_t( 'fee_6_u' ) ); ?></td><td><span class="kl-price"><?php echo esc_html( kensa_laboratory_t( 'fee_6_p' ) ); ?></span></td></tr><tr><td><?php echo esc_html( kensa_laboratory_t( 'fee_7_n' ) ); ?></td><td><?php echo esc_html( kensa_laboratory_t( 'fee_7_u' ) ); ?></td><td><span class="kl-price"><?php echo esc_html( kensa_laboratory_t( 'fee_7_p' ) ); ?></span></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"kl-note"} -->
<p class="kl-note"><?php echo esc_html( kensa_laboratory_t( 'fees_note' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
