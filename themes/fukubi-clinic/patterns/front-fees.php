<?php
/**
 * Title: Home: fees
 * Slug: fukubi-clinic/front-fees
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: Fee table as white rows on a pale ground: item, what is included and the price at the right; stacked cards on phones.
 */
?>
<?php
$cols = explode( '|', fc_t( 'fee_cols' ) );
$body = '';
foreach ( explode( '||', fc_t( 'fee_rows' ) ) as $r ) {
	list( $item, $inc, $price ) = explode( '|', $r );
	$body                      .= '<tr><td class="fc-fee__item"><span class="fc-lbl">' . esc_html( $cols[0] ) . '</span>' . esc_html( $item ) . '</td><td class="fc-fee__inc"><span class="fc-lbl">' . esc_html( $cols[1] ) . '</span>' . esc_html( $inc ) . '</td><td class="fc-fee__price"><span class="fc-lbl">' . esc_html( $cols[2] ) . '</span>' . esc_html( $price ) . '</td></tr>';
}
?>
<!-- wp:group {"align":"full","className":"fc-sec fc-sec--white","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-sec fc-sec--white"><!-- wp:group {"className":"fc-in","layout":{"type":"default"}} -->
<div class="wp-block-group fc-in"><?php echo fc_label( fc_t( 'fee_label' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- wp:heading {"className":"fc-h2"} -->
<h2 class="wp-block-heading fc-h2"><?php echo esc_html( fc_t( 'fee_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'fee_line' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<table class="fc-fees"><thead><tr><th><?php echo esc_html( $cols[0] ); ?></th><th><?php echo esc_html( $cols[1] ); ?></th><th><?php echo esc_html( $cols[2] ); ?></th></tr></thead><tbody><?php echo $body; // phpcs:ignore WordPress.Security.EscapeOutput ?></tbody></table>
<!-- /wp:html --><!-- wp:paragraph {"className":"fc-note"} -->
<p class="fc-note"><?php echo esc_html( fc_t( 'fee_note' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"fc-more"} -->
<p class="fc-more"><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( fc_t( 'fee_all' ) ); ?></a><?php echo fc_chev(); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
