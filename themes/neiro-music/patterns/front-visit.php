<?php
/**
 * Title: Home: visit
 * Slug: neiro-music/front-visit
 * Categories: neiro-music
 * Description: Rail label, address and hours at the left, entrance photograph at the right and a trial lesson button.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"nm-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nm-sec"><!-- wp:group {"className":"nm-wrap nm-rg","layout":{"type":"default"}} -->
<div class="wp-block-group nm-wrap nm-rg"><?php echo neiro_music_rail( neiro_music_t( 'rail_visit' ) ); ?>

<!-- wp:group {"className":"nm-vis","layout":{"type":"default"}} -->
<div class="wp-block-group nm-vis"><!-- wp:group {"className":"nm-vis__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nm-vis__text sp-stagger"><!-- wp:heading {"className":"nm-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading nm-h2 sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'vis_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'vis_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nm-vis__facts sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nm-vis__facts sp-reveal sp-reveal--up"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"nm-label"} -->
<p class="nm-label"><?php echo esc_html( neiro_music_t( 'vis_lab_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-vis__f"} -->
<p class="nm-vis__f"><?php echo wp_kses_post( neiro_music_t( 'vis_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"nm-label"} -->
<p class="nm-label"><?php echo esc_html( neiro_music_t( 'vis_lab_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-vis__f"} -->
<p class="nm-vis__f"><?php echo wp_kses_post( neiro_music_t( 'vis_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"nm-label"} -->
<p class="nm-label"><?php echo esc_html( neiro_music_t( 'vis_lab_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-vis__f"} -->
<p class="nm-vis__f"><?php echo wp_kses_post( neiro_music_t( 'vis_contact' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-vis__side","layout":{"type":"default"}} -->
<div class="wp-block-group nm-vis__side"><?php echo neiro_music_photo( 'p13.webp', neiro_music_t( 'alt_p13' ), 'nm-vis__img sp-reveal sp-reveal--wipe' ); ?>

<!-- wp:buttons {"className":"nm-btn-wrap"} -->
<div class="wp-block-buttons nm-btn-wrap"><!-- wp:button {"className":"nm-btn"} -->
<div class="wp-block-button nm-btn"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( neiro_music_t( 'vis_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
