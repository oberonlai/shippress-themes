<?php
/**
 * Title: Home: at the counter
 * Slug: shiori-books/front-counter
 * Categories: shiori-books
 * Keywords: bookshop, prices, services
 * Viewport Width: 1440
 * Description: The price list, all eight rows, full container width.
 */
$sb_rows = array_map(
	static function ( $line ) {
		return explode( '|', $line );
	},
	explode( "\n", shiori_books_t( 'cnt_rows' ) )
);
$sb_th   = explode( '|', shiori_books_t( 'cnt_th' ) );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sb-counter","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sb-counter"><!-- wp:group {"className":"sb-counter__intro","layout":{"type":"default"}} -->
<div class="wp-block-group sb-counter__intro"><!-- wp:paragraph {"className":"sb-label"} -->
<p class="sb-label"><?php echo esc_html( shiori_books_t( 'cnt_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( shiori_books_t( 'cnt_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shiori_books_t( 'cnt_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"sb-prices"} -->
<figure class="wp-block-table sb-prices"><table class="has-fixed-layout"><thead><tr><?php foreach ( $sb_th as $h ) : ?><th><?php echo esc_html( $h ); ?></th><?php endforeach; ?></tr></thead><tbody><?php foreach ( $sb_rows as $r ) : ?><tr><td><?php echo esc_html( $r[0] ); ?></td><td><?php echo esc_html( $r[1] ); ?></td><td><?php echo esc_html( $r[2] ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"sb-counter__foot"} -->
<p class="sb-counter__foot"><?php echo esc_html( shiori_books_t( 'cnt_foot' ) ); ?> · <a href="/services/"><?php echo esc_html( shiori_books_t( 'cnt_link' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
