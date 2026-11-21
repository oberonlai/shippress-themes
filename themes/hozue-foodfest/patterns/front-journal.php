<?php
/**
 * Title: Home: from the journal
 * Slug: hozue-foodfest/front-journal
 * Categories: hozue-foodfest
 * Viewport Width: 1440
 * Description: One wide cell with a thumbnail, date, title, excerpt and link to the latest post.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"journal","className":"hf-sec hf-sec--ground","layout":{"type":"default"}} -->
<section id="journal" class="wp-block-group alignfull hf-sec hf-sec--ground"><!-- wp:group {"className":"hf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hf-wrap"><!-- wp:html -->
<div class="hf-chips" aria-hidden="true"><svg width="120" height="54" viewBox="0 0 120 54" xmlns="http://www.w3.org/2000/svg" focusable="false"><circle cx="20" cy="20" r="20" fill="#938B4B"/><circle cx="52" cy="20" r="20" fill="#5B2A38"/><circle cx="84" cy="20" r="20" fill="#DDDDCB"/><defs><linearGradient id="hfbar" x1="0" y1="0" x2="1" y2="0"><stop offset="0" stop-color="#938B4B"/><stop offset="1" stop-color="#5B2A38"/></linearGradient></defs><rect x="0" y="46" width="120" height="8" rx="4" fill="url(#hfbar)"/></svg></div>
<div class="hf-chips hf-chips--r" aria-hidden="true"><svg width="136" height="54" viewBox="0 0 136 54" xmlns="http://www.w3.org/2000/svg" focusable="false"><path d="M0 0A20 20 0 0 0 40 0Z" fill="#938B4B"/><path d="M32 0A20 20 0 0 0 72 0Z" fill="#5B2A38"/><path d="M64 0A20 20 0 0 0 104 0Z" fill="#DDDDCB"/><path d="M96 0A20 20 0 0 0 136 0Z" fill="#938B4B"/><defs><linearGradient id="hfbarr" x1="0" y1="0" x2="1" y2="0"><stop offset="0" stop-color="#5B2A38"/><stop offset="1" stop-color="#938B4B"/></linearGradient></defs><rect x="72" y="46" width="64" height="8" rx="4" fill="url(#hfbarr)"/></svg></div>
<!-- /wp:html -->

<!-- wp:group {"className":"hf-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group hf-sechead"><!-- wp:paragraph {"className":"hf-caps"} -->
<p class="hf-caps"><?php echo esc_html( hozue_foodfest_t( 'jr_caps' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hf-h2"} -->
<h2 class="wp-block-heading hf-h2"><?php echo esc_html( hozue_foodfest_t( 'jr_h2' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-panel hf-panel--feed hf-panel--one","layout":{"type":"default"}} -->
<div class="wp-block-group hf-panel hf-panel--feed hf-panel--one"><!-- wp:group {"className":"hf-cell hf-cell--wide","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell hf-cell--wide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-ph hf-ph--32 hf-cell__img"} -->
<figure class="wp-block-image size-full hf-ph hf-ph--32 hf-cell__img"><img src="<?php echo hozue_foodfest_img( 'j1-clipboard.webp' ); ?>" alt="<?php echo hozue_foodfest_a( 'alt_j1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hf-cell__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell__txt"><!-- wp:paragraph {"className":"hf-stamp"} -->
<p class="hf-stamp"><?php echo esc_html( hozue_foodfest_t( 'jr_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hf-cell__t"} -->
<h3 class="wp-block-heading hf-cell__t"><a href="<?php echo esc_url( home_url( '/eight-tastings-one-glass/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'jr_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hf-cell__d"} -->
<p class="hf-cell__d"><?php echo esc_html( hozue_foodfest_t( 'jr_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-cell__more"} -->
<p class="hf-cell__more"><a href="<?php echo esc_url( home_url( '/eight-tastings-one-glass/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'jr_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
