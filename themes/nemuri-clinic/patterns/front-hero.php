<?php
/**
 * Title: Home: offset photo hero with info bar
 * Slug: nemuri-clinic/front-hero
 * Categories: nemuri-clinic
 * Inserter: yes
 * Viewport Width: 1440
 * Description: Photograph set to the right with one large rounded top-left corner, a text panel overlapping its lower-left and a white info bar fused to its bottom-right.
 */
?>
<!-- wp:group {"align":"full","className":"nc-hero","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nc-hero"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-hero__photo sp-parallax"} -->
<figure class="wp-block-image size-full nc-hero__photo sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-consult-room.webp' ) ); ?>" alt="<?php echo esc_attr( 'Dim consultation room at dusk with an armchair, glowing table lamp, and sleep recorder.' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"nc-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__panel"><!-- wp:heading {"level":1,"className":"nc-hero__lead"} -->
<h1 class="wp-block-heading nc-hero__lead"><span class="nc-hero__l1"><?php echo wp_kses_post( nemuri_clinic_t( 'k267cf93e' ) ); ?></span> <span class="nc-hero__l2"><?php echo wp_kses_post( nemuri_clinic_t( 'kdec56bb2' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nc-hero__p"} -->
<p class="nc-hero__p"><?php echo wp_kses_post( nemuri_clinic_t( 'k0ee0337d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nc-hero__bar"} -->
<p class="nc-hero__bar"><a href="/notes/"><span class="nc-bar__d">2026.11.03</span><span class="nc-bar__t"><?php echo wp_kses_post( nemuri_clinic_t( 'k97831474' ) ); ?></span><span class="nc-bar__go" aria-hidden="true"></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
