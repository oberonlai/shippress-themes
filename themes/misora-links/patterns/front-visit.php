<?php
/**
 * Title: Home: come for a morning
 * Slug: misora-links/front-visit
 * Categories: misora-links
 * Viewport Width: 1440
 * Description: Closing block with a mirrored ticket frame.
 */
?>
<!-- wp:group {"className":"ml-band ml-band--pine ml-band--visit","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-band ml-band--pine ml-band--visit"><!-- wp:group {"className":"ml-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ml-visit__grid"><!-- wp:group {"className":"ml-visit__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ml-visit__col sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ml-label"} -->
<p class="ml-label"><?php echo esc_html( misora_links_t( 'visit_a' ) ); ?> / <em><?php echo esc_html( misora_links_t( 'visit_b' ) ); ?></em></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"ml-sec__h2"} -->
<h2 class="wp-block-heading ml-sec__h2"><?php echo esc_html( misora_links_t( 'visit_h2' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ml-visit__text"} -->
<p class="ml-visit__text"><?php echo esc_html( misora_links_t( 'visit_body' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-visit__hours"} -->
<p class="ml-visit__hours"><?php echo esc_html( misora_links_t( 'visit_addr' ) ); ?><br><?php echo esc_html( misora_links_t( 'visit_h1' ) ); ?><br><?php echo esc_html( misora_links_t( 'visit_h2l' ) ); ?><br><?php echo esc_html( misora_links_t( 'visit_h3' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className":"ml-buttons"} -->
<div class="wp-block-buttons ml-buttons"><!-- wp:button {"className":"ml-btn"} -->
<div class="wp-block-button ml-btn"><a class="wp-block-button__link wp-element-button" href="/morning-sheet/"><?php echo esc_html( misora_links_t( 'visit_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-visit__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ml-visit__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-ticket ml-ticket--lg sp-parallax"} -->
<figure class="wp-block-image size-full ml-ticket ml-ticket--lg sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p10-veranda.webp' ) ); ?>" alt="<?php echo esc_attr( misora_links_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
