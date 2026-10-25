<?php
/**
 * Title: Home: the shop in one look
 * Slug: shiori-books/front-shop
 * Categories: shiori-books
 * Keywords: bookshop, shelves, newsletter
 * Viewport Width: 1440
 * Description: A big statement beside three small lists that start on the 42 % line, then a photograph flush to the left viewport edge and a grain panel flush to the right edge.
 */
$sb_img  = static function ( $name ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $name . '.webp' ) );
};
$sb_list = static function ( $key ) {
	return explode( '|', shiori_books_t( $key ) );
};
$sb_fade = array( 8 => 'sb-fade-1', 9 => 'sb-fade-2', 10 => 'sb-fade-3', 11 => 'sb-fade-4' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sb-shop","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sb-shop"><!-- wp:group {"className":"sb-shop__a","layout":{"type":"default"}} -->
<div class="wp-block-group sb-shop__a"><!-- wp:group {"className":"sb-shop__lead","layout":{"type":"default"}} -->
<div class="wp-block-group sb-shop__lead"><!-- wp:paragraph {"className":"sb-label"} -->
<p class="sb-label"><?php echo esc_html( shiori_books_t( 'shop_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"xx-large","className":"sb-statement"} -->
<h2 class="wp-block-heading sb-statement has-xx-large-font-size"><?php echo esc_html( shiori_books_t( 'shop_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-list","layout":{"type":"default"}} -->
<div class="wp-block-group sb-list"><!-- wp:paragraph {"className":"sb-list__h"} -->
<p class="sb-list__h"><?php echo esc_html( shiori_books_t( 'shelves_h' ) ); ?></p>
<!-- /wp:paragraph -->
<?php foreach ( $sb_list( 'shelves' ) as $item ) : ?>

<!-- wp:paragraph {"className":"sb-list__i"} -->
<p class="sb-list__i"><?php echo esc_html( $item ); ?></p>
<!-- /wp:paragraph -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-list sb-list--table","layout":{"type":"default"}} -->
<div class="wp-block-group sb-list sb-list--table"><!-- wp:paragraph {"className":"sb-list__h"} -->
<p class="sb-list__h"><?php echo esc_html( shiori_books_t( 'table_h' ) ); ?></p>
<!-- /wp:paragraph -->
<?php foreach ( $sb_list( 'table' ) as $i => $item ) : $fade = isset( $sb_fade[ $i ] ) ? ' ' . $sb_fade[ $i ] : ''; ?>

<!-- wp:paragraph {"className":"sb-list__i<?php echo esc_attr( $fade ); ?>"} -->
<p class="sb-list__i<?php echo esc_attr( $fade ); ?>"><?php echo esc_html( $item ); ?></p>
<!-- /wp:paragraph -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-list sb-list--info","layout":{"type":"default"}} -->
<div class="wp-block-group sb-list sb-list--info"><!-- wp:paragraph {"className":"sb-list__h"} -->
<p class="sb-list__h"><?php echo esc_html( shiori_books_t( 'info_h' ) ); ?></p>
<!-- /wp:paragraph -->
<?php foreach ( $sb_list( 'hours' ) as $item ) : ?>

<!-- wp:paragraph {"className":"sb-list__i"} -->
<p class="sb-list__i"><?php echo esc_html( $item ); ?></p>
<!-- /wp:paragraph -->
<?php endforeach; ?>

<!-- wp:paragraph {"className":"sb-list__i sb-list__go"} -->
<p class="sb-list__i sb-list__go"><a href="/visit/"><?php echo esc_html( shiori_books_t( 'visit_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-shop__b","layout":{"type":"default"}} -->
<div class="wp-block-group sb-shop__b"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sb-edge sb-edge--left"} -->
<figure class="wp-block-image size-full sb-edge sb-edge--left"><img src="<?php echo $sb_img( 'shop-counter-shelves' ); ?>" alt="<?php echo esc_attr( shiori_books_t( 'alt_shop_counter_shelves' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"sb-shop__p"} -->
<p class="sb-shop__p"><?php echo esc_html( shiori_books_t( 'shop_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sb-panel sb-panel--right","layout":{"type":"default"}} -->
<div class="wp-block-group sb-panel sb-panel--right"><!-- wp:paragraph {"className":"sb-panel__open"} -->
<p class="sb-panel__open"><a href="/subscription/" aria-label="<?php echo esc_attr( shiori_books_t( 'panel_open' ) ); ?>">↗</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-panel__title"} -->
<p class="sb-panel__title"><?php echo esc_html( shiori_books_t( 'panel_title' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-panel__text"} -->
<p class="sb-panel__text"><?php echo esc_html( shiori_books_t( 'panel_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-panel__mail"} -->
<p class="sb-panel__mail"><a href="mailto:<?php echo esc_attr( shiori_books_t( 'panel_email' ) ); ?>"><?php echo esc_html( shiori_books_t( 'panel_email' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-panel__cta"} -->
<p class="sb-panel__cta"><a href="mailto:<?php echo esc_attr( shiori_books_t( 'panel_email' ) ); ?>"><?php echo esc_html( shiori_books_t( 'panel_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
