<?php
/**
 * Title: Home: fees
 * Slug: shirushi-customs/front-fees
 * Categories: shirushi-customs
 * Keywords: customs, broker, home
 * Viewport Width: 1440
 * Description: A full-width fee table of seven fixed prices with bracket numbers and an amber seal dot.
 */
$img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-fees","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-fees"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter"><?php echo esc_html( sc_t( 'fee_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-head","layout":{"type":"default"}} -->
<div class="wp-block-group sc-head"><!-- wp:heading {"className":"sc-h2"} -->
<h2 class="wp-block-heading sc-h2"><?php echo esc_html( sc_t( 'fee_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-lead"} -->
<p class="sc-lead"><?php echo esc_html( sc_t( 'fee_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"sc-fees__table","hasFixedLayout":false} -->
<figure class="wp-block-table sc-fees__table"><table><thead><tr><th>No.</th><th><?php echo esc_html( sc_t( 'fee_col_svc' ) ); ?></th><th class="has-text-align-right"><?php echo esc_html( sc_t( 'fee_col_price' ) ); ?></th></tr></thead><tbody><?php for ( $i = 1; $i <= 7; $i++ ) : ?><tr><td>( 0<?php echo (int) $i; ?> )</td><td><strong><?php echo esc_html( sc_t( 'fee' . $i . '_t' ) ); ?></strong><br><span class="sc-fees__n"><?php echo esc_html( sc_t( 'fee' . $i . '_n' ) ); ?></span></td><td class="has-text-align-right"><?php echo esc_html( sc_t( 'fee' . $i . '_p' ) ); ?></td></tr><?php endfor; ?></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"sc-fees__note"} -->
<p class="sc-fees__note"><?php echo esc_html( sc_t( 'fee_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-pill"} -->
<p class="sc-pill"><a href="/fees/"><?php echo esc_html( sc_t( 'fee_pill' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
