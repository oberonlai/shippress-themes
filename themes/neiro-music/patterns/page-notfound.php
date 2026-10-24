<?php
/**
 * Title: Not found
 * Slug: neiro-music/page-notfound
 * Categories: neiro-music
 * Description: 404 body.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"nm-sec nm-pagehead","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nm-sec nm-pagehead"><!-- wp:group {"className":"nm-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nm-wrap"><!-- wp:paragraph {"className":"nm-label"} -->
<p class="nm-label"><?php echo esc_html( neiro_music_t( 'nf_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"nm-h1"} -->
<h1 class="wp-block-heading nm-h1"><?php echo esc_html( neiro_music_t( 'nf_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-lede"} -->
<p class="nm-lede"><?php echo esc_html( neiro_music_t( 'nf_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","className":"nm-search"} /-->

<?php echo neiro_music_link( neiro_music_t( 'nf_home' ), '/' ); ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
