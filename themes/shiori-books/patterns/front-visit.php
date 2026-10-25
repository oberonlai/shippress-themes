<?php
/**
 * Title: Home: visit
 * Slug: shiori-books/front-visit
 * Categories: shiori-books
 * Keywords: bookshop, visit, address, hours
 * Viewport Width: 1440
 * Description: A grain panel flush to the left viewport edge (address, hours, phone, email) and a photograph flush to the right edge, under the invitation.
 */
$sb_img   = static function ( $name ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $name . '.webp' ) );
};
$sb_hours = explode( '|', shiori_books_t( 'visit_hours' ) );
$sb_addr  = explode( '|', shiori_books_t( 'visit_address' ) );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sb-visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sb-visit"><!-- wp:group {"className":"sb-visit__lead sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sb-visit__lead sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sb-label"} -->
<p class="sb-label"><?php echo esc_html( shiori_books_t( 'visit_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( shiori_books_t( 'visit_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shiori_books_t( 'visit_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-panel sb-panel--left","layout":{"type":"default"}} -->
<div class="wp-block-group sb-panel sb-panel--left"><!-- wp:paragraph {"className":"sb-panel__title"} -->
<p class="sb-panel__title"><?php echo esc_html( shiori_books_t( 'visit_title' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-panel__text"} -->
<p class="sb-panel__text"><?php echo esc_html( $sb_addr[0] ); ?><br><?php echo esc_html( isset( $sb_addr[1] ) ? $sb_addr[1] : '' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sb-hours","layout":{"type":"default"}} -->
<div class="wp-block-group sb-hours"><?php for ( $i = 0; $i + 1 < count( $sb_hours ); $i += 2 ) : ?>

<!-- wp:group {"className":"sb-hours__row","layout":{"type":"default"}} -->
<div class="wp-block-group sb-hours__row"><!-- wp:paragraph -->
<p><?php echo esc_html( $sb_hours[ $i ] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $sb_hours[ $i + 1 ] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endfor; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sb-panel__text"} -->
<p class="sb-panel__text"><?php echo esc_html( shiori_books_t( 'visit_phone' ) ); ?><br><a href="mailto:<?php echo esc_attr( shiori_books_t( 'visit_email' ) ); ?>"><?php echo esc_html( shiori_books_t( 'visit_email' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-arrow"} -->
<p class="sb-arrow"><a href="/visit/"><?php echo esc_html( shiori_books_t( 'visit_find' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sb-edge sb-edge--right sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full sb-edge sb-edge--right sp-reveal sp-reveal--up"><img src="<?php echo $sb_img( 'shopfront-dusk' ); ?>" alt="<?php echo esc_attr( shiori_books_t( 'alt_shopfront_dusk' ) ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
