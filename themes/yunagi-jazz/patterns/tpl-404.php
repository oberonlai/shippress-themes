<?php
/**
 * Title: Template: not found
 * Slug: yunagi-jazz/tpl-404
 * Categories: yunagi-jazz
 * Viewport Width: 1440
 * Description: Not-found page.
 */
?>
<!-- wp:group {"className":"yj-sheet yj-sheet--post","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group yj-sheet yj-sheet--post">
<!-- wp:group {"className":"yj-col","layout":{"type":"default"}} -->
<div class="wp-block-group yj-col">
<!-- wp:paragraph {"className":"yj-eyebrow yj-eyebrow--dark"} -->
<p class="yj-eyebrow yj-eyebrow--dark"><?php echo esc_html( yunagi_jazz_t( 't404_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yj-h1 yj-h1--dark"} -->
<h1 class="wp-block-heading yj-h1 yj-h1--dark"><?php echo esc_html( yunagi_jazz_t( 't404_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yj-narr__p"} -->
<p class="yj-narr__p"><?php echo esc_html( yunagi_jazz_t( 't404_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-more"} -->
<p class="yj-more"><a href="/"><?php echo esc_html( yunagi_jazz_t( 't404_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
