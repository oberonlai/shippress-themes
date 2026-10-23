<?php
/**
 * Title: Home: overlapping pair hero
 * Slug: neiro-music/front-hero
 * Categories: neiro-music
 * Description: Two overlapping portrait photographs at the left, the headline with an indented third line at the right.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"nm-hero","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nm-hero"><!-- wp:group {"className":"nm-wrap nm-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nm-wrap nm-hero__grid"><!-- wp:group {"className":"nm-pair","layout":{"type":"default"}} -->
<div class="wp-block-group nm-pair"><?php echo neiro_music_photo( 'p01.webp', neiro_music_t( 'alt_p01' ), 'nm-pair__big' ); ?>

<?php echo neiro_music_photo( 'p02.webp', neiro_music_t( 'alt_p02' ), 'nm-pair__small' ); ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group nm-hero__text"><!-- wp:heading {"level":1,"className":"nm-hero__h"} -->
<h1 class="wp-block-heading nm-hero__h"><span class="nm-line"><?php echo esc_html( neiro_music_t( 'hero_h1_1' ) ); ?></span> <span class="nm-line"><?php echo esc_html( neiro_music_t( 'hero_h1_2' ) ); ?></span> <span class="nm-line nm-indent"><?php echo esc_html( neiro_music_t( 'hero_h1_3' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-hero__p"} -->
<p class="nm-hero__p"><?php echo esc_html( neiro_music_t( 'hero_p' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo neiro_music_link( neiro_music_t( 'hero_cta' ), '#day' ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
