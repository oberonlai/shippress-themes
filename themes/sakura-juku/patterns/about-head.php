<?php
/**
 * Title: About: page head
 * Slug: sakura-juku/about-head
 * Categories: sakura-juku
 * Keywords: page head, title, intro
 * Viewport Width: 1280
 * Description: The About page title in a rounded card with a hiragana sticker.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sj-head"><!-- wp:group {"align":"wide","className":"sj-head__grid sj-head__grid--photo","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sj-head__grid sj-head__grid--photo"><!-- wp:group {"className":"sj-head__card sj-sticker sj-kana-ne","layout":{"type":"default"}} -->
<div class="wp-block-group sj-head__card sj-sticker sj-kana-ne"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">About us</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sj-head__title"} -->
<h1 class="wp-block-heading sj-head__title">A small school with a big kettle.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Sakura Juku opened in 2014 in two rooms above a flower shop in Nakano. Today we have four classrooms, eight teachers and students from thirty-one countries, and the kettle is still the most important thing in the building.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-head__photo","layout":{"type":"default"}} -->
<div class="wp-block-group sj-head__photo"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sj-head__img"} -->
<figure class="wp-block-image size-large sj-head__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/group.jpg' ) ); ?>" alt="Four students laughing over notebooks at a long table, a vase of cherry blossoms between them"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
