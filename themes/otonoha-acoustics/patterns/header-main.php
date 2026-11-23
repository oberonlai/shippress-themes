<?php
/**
 * Title: Header: corner tile and centred anchor menu
 * Slug: otonoha-acoustics/header-main
 * Categories: otonoha-acoustics
 * Viewport Width: 1440
 * Description: Sticky header: a graphite logo tile flush top-left, the one centred menu, and a deep Book a room survey tab flush right.
 */
?>
<!-- wp:group {"className":"oto-head","layout":{"type":"default"}} -->
<div class="wp-block-group oto-head"><!-- wp:group {"className":"oto-logo","layout":{"type":"default"}} -->
<div class="wp-block-group oto-logo"><!-- wp:paragraph {"className":"oto-logo__p"} -->
<p class="oto-logo__p"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'logo_name' ) ); ?><br><?php echo esc_html( otonoha_acoustics_t( 'logo_sub' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:navigation {"overlayMenu":"mobile","icon":"handle","overlayBackgroundColor":"deep","overlayTextColor":"base","className":"oto-nav","layout":{"type":"flex","justifyContent":"center"}} /--><!-- wp:paragraph {"className":"oto-tab"} -->
<p class="oto-tab"><a href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'cta_label' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
