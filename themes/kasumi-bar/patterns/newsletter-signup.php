<?php
/**
 * Title: Newsletter: signup
 * Slug: kasumi-bar/newsletter-signup
 * Categories: kasumi-bar
 * Keywords: bar
 * Viewport Width: 1440
 * Description: A quiet email form (connect it to your mailing tool).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kb-section kb-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kb-section kb-section--last"><!-- wp:group {"className":"kb-chapter","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chapter"><!-- wp:heading {"className":"kb-vt"} -->
<h2 class="wp-block-heading kb-vt">Subscribe</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kb-chapter__body","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chapter__body"><!-- wp:html -->
<form class="kb-form" action="#" method="post"><p class="kb-field"><label for="kb-email">Email</label><input id="kb-email" type="email" name="email" autocomplete="email" required></p><p class="kb-field"><button class="wp-element-button" type="submit">Subscribe</button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kb-small"} -->
<p class="kb-small">Four letters a year. Unsubscribe with one click.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large","className":"kb-photo kb-photo--tall"} -->
<figure class="wp-block-image size-large kb-photo kb-photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tea-cocktail.jpg' ) ); ?>" alt="A tea cocktail beside a small clay pot"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
