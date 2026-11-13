<?php
/**
 * Title: Home: what a review costs
 * Slug: katachi-ergonomics/fees
 * Categories: katachi-ergonomics
 * Keywords: ergonomics, workplace, desk, consultancy
 * Viewport Width: 1440
 * Description: Full-width fee table of five items with prices that are never clipped; rows stack on phones.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"fees","className":"ke-sec ke-fees","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull ke-sec ke-fees"><!-- wp:group {"className":"ke-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ke-wrap"><!-- wp:group {"className":"ke-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group ke-sechead"><!-- wp:heading {"level":2,"className":"ke-h2 ke-h2--c"} -->
<h2 class="wp-block-heading ke-h2 ke-h2--c"><?php echo esc_html( katachi_ergonomics_t( 'fees_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ke-statement"} -->
<p class="ke-statement"><?php echo esc_html( katachi_ergonomics_t( 'fees_st' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<figure class="wp-block-table ke-feetable"><table><thead><tr><th><?php echo esc_html( katachi_ergonomics_t( 'fee_c1' ) ); ?></th><th class="ke-price"><?php echo esc_html( katachi_ergonomics_t( 'fee_c2' ) ); ?></th></tr></thead><tbody><tr><td class="ke-item"><span class="ke-item__n"><?php echo esc_html( katachi_ergonomics_t( 'fee1_n' ) ); ?></span><span class="ke-item__note"><?php echo esc_html( katachi_ergonomics_t( 'fee1_d' ) ); ?></span></td><td class="ke-price"><?php echo esc_html( katachi_ergonomics_t( 'fee1_p' ) ); ?></td></tr><tr><td class="ke-item"><span class="ke-item__n"><?php echo esc_html( katachi_ergonomics_t( 'fee2_n' ) ); ?></span><span class="ke-item__note"><?php echo esc_html( katachi_ergonomics_t( 'fee2_d' ) ); ?></span></td><td class="ke-price"><?php echo esc_html( katachi_ergonomics_t( 'fee2_p' ) ); ?></td></tr><tr><td class="ke-item"><span class="ke-item__n"><?php echo esc_html( katachi_ergonomics_t( 'fee3_n' ) ); ?></span><span class="ke-item__note"><?php echo esc_html( katachi_ergonomics_t( 'fee3_d' ) ); ?></span></td><td class="ke-price"><?php echo esc_html( katachi_ergonomics_t( 'fee3_p' ) ); ?></td></tr><tr><td class="ke-item"><span class="ke-item__n"><?php echo esc_html( katachi_ergonomics_t( 'fee4_n' ) ); ?></span><span class="ke-item__note"><?php echo esc_html( katachi_ergonomics_t( 'fee4_d' ) ); ?></span></td><td class="ke-price"><?php echo esc_html( katachi_ergonomics_t( 'fee4_p' ) ); ?></td></tr><tr><td class="ke-item"><span class="ke-item__n"><?php echo esc_html( katachi_ergonomics_t( 'fee5_n' ) ); ?></span><span class="ke-item__note"><?php echo esc_html( katachi_ergonomics_t( 'fee5_d' ) ); ?></span></td><td class="ke-price"><?php echo esc_html( katachi_ergonomics_t( 'fee5_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:html -->

<!-- wp:group {"className":"ke-feefoot","layout":{"type":"default"}} -->
<div class="wp-block-group ke-feefoot"><!-- wp:paragraph {"className":"ke-feenote"} -->
<p class="ke-feenote"><?php echo esc_html( katachi_ergonomics_t( 'fees_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-more ke-more--arrow"} -->
<p class="ke-more ke-more--arrow"><a href="<?php echo katachi_ergonomics_url( '/fees/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'fees_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
