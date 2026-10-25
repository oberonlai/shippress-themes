<?php
/**
 * Title: Home: the Saturday reading
 * Slug: shiori-books/front-readings
 * Categories: shiori-books
 * Keywords: bookshop, readings, programme, index
 * Viewport Width: 1440
 * Description: Passage 02. A dense three-column programme list with dimmed past rows and a sticky thumbnail in the left column that follows the hovered row.
 */
$sb_img  = static function ( $name ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $name . '.webp' ) );
};
$sb_rows = array_map(
	static function ( $line ) {
		return explode( '|', $line );
	},
	explode( "\n", shiori_books_t( 'read_rows' ) )
);
$sb_thumbs = array( 'reading-poetry', 'reading-conversation', 'reading-children', 'reading-chairs' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sb-readings","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sb-readings"><!-- wp:group {"className":"sb-readings__intro sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sb-readings__intro sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sb-label"} -->
<p class="sb-label"><?php echo esc_html( shiori_books_t( 'read_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( shiori_books_t( 'read_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shiori_books_t( 'read_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-index","layout":{"type":"default"}} -->
<div class="wp-block-group sb-index"><!-- wp:group {"className":"sb-index__thumbs","layout":{"type":"default"}} -->
<div class="wp-block-group sb-index__thumbs"><?php foreach ( $sb_thumbs as $t ) : ?>

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sb-thumb"} -->
<figure class="wp-block-image size-large sb-thumb"><img src="<?php echo $sb_img( $t ); ?>" alt="<?php echo esc_attr( shiori_books_t( 'alt_' . str_replace( '-', '_', $t ) ) ); ?>"/></figure>
<!-- /wp:image -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-index__rows","layout":{"type":"default"}} -->
<div class="wp-block-group sb-index__rows"><!-- wp:group {"className":"sb-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sb-rows sp-stagger"><?php foreach ( $sb_rows as $r ) : $cls = '1' === trim( $r[3] ) ? 'sb-row sb-row--next' : 'sb-row sb-row--past'; ?>

<!-- wp:group {"className":"<?php echo esc_attr( $cls ); ?> sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group <?php echo esc_attr( $cls ); ?> sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sb-row__t"} -->
<p class="sb-row__t"><a href="/readings/"><?php echo esc_html( $r[0] ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-row__w"} -->
<p class="sb-row__w"><?php echo esc_html( $r[1] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-row__d"} -->
<p class="sb-row__d"><?php echo esc_html( $r[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sb-index__note"} -->
<p class="sb-index__note"><?php echo esc_html( shiori_books_t( 'read_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-arrow"} -->
<p class="sb-arrow"><a href="/readings/"><?php echo esc_html( shiori_books_t( 'read_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
