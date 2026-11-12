<?php
/**
 * Title: Home: newsletter band
 * Slug: tsubasa-college/front-news
 * Categories: tsubasa-college
 * Keywords: newsletter, subscribe
 * Viewport Width: 1440
 * Description: A pale wash band: a short heading and one line on the left, the newsletter form (email field and submit) on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"hangar-notes","className":"tc-sec tc-news","layout":{"type":"default"}} -->
<section id="hangar-notes" class="wp-block-group alignfull tc-sec tc-news"><!-- wp:group {"align":"wide","className":"tc-news__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tc-news__grid"><!-- wp:group {"className":"tc-news__text","layout":{"type":"default"}} -->
<div class="wp-block-group tc-news__text"><!-- wp:heading {"level":3,"className":"tc-h3"} -->
<h3 class="wp-block-heading tc-h3"><?php echo esc_html( tsubasa_college_t( 'nl_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsubasa_college_t( 'nl_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tc-news__form","layout":{"type":"default"}} -->
<div class="wp-block-group tc-news__form"><!-- wp:pattern {"slug":"tsubasa-college/news-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
