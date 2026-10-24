<?php
/**
 * Title: Home: philosophy
 * Slug: neiro-music/front-philosophy
 * Categories: neiro-music
 * Description: Rail label, headline with two paragraphs, one portrait set lower.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"nm-sec","anchor":"philosophy","align":"full","layout":{"type":"default"}} -->
<section id="philosophy" class="wp-block-group alignfull nm-sec"><!-- wp:group {"className":"nm-wrap nm-rg","layout":{"type":"default"}} -->
<div class="wp-block-group nm-wrap nm-rg"><?php echo neiro_music_rail( neiro_music_t( 'rail_philosophy' ) ); ?>

<!-- wp:group {"className":"nm-phi","layout":{"type":"default"}} -->
<div class="wp-block-group nm-phi"><!-- wp:group {"className":"nm-phi__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nm-phi__text sp-stagger"><!-- wp:heading {"className":"nm-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading nm-h2 sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'phi_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'phi_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'phi_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nm-phi__photo sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full nm-phi__photo sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03.webp' ) ); ?>" alt="<?php echo esc_attr( neiro_music_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
