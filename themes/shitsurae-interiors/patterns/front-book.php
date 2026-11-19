<?php
/**
 * Title: Home: book
 * Slug: shitsurae-interiors/front-book
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: The one dark band: the single way to book, a consultation visit, with its facts and a square white button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"dark","textColor":"base","className":"si-sec si-book","anchor":"book","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull si-sec si-book has-base-color has-dark-background-color has-text-color has-background"><!-- wp:group {"className":"si-word si-word--dark sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group si-word si-word--dark sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"si-word__h"} -->
<h2 class="wp-block-heading si-word__h"><?php echo esc_html( shitsurae_interiors_t( 'w_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-word__sub"} -->
<p class="si-word__sub"><?php echo esc_html( shitsurae_interiors_t( 'sub_book' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-book__cols","layout":{"type":"default"}} -->
<div class="wp-block-group si-book__cols"><!-- wp:paragraph {"className":"si-book__p"} -->
<p class="si-book__p"><?php echo esc_html( shitsurae_interiors_t( 'book_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-book__facts","layout":{"type":"default"}} -->
<div class="wp-block-group si-book__facts"><!-- wp:paragraph {"className":"si-book__f"} -->
<p class="si-book__f"><?php echo esc_html( shitsurae_interiors_t( 'book_f1' ) ); ?><br><?php echo esc_html( shitsurae_interiors_t( 'book_f2' ) ); ?><br><a href="tel:+00205550193"><?php echo esc_html( shitsurae_interiors_t( 'book_f3' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-btn"} -->
<p class="si-btn"><a href="<?php echo esc_url( home_url( '/consultation/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
