<?php
/**
 * Title: Page: Hall Two waitlist
 * Slug: shoko-archives/page-newsletter
 * Categories: shoko-archives
 * Inserter: no
 * Viewport Width: 1440
 * Description: A standalone waitlist page with the newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"sa-phead","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull sa-phead"><!-- wp:group {"className":"sa-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap"><!-- wp:heading {"level":1,"className":"sa-phead__h1"} -->
<h1 class="wp-block-heading sa-phead__h1"><?php echo esc_html( shoko_archives_t( 'nlp_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-sub"} -->
<p class="sa-sub"><?php echo esc_html( shoko_archives_t( 'nlp_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sa-sec sa-sec--end","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sa-sec sa-sec--end"><!-- wp:group {"className":"sa-wrap sa-wrap--page","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap sa-wrap--page"><!-- wp:heading {"className":"sa-h2"} -->
<h2 class="wp-block-heading sa-h2"><?php echo esc_html( shoko_archives_t( 'nlp_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-intro"} -->
<p class="sa-intro"><?php echo esc_html( shoko_archives_t( 'nlp_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sa-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group sa-formbox"><!-- wp:pattern {"slug":"shoko-archives/news-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
