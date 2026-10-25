<?php
/**
 * Title: Home: entrance
 * Slug: shiori-books/front-entrance
 * Categories: shiori-books
 * Keywords: bookshop, entrance, hero
 * Viewport Width: 1440
 * Description: Two equal full-height halves, the day (a bookseller wrapping a hardcover) and the evening (the back room before a reading), each with a small caps title, a four-line blurb and a bracket label.
 */
$sb_img = static function ( $name ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $name . '.webp' ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sb-entrance","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sb-entrance"><!-- wp:cover {"url":"<?php echo $sb_img( 'hero-front-table' ); ?>","dimRatio":60,"customOverlayColor":"#908f8b","alt":"<?php echo esc_attr( shiori_books_t( 'alt_hero_front_table' ) ); ?>","focalPoint":{"x":0.4,"y":0.5},"className":"sb-door sb-door--day sp-parallax"} -->
<div class="wp-block-cover sb-door sb-door--day sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#908f8b"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( shiori_books_t( 'alt_hero_front_table' ) ); ?>" src="<?php echo $sb_img( 'hero-front-table' ); ?>" style="object-position:40% 50%" data-object-fit="cover" data-object-position="40% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"sb-door__title"} -->
<h1 class="wp-block-heading sb-door__title"><a class="sb-door__link" href="/visit/" aria-label="<?php echo esc_attr( shiori_books_t( 'door_l_aria' ) ); ?>"><?php echo esc_html( shiori_books_t( 'door_l_title' ) ); ?></a></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sb-door__blurb"} -->
<p class="sb-door__blurb"><?php echo esc_html( shiori_books_t( 'door_l_blurb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-door__label"} -->
<p class="sb-door__label"><?php echo esc_html( shiori_books_t( 'door_l_label' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo $sb_img( 'hero-evening-shelves' ); ?>","dimRatio":70,"customOverlayColor":"#44413c","alt":"<?php echo esc_attr( shiori_books_t( 'alt_hero_evening_shelves' ) ); ?>","className":"sb-door sb-door--night sp-parallax"} -->
<div class="wp-block-cover sb-door sb-door--night sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#44413c"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( shiori_books_t( 'alt_hero_evening_shelves' ) ); ?>" src="<?php echo $sb_img( 'hero-evening-shelves' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"sb-door__title"} -->
<p class="sb-door__title"><a class="sb-door__link" href="/readings/" aria-label="<?php echo esc_attr( shiori_books_t( 'door_r_aria' ) ); ?>"><?php echo esc_html( shiori_books_t( 'door_r_title' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-door__blurb"} -->
<p class="sb-door__blurb"><?php echo esc_html( shiori_books_t( 'door_r_blurb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-door__label"} -->
<p class="sb-door__label"><?php echo esc_html( shiori_books_t( 'door_r_label' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->
