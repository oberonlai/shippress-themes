<?php
/**
 * Title: Home: opening hall (parallax)
 * Slug: kasane-venue/front-opening
 * Categories: kasane-venue
 * Viewport Width: 1440
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/k02.webp' ) ); ?>","alt":"<?php echo esc_attr( kasane_venue_t( 'alt_k02' ) ); ?>","dimRatio":20,"customOverlayColor":"#2B2730","isUserOverlayColor":true,"contentPosition":"bottom left","align":"full","className":"kv-opening sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left kv-opening sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim" style="background-color:#2B2730"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kasane_venue_t( 'alt_k02' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k02.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"kv-opening__txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-opening__txt sp-reveal sp-reveal--up">
<!-- wp:heading {"className":"kv-statement"} -->
<h2 class="wp-block-heading kv-statement"><?php echo wp_kses_post( kasane_venue_t( 'open_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kv-opening__line"} -->
<p class="kv-opening__line"><?php echo wp_kses_post( kasane_venue_t( 'open_line' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
