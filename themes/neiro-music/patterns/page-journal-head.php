<?php
/**
 * Title: News head
 * Slug: neiro-music/page-journal-head
 * Categories: neiro-music
 * Description: News index heading.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"nm-sec nm-pagehead","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nm-sec nm-pagehead"><!-- wp:group {"className":"nm-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nm-wrap"><?php echo neiro_music_rail( neiro_music_t( 'journal_label' ) ); ?>

<!-- wp:heading {"level":1,"className":"nm-h1"} -->
<h1 class="wp-block-heading nm-h1"><?php echo esc_html( neiro_music_t( 'journal_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-lede"} -->
<p class="nm-lede"><?php echo esc_html( neiro_music_t( 'journal_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
