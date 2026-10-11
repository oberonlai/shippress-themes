<?php
/**
 * Title: Courses: page head
 * Slug: sakura-juku/courses-head
 * Categories: sakura-juku
 * Keywords: page head, title, intro
 * Viewport Width: 1280
 * Description: The Courses page title in a rounded card with a hiragana sticker.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sj-head"><!-- wp:group {"align":"wide","className":"sj-head__grid sj-head__grid--photo","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sj-head__grid sj-head__grid--photo"><!-- wp:group {"className":"sj-head__card sj-sticker sj-kana-sa","layout":{"type":"default"}} -->
<div class="wp-block-group sj-head__card sj-sticker sj-kana-sa"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Courses</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sj-head__title"} -->
<h1 class="wp-block-heading sj-head__title">Six ways to learn Japanese with us.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Every course runs in small groups of twelve at most, with the same friendly teachers. Not sure where to start? Book a free trial lesson and we will suggest one.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Book a free trial lesson</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/levels/">Check your level</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-head__photo","layout":{"type":"default"}} -->
<div class="wp-block-group sj-head__photo"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sj-head__img"} -->
<figure class="wp-block-image size-large sj-head__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/study.jpg' ) ); ?>" alt="Pastel paper circles, pencils and an open notebook on a white desk"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
