<?php
/**
 * Title: Notes: sign-up
 * Slug: hatsumei-patent/newsletter-signup
 * Categories: hatsumei-patent
 * Keywords: newsletter, signup
 * Viewport Width: 1440
 * Description: The notes sign-up beside a photograph of technical drawings.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-head hp-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hp-head hp-section--last"><!-- wp:group {"align":"wide","className":"hp-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hp-split"><!-- wp:group {"className":"hp-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hp-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'newsletter_signup_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hp-head__title"} -->
<h1 class="wp-block-heading hp-head__title"><?php echo wp_kses_post( hatsumei_patent_t( 'newsletter_signup_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hatsumei_patent_t( 'newsletter_signup_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hp-form hp-form--row" action="#" method="post"><p class="hp-field"><label for="hp-letter"><?php echo wp_kses_post( hatsumei_patent_t( 'newsletter_signup_04' ) ); ?></label><input id="hp-letter" name="email" type="email" autocomplete="email"></p><p class="hp-field"><button type="submit"><?php echo wp_kses_post( hatsumei_patent_t( 'newsletter_signup_05' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hp-small"} -->
<p class="hp-small"><?php echo wp_kses_post( hatsumei_patent_t( 'newsletter_signup_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hp-split__photo hp-split__photo--tall hp-cut hp-cut--e"} -->
<figure class="wp-block-image size-large hp-split__photo hp-split__photo--tall hp-cut hp-cut--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/drawings-review.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'newsletter_signup_07' ) ); ?>"/><figcaption class="wp-element-caption"><span>(001)</span></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
