<?php
/**
 * Title: Home: the people who stay
 * Slug: shiori-books/front-people
 * Categories: shiori-books
 * Keywords: bookshop, people, card
 * Viewport Width: 1440
 * Description: Passage 03. A dark warm-grey field with a ghost ring of letters drifting behind a white rounded card (text left, photograph right) and two capsule links.
 */
$sb_img = static function ( $name ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $name . '.webp' ) );
};
$sb_ring = esc_html( shiori_books_t( 'ppl_ring' ) );
?>
<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"dark","textColor":"card","className":"sb-people sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sb-people sp-parallax has-card-color has-dark-background-color has-text-color has-background"><!-- wp:html -->
<div class="sb-people__ring sp-parallax__layer" aria-hidden="true"><svg viewBox="0 0 1500 1500" width="1500" height="1500" xmlns="http://www.w3.org/2000/svg" focusable="false"><defs><path id="sb-ring" d="M750,110 a640,640 0 1,1 -0.01,0"/></defs><text><textPath href="#sb-ring" textLength="4000" lengthAdjust="spacing"><?php echo $sb_ring; ?></textPath></text></svg></div>
<!-- /wp:html -->

<!-- wp:group {"className":"sb-people__wrap sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group sb-people__wrap sp-reveal sp-reveal--wipe"><!-- wp:group {"backgroundColor":"card","textColor":"ink","className":"sb-card","layout":{"type":"default"}} -->
<div class="wp-block-group sb-card has-ink-color has-card-background-color has-text-color has-background"><!-- wp:group {"className":"sb-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group sb-card__text"><!-- wp:paragraph {"className":"sb-label sb-label--muted"} -->
<p class="sb-label sb-label--muted"><?php echo esc_html( shiori_books_t( 'ppl_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( shiori_books_t( 'ppl_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shiori_books_t( 'ppl_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-card__names"} -->
<p class="sb-card__names"><?php echo esc_html( shiori_books_t( 'ppl_names' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sb-card__photo"} -->
<figure class="wp-block-image size-large sb-card__photo"><img src="<?php echo $sb_img( 'people-recommend' ); ?>" alt="<?php echo esc_attr( shiori_books_t( 'alt_people_recommend' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-capsules","layout":{"type":"default"}} -->
<div class="wp-block-group sb-capsules"><!-- wp:paragraph {"className":"sb-capsule"} -->
<p class="sb-capsule"><a href="/booksellers/"><?php echo esc_html( shiori_books_t( 'ppl_cta1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-capsule sb-capsule--r"} -->
<p class="sb-capsule sb-capsule--r"><a href="/about/"><?php echo esc_html( shiori_books_t( 'ppl_cta2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
