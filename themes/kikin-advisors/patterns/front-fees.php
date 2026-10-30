<?php
/**
 * Title: Home: fees
 * Slug: kikin-advisors/front-fees
 * Categories: kikin-advisors
 * Keywords: pension, adviser, employer briefing
 * Viewport Width: 1440
 * Description: Badge on the right with a vertical headline, the seven-row fee table and the big price line.
 */
?>
<!-- wp:group {"align":"full","anchor":"fees","className":"kk-sec kk-fees","layout":{"type":"default"}} -->
<div id="fees" class="wp-block-group alignfull kk-sec kk-fees"><!-- wp:group {"className":"kk-fees__in","layout":{"type":"default"}} -->
<div class="wp-block-group kk-fees__in"><!-- wp:group {"className":"kk-fees__head","layout":{"type":"default"}} -->
<div class="wp-block-group kk-fees__head"><!-- wp:paragraph {"className":"kk-fees__intro"} -->
<p class="kk-fees__intro"><?php echo esc_html( kikin_advisors_t( 'fees_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo kikin_advisors_vhead( kikin_advisors_t( 'fees_head' ) ); ?>

<?php echo kikin_advisors_badge( kikin_advisors_t( 'fees_badge' ), kikin_advisors_t( 'fees_badge_sub' ) ); ?></div>
<!-- /wp:group -->

<!-- wp:table {"className":"kk-table"} -->
<figure class="wp-block-table kk-table"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( kikin_advisors_t( 'fees_th_item' ) ); ?></th><th><?php echo esc_html( kikin_advisors_t( 'fees_th_price' ) ); ?></th></tr></thead><tbody><?php
for ( $i = 1; $i <= 7; $i++ ) {
	echo '<tr><td><strong>' . kikin_advisors_e( 'fee_' . $i . '_n' ) . '</strong><br>' . kikin_advisors_e( 'fee_' . $i . '_d' ) . '</td><td class="has-text-align-right" data-align="right">' . kikin_advisors_e( 'fee_' . $i . '_p' ) . '</td></tr>';
}
?></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:group {"className":"kk-fees__big","layout":{"type":"default"}} -->
<div class="wp-block-group kk-fees__big"><!-- wp:paragraph {"className":"kk-fees__price"} -->
<p class="kk-fees__price"><?php echo esc_html( kikin_advisors_t( 'fees_big' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kk-fees__priceNote"} -->
<p class="kk-fees__priceNote"><?php echo esc_html( kikin_advisors_t( 'fees_big_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kk-fees__note"} -->
<p class="kk-fees__note"><?php echo esc_html( kikin_advisors_t( 'fees_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
