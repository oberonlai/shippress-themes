<?php
/**
 * Title: Home: tickets and prices
 * Slug: hozue-foodfest/front-tickets
 * Categories: hozue-foodfest
 * Viewport Width: 1440
 * Description: A square ticket photograph beside what an early-bird ticket includes, then a full-width price table in a rounded panel with one early-bird button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"tickets","className":"hf-sec hf-sec--ground","layout":{"type":"default"}} -->
<section id="tickets" class="wp-block-group alignfull hf-sec hf-sec--ground"><!-- wp:group {"className":"hf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hf-wrap"><!-- wp:html -->
<div class="hf-chips" aria-hidden="true"><svg width="120" height="54" viewBox="0 0 120 54" xmlns="http://www.w3.org/2000/svg" focusable="false"><circle cx="20" cy="20" r="20" fill="#938B4B"/><circle cx="52" cy="20" r="20" fill="#5B2A38"/><circle cx="84" cy="20" r="20" fill="#DDDDCB"/><defs><linearGradient id="hfbar" x1="0" y1="0" x2="1" y2="0"><stop offset="0" stop-color="#938B4B"/><stop offset="1" stop-color="#5B2A38"/></linearGradient></defs><rect x="0" y="46" width="120" height="8" rx="4" fill="url(#hfbar)"/></svg></div>
<div class="hf-chips hf-chips--r" aria-hidden="true"><svg width="136" height="54" viewBox="0 0 136 54" xmlns="http://www.w3.org/2000/svg" focusable="false"><path d="M0 0A20 20 0 0 0 40 0Z" fill="#938B4B"/><path d="M32 0A20 20 0 0 0 72 0Z" fill="#5B2A38"/><path d="M64 0A20 20 0 0 0 104 0Z" fill="#DDDDCB"/><path d="M96 0A20 20 0 0 0 136 0Z" fill="#938B4B"/><defs><linearGradient id="hfbarr" x1="0" y1="0" x2="1" y2="0"><stop offset="0" stop-color="#5B2A38"/><stop offset="1" stop-color="#938B4B"/></linearGradient></defs><rect x="72" y="46" width="64" height="8" rx="4" fill="url(#hfbarr)"/></svg></div>
<!-- /wp:html -->

<!-- wp:group {"className":"hf-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group hf-sechead"><!-- wp:paragraph {"className":"hf-caps"} -->
<p class="hf-caps"><?php echo esc_html( hozue_foodfest_t( 'tk_caps' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hf-h2"} -->
<h2 class="wp-block-heading hf-h2"><?php echo esc_html( hozue_foodfest_t( 'tk_h2' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-split hf-split--5-7","layout":{"type":"default"}} -->
<div class="wp-block-group hf-split hf-split--5-7"><!-- wp:group {"className":"hf-split__img","layout":{"type":"default"}} -->
<div class="wp-block-group hf-split__img"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-ph hf-ph--11 sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full hf-ph hf-ph--11 sp-reveal sp-reveal--up"><img src="<?php echo hozue_foodfest_img( 't1-wristband.webp' ); ?>" alt="<?php echo hozue_foodfest_a( 'alt_t1' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-split__txt hf-incl","layout":{"type":"default"}} -->
<div class="wp-block-group hf-split__txt hf-incl"><!-- wp:heading {"level":3,"className":"hf-h3"} -->
<h3 class="wp-block-heading hf-h3"><?php echo esc_html( hozue_foodfest_t( 'tk_incl_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hf-incl__l"} -->
<p class="hf-incl__l"><?php echo esc_html( hozue_foodfest_t( 'tk_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-incl__l"} -->
<p class="hf-incl__l"><?php echo esc_html( hozue_foodfest_t( 'tk_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-incl__l"} -->
<p class="hf-incl__l"><?php echo esc_html( hozue_foodfest_t( 'tk_l3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-incl__l"} -->
<p class="hf-incl__l"><?php echo esc_html( hozue_foodfest_t( 'tk_l4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-count"} -->
<p class="hf-count"><?php echo esc_html( hozue_foodfest_t( 'tk_count' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-panel hf-panel--cell","layout":{"type":"default"}} -->
<div class="wp-block-group hf-panel hf-panel--cell"><!-- wp:html -->
<div class="hf-tablewrap"><table class="hf-prices"><thead><tr><th><?php echo esc_html( hozue_foodfest_t( 'tk_h_ticket' ) ); ?></th><th><?php echo esc_html( hozue_foodfest_t( 'tk_h_incl' ) ); ?></th><th class="hf-price"><?php echo esc_html( hozue_foodfest_t( 'tk_early' ) ); ?></th><th class="hf-price"><?php echo esc_html( hozue_foodfest_t( 'tk_regular' ) ); ?></th></tr></thead><tbody><tr><td class="hf-t"><?php echo esc_html( hozue_foodfest_t( 'tk1_n' ) ); ?></td><td class="hf-inc"><?php echo esc_html( hozue_foodfest_t( 'tk1_i' ) ); ?></td><td class="hf-price"><span class="hf-lab"><?php echo esc_html( hozue_foodfest_t( 'tk_early' ) ); ?> </span><?php echo esc_html( hozue_foodfest_t( 'tk1_e' ) ); ?></td><td class="hf-price"><span class="hf-lab"><?php echo esc_html( hozue_foodfest_t( 'tk_regular' ) ); ?> </span><?php echo esc_html( hozue_foodfest_t( 'tk1_r' ) ); ?></td></tr><tr><td class="hf-t"><?php echo esc_html( hozue_foodfest_t( 'tk2_n' ) ); ?></td><td class="hf-inc"><?php echo esc_html( hozue_foodfest_t( 'tk2_i' ) ); ?></td><td class="hf-price"><span class="hf-lab"><?php echo esc_html( hozue_foodfest_t( 'tk_early' ) ); ?> </span><?php echo esc_html( hozue_foodfest_t( 'tk2_e' ) ); ?></td><td class="hf-price"><span class="hf-lab"><?php echo esc_html( hozue_foodfest_t( 'tk_regular' ) ); ?> </span><?php echo esc_html( hozue_foodfest_t( 'tk2_r' ) ); ?></td></tr><tr><td class="hf-t"><?php echo esc_html( hozue_foodfest_t( 'tk3_n' ) ); ?></td><td class="hf-inc"><?php echo esc_html( hozue_foodfest_t( 'tk3_i' ) ); ?></td><td class="hf-price"><span class="hf-lab"><?php echo esc_html( hozue_foodfest_t( 'tk_early' ) ); ?> </span><?php echo esc_html( hozue_foodfest_t( 'tk3_e' ) ); ?></td><td class="hf-price"><span class="hf-lab"><?php echo esc_html( hozue_foodfest_t( 'tk_regular' ) ); ?> </span><?php echo esc_html( hozue_foodfest_t( 'tk3_r' ) ); ?></td></tr><tr><td class="hf-t"><?php echo esc_html( hozue_foodfest_t( 'tk4_n' ) ); ?></td><td class="hf-inc"><?php echo esc_html( hozue_foodfest_t( 'tk4_i' ) ); ?></td><td class="hf-price"><span class="hf-lab"><?php echo esc_html( hozue_foodfest_t( 'tk_early' ) ); ?> </span><?php echo esc_html( hozue_foodfest_t( 'tk4_e' ) ); ?></td><td class="hf-price"><span class="hf-lab"><?php echo esc_html( hozue_foodfest_t( 'tk_regular' ) ); ?> </span><?php echo esc_html( hozue_foodfest_t( 'tk4_r' ) ); ?></td></tr><tr><td class="hf-t"><?php echo esc_html( hozue_foodfest_t( 'tk5_n' ) ); ?></td><td class="hf-inc"><?php echo esc_html( hozue_foodfest_t( 'tk5_i' ) ); ?></td><td class="hf-price"><span class="hf-lab"><?php echo esc_html( hozue_foodfest_t( 'tk_early' ) ); ?> </span><?php echo esc_html( hozue_foodfest_t( 'tk5_e' ) ); ?></td><td class="hf-price"><span class="hf-lab"><?php echo esc_html( hozue_foodfest_t( 'tk_regular' ) ); ?> </span><?php echo esc_html( hozue_foodfest_t( 'tk5_r' ) ); ?></td></tr><tr><td class="hf-t"><?php echo esc_html( hozue_foodfest_t( 'tk6_n' ) ); ?></td><td class="hf-inc"><?php echo esc_html( hozue_foodfest_t( 'tk6_i' ) ); ?></td><td class="hf-price"><span class="hf-lab"><?php echo esc_html( hozue_foodfest_t( 'tk_early' ) ); ?> </span><?php echo esc_html( hozue_foodfest_t( 'tk_free' ) ); ?></td><td class="hf-price"><span class="hf-lab"><?php echo esc_html( hozue_foodfest_t( 'tk_regular' ) ); ?> </span><?php echo esc_html( hozue_foodfest_t( 'tk_free' ) ); ?></td></tr></tbody></table></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hf-note"} -->
<p class="hf-note"><?php echo esc_html( hozue_foodfest_t( 'tk_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hf-btns"} -->
<div class="wp-block-buttons hf-btns"><!-- wp:button {"className":"hf-pill hf-pill--cta"} -->
<div class="wp-block-button hf-pill hf-pill--cta"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#close' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'tk_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
