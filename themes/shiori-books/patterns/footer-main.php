<?php
/**
 * Title: Footer
 * Slug: shiori-books/footer-main
 * Categories: shiori-books
 * Inserter: no
 * Description: Wordmark and address on the left, four small lists from the 42 % line, a dark bottom bar.
 */
$sb_links = static function ( $key ) {
	$out = array();
	foreach ( explode( ';', shiori_books_t( $key ) ) as $pair ) {
		list( $label, $url ) = explode( '|', $pair );
		$out[]               = '<a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a>';
	}
	return $out;
};
$sb_lists = array(
	array( 'foot_shop_h', $sb_links( 'foot_shop' ) ),
	array( 'foot_read_h', $sb_links( 'foot_read' ) ),
	array( 'foot_info_h', $sb_links( 'foot_info' ) ),
	array( 'foot_hours_h', array_map( 'esc_html', explode( '|', shiori_books_t( 'hours' ) ) ) ),
);
$sb_addr  = array_map( 'esc_html', explode( '|', shiori_books_t( 'foot_addr' ) ) );
?>
<!-- wp:group {"align":"full","className":"sb-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sb-footer"><!-- wp:group {"className":"sb-footer__main","layout":{"type":"default"}} -->
<div class="wp-block-group sb-footer__main"><!-- wp:group {"className":"sb-footer__id","layout":{"type":"default"}} -->
<div class="wp-block-group sb-footer__id"><!-- wp:paragraph {"className":"sb-footer__mark"} -->
<p class="sb-footer__mark"><?php echo esc_html( shiori_books_t( 'door_l_title' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-footer__addr"} -->
<p class="sb-footer__addr"><?php echo implode( '<br>', $sb_addr ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php foreach ( $sb_lists as $l ) : ?>

<!-- wp:group {"className":"sb-footer__list","layout":{"type":"default"}} -->
<div class="wp-block-group sb-footer__list"><!-- wp:paragraph {"className":"sb-list__h"} -->
<p class="sb-list__h"><?php echo esc_html( shiori_books_t( $l[0] ) ); ?></p>
<!-- /wp:paragraph -->
<?php foreach ( $l[1] as $item ) : ?>

<!-- wp:paragraph {"className":"sb-list__i"} -->
<p class="sb-list__i"><?php echo $item; // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->
<?php endforeach; ?></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"dark","textColor":"card","className":"sb-footer__bar","layout":{"type":"default"}} -->
<div class="wp-block-group sb-footer__bar has-card-color has-dark-background-color has-text-color has-background"><!-- wp:paragraph -->
<p><?php echo esc_html( shiori_books_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shiori_books_t( 'foot_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
