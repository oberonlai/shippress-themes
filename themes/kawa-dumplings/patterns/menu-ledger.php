<?php
/**
 * Title: Home: the menu
 * Slug: kawa-dumplings/menu-ledger
 * Categories: kawa-dumplings
 * Viewport Width: 1440
 * Description: Six baskets as a full-width price table with dotted leaders; prices never clipped.
 */
?>
<!-- wp:group {"tagName":"section","className":"kd-sec kd-menusec","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-menusec"><!-- wp:group {"className":"kd-wide","layout":{"type":"default"}} -->
<div class="wp-block-group kd-wide"><!-- wp:group {"className":"kd-tabbar","layout":{"type":"default"}} -->
<div class="wp-block-group kd-tabbar"><!-- wp:paragraph {"className":"kd-tab"} -->
<p class="kd-tab"><?php echo esc_html( kawa_dumplings_t( 'tab_baskets' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-menutop","layout":{"type":"default"}} -->
<div class="wp-block-group kd-menutop"><!-- wp:group {"className":"kd-menutop__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kd-menutop__text sp-reveal sp-reveal--up"><!-- wp:heading {"className":"kd-h2"} -->
<h2 class="wp-block-heading kd-h2"><?php echo esc_html( kawa_dumplings_t( 'mn_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-p"} -->
<p class="kd-p"><?php echo esc_html( kawa_dumplings_t( 'mn_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-link"} -->
<p class="kd-link"><a href="/menu/"><?php echo esc_html( kawa_dumplings_t( 'mn_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-menutop__fig sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kd-menutop__fig sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kd-menutop__img"} -->
<figure class="wp-block-image size-full kd-menutop__img"><img src="<?php echo esc_url( kawa_dumplings_img( 'dumpling-on-spoon.webp' ) ); ?>" alt="<?php echo esc_attr( kawa_dumplings_t( 'alt_p11' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<table class="kd-menu"><thead><tr><th scope="col"><?php echo esc_html( kawa_dumplings_t( 'mn_dish' ) ); ?></th><th scope="col"><?php echo esc_html( kawa_dumplings_t( 'mn_pcs' ) ); ?></th><th scope="col"><?php echo esc_html( kawa_dumplings_t( 'mn_note' ) ); ?></th><th scope="col" aria-hidden="true"></th><th scope="col"><?php echo esc_html( kawa_dumplings_t( 'mn_price' ) ); ?></th></tr></thead><tbody><tr><td class="kd-menu__dish"><?php echo esc_html( kawa_dumplings_t( 'm1' ) ); ?></td><td class="kd-menu__pcs"><?php echo esc_html( kawa_dumplings_t( 'm1_n' ) ); ?></td><td class="kd-menu__note"><?php echo esc_html( kawa_dumplings_t( 'm1_x' ) ); ?></td><td class="kd-menu__lead" aria-hidden="true"></td><td class="kd-menu__price"><?php echo esc_html( kawa_dumplings_t( 'm1_p' ) ); ?></td></tr><tr><td class="kd-menu__dish"><?php echo esc_html( kawa_dumplings_t( 'm2' ) ); ?></td><td class="kd-menu__pcs"><?php echo esc_html( kawa_dumplings_t( 'm2_n' ) ); ?></td><td class="kd-menu__note"><?php echo esc_html( kawa_dumplings_t( 'm2_x' ) ); ?></td><td class="kd-menu__lead" aria-hidden="true"></td><td class="kd-menu__price"><?php echo esc_html( kawa_dumplings_t( 'm2_p' ) ); ?></td></tr><tr><td class="kd-menu__dish"><?php echo esc_html( kawa_dumplings_t( 'm3' ) ); ?></td><td class="kd-menu__pcs"><?php echo esc_html( kawa_dumplings_t( 'm3_n' ) ); ?></td><td class="kd-menu__note"><?php echo esc_html( kawa_dumplings_t( 'm3_x' ) ); ?></td><td class="kd-menu__lead" aria-hidden="true"></td><td class="kd-menu__price"><?php echo esc_html( kawa_dumplings_t( 'm3_p' ) ); ?></td></tr><tr><td class="kd-menu__dish"><?php echo esc_html( kawa_dumplings_t( 'm4' ) ); ?></td><td class="kd-menu__pcs"><?php echo esc_html( kawa_dumplings_t( 'm4_n' ) ); ?></td><td class="kd-menu__note"><?php echo esc_html( kawa_dumplings_t( 'm4_x' ) ); ?></td><td class="kd-menu__lead" aria-hidden="true"></td><td class="kd-menu__price"><?php echo esc_html( kawa_dumplings_t( 'm4_p' ) ); ?></td></tr><tr><td class="kd-menu__dish"><?php echo esc_html( kawa_dumplings_t( 'm5' ) ); ?></td><td class="kd-menu__pcs"><?php echo esc_html( kawa_dumplings_t( 'm5_n' ) ); ?></td><td class="kd-menu__note"><?php echo esc_html( kawa_dumplings_t( 'm5_x' ) ); ?></td><td class="kd-menu__lead" aria-hidden="true"></td><td class="kd-menu__price"><?php echo esc_html( kawa_dumplings_t( 'm5_p' ) ); ?></td></tr><tr><td class="kd-menu__dish"><?php echo esc_html( kawa_dumplings_t( 'm6' ) ); ?></td><td class="kd-menu__pcs">—</td><td class="kd-menu__note"><?php echo esc_html( kawa_dumplings_t( 'm6_x' ) ); ?></td><td class="kd-menu__lead" aria-hidden="true"></td><td class="kd-menu__price"><?php echo esc_html( kawa_dumplings_t( 'm6_p' ) ); ?></td></tr></tbody></table>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
