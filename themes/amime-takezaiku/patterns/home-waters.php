<?php
/**
 * Title: Home: five steps as a horizontal strip
 * Slug: amime-takezaiku/home-waters
 * Categories: amime-takezaiku
 * Keywords: bamboo, baskets, workshop
 * Viewport Width: 1440
 * Description: The five steps from grove to basket laid out side by side along one horizontal bamboo strip, after the framed watercolour of the bench; the strip scrolls sideways on small screens. In Chinese and Japanese the section line is set vertically.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-section tk-steps", "layout": {"type": "constrained"}} -->
<section id="tk-day" class="wp-block-group alignfull tk-section tk-steps"><!-- wp:group {"align": "wide", "className": "tk-steps__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-steps__head"><!-- wp:paragraph {"className": "tk-eyebrow"} -->
<p class="tk-eyebrow"><?php echo esc_html( amime_takezaiku_t( 'cat_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tk-sec__title"} -->
<h2 class="wp-block-heading tk-sec__title"><?php echo esc_html( amime_takezaiku_t( 'cat_title' ) ); ?></h2>
<!-- /wp:heading -->

<?php if ( '' !== amime_takezaiku_t( 'rail_tate' ) ) : ?>
<!-- wp:paragraph {"className": "tk-tate"} -->
<p class="tk-tate"><?php echo esc_html( amime_takezaiku_t( 'rail_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "tk-steps__strip", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-steps__strip"><!-- wp:group {"className": "tk-steps__art", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-steps__art"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-steps__img"} -->
<figure class="wp-block-image size-full tk-steps__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/workshop.webp' ) ); ?>" alt="<?php echo esc_attr( amime_takezaiku_t( 'alt_layers' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tk-steps__row", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-steps__row"><!-- wp:group {"className": "tk-step tk-step--1", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-step tk-step--1"><!-- wp:paragraph {"className": "tk-step__no"} -->
<p class="tk-step__no">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "tk-step__title"} -->
<h3 class="wp-block-heading tk-step__title"><?php echo esc_html( amime_takezaiku_t( 'pin1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tk-step__text"} -->
<p class="tk-step__text"><?php echo esc_html( amime_takezaiku_t( 'p1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tk-step tk-step--2", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-step tk-step--2"><!-- wp:paragraph {"className": "tk-step__no"} -->
<p class="tk-step__no">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "tk-step__title"} -->
<h3 class="wp-block-heading tk-step__title"><?php echo esc_html( amime_takezaiku_t( 'pin2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tk-step__text"} -->
<p class="tk-step__text"><?php echo esc_html( amime_takezaiku_t( 'p2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tk-step tk-step--3", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-step tk-step--3"><!-- wp:paragraph {"className": "tk-step__no"} -->
<p class="tk-step__no">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "tk-step__title"} -->
<h3 class="wp-block-heading tk-step__title"><?php echo esc_html( amime_takezaiku_t( 'pin3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tk-step__text"} -->
<p class="tk-step__text"><?php echo esc_html( amime_takezaiku_t( 'p3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tk-step tk-step--4", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-step tk-step--4"><!-- wp:paragraph {"className": "tk-step__no"} -->
<p class="tk-step__no">04</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "tk-step__title"} -->
<h3 class="wp-block-heading tk-step__title"><?php echo esc_html( amime_takezaiku_t( 'pin4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tk-step__text"} -->
<p class="tk-step__text"><?php echo esc_html( amime_takezaiku_t( 'p4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tk-step tk-step--5", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-step tk-step--5"><!-- wp:paragraph {"className": "tk-step__no"} -->
<p class="tk-step__no">05</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "tk-step__title"} -->
<h3 class="wp-block-heading tk-step__title"><?php echo esc_html( amime_takezaiku_t( 'pin5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tk-step__text"} -->
<p class="tk-step__text"><?php echo esc_html( amime_takezaiku_t( 'p5_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
