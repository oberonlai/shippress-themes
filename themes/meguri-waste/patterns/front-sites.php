<?php
/**
 * Title: Home: case-note rows
 * Slug: meguri-waste/front-sites
 * Categories: meguri-waste
 * Viewport Width: 1440
 * Description: Ruled head and two dated case-note rows with a 1.45:1 picture, outline tag chips and a circle arrow.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"sites","className":"mw-sec mw-sites","layout":{"type":"default"}} -->
<section id="sites" class="wp-block-group alignfull mw-sec mw-sites"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'sites_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"mw-case sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-case"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-case__pic"} -->
<figure class="wp-block-image size-full mw-case__pic"><img src="<?php echo meguri_waste_img( 'p08' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p08' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mw-case__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-case__text"><!-- wp:paragraph {"className":"mw-case__meta"} -->
<p class="mw-case__meta"><span class="mw-tagchip"><?php echo esc_html( meguri_waste_t( 'sites_tag' ) ); ?></span> <span class="mw-tagchip"><?php echo esc_html( meguri_waste_t( 'si1_tag' ) ); ?></span> <time><?php echo esc_html( meguri_waste_t( 'si1_date' ) ); ?></time></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><a href="<?php echo esc_url( meguri_waste_t( 'si1_url' ) ); ?>"><?php echo esc_html( meguri_waste_t( 'si1_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'si1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mw-case sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-case"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-case__pic"} -->
<figure class="wp-block-image size-full mw-case__pic"><img src="<?php echo meguri_waste_img( 'p09' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mw-case__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-case__text"><!-- wp:paragraph {"className":"mw-case__meta"} -->
<p class="mw-case__meta"><span class="mw-tagchip"><?php echo esc_html( meguri_waste_t( 'sites_tag' ) ); ?></span> <span class="mw-tagchip"><?php echo esc_html( meguri_waste_t( 'si2_tag' ) ); ?></span> <time><?php echo esc_html( meguri_waste_t( 'si2_date' ) ); ?></time></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><a href="<?php echo esc_url( meguri_waste_t( 'si2_url' ) ); ?>"><?php echo esc_html( meguri_waste_t( 'si2_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'si2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mw-more"} -->
<p class="mw-more"><a href="/site-notes/"><?php echo esc_html( meguri_waste_t( 'sites_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
