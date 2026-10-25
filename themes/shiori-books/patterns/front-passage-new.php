<?php
/**
 * Title: Home: the new shelves
 * Slug: shiori-books/front-passage-new
 * Categories: shiori-books
 * Keywords: bookshop, new books, passage
 * Viewport Width: 1440
 * Description: Passage 01. A photograph flush to the right viewport edge with the text column on the left and a small portrait detail under the text.
 */
$sb_img = static function ( $name ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $name . '.webp' ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sb-passage","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sb-passage"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sb-edge sb-edge--right sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full sb-edge sb-edge--right sp-reveal sp-reveal--up"><img src="<?php echo $sb_img( 'new-shelves-hands' ); ?>" alt="<?php echo esc_attr( shiori_books_t( 'alt_new_shelves_hands' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sb-passage__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sb-passage__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sb-label"} -->
<p class="sb-label"><?php echo esc_html( shiori_books_t( 'new_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( shiori_books_t( 'new_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shiori_books_t( 'new_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shiori_books_t( 'new_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-arrow"} -->
<p class="sb-arrow"><a href="/new-books/"><?php echo esc_html( shiori_books_t( 'new_link' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sb-passage__small sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full sb-passage__small sp-reveal sp-reveal--up"><img src="<?php echo $sb_img( 'spines-detail' ); ?>" alt="<?php echo esc_attr( shiori_books_t( 'alt_spines_detail' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
