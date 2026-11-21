<?php
/**
 * Title: Home: programme panel
 * Slug: hozue-foodfest/front-programme
 * Categories: hozue-foodfest
 * Viewport Width: 1440
 * Description: A large olive-grey rounded panel holding two columns of nested cells, Saturday and Sunday, each with a 3:2 thumbnail, a time stamp, a title and one line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"programme","className":"hf-sec hf-sec--ground2","layout":{"type":"default"}} -->
<section id="programme" class="wp-block-group alignfull hf-sec hf-sec--ground2"><!-- wp:group {"className":"hf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hf-wrap"><!-- wp:html -->
<div class="hf-chips" aria-hidden="true"><svg width="120" height="54" viewBox="0 0 120 54" xmlns="http://www.w3.org/2000/svg" focusable="false"><circle cx="20" cy="20" r="20" fill="#938B4B"/><circle cx="52" cy="20" r="20" fill="#5B2A38"/><circle cx="84" cy="20" r="20" fill="#DDDDCB"/><defs><linearGradient id="hfbar" x1="0" y1="0" x2="1" y2="0"><stop offset="0" stop-color="#938B4B"/><stop offset="1" stop-color="#5B2A38"/></linearGradient></defs><rect x="0" y="46" width="120" height="8" rx="4" fill="url(#hfbar)"/></svg></div>
<div class="hf-chips hf-chips--r" aria-hidden="true"><svg width="136" height="54" viewBox="0 0 136 54" xmlns="http://www.w3.org/2000/svg" focusable="false"><path d="M0 0A20 20 0 0 0 40 0Z" fill="#938B4B"/><path d="M32 0A20 20 0 0 0 72 0Z" fill="#5B2A38"/><path d="M64 0A20 20 0 0 0 104 0Z" fill="#DDDDCB"/><path d="M96 0A20 20 0 0 0 136 0Z" fill="#938B4B"/><defs><linearGradient id="hfbarr" x1="0" y1="0" x2="1" y2="0"><stop offset="0" stop-color="#5B2A38"/><stop offset="1" stop-color="#938B4B"/></linearGradient></defs><rect x="72" y="46" width="64" height="8" rx="4" fill="url(#hfbarr)"/></svg></div>
<!-- /wp:html -->

<!-- wp:group {"className":"hf-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group hf-sechead"><!-- wp:paragraph {"className":"hf-caps hf-caps--wine"} -->
<p class="hf-caps hf-caps--wine"><?php echo esc_html( hozue_foodfest_t( 'pr_caps' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hf-h2"} -->
<h2 class="wp-block-heading hf-h2"><?php echo esc_html( hozue_foodfest_t( 'pr_h2' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-panel hf-panel--feed","layout":{"type":"default"}} -->
<div class="wp-block-group hf-panel hf-panel--feed"><!-- wp:group {"className":"hf-cols","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cols"><!-- wp:group {"className":"hf-col sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hf-col sp-stagger"><!-- wp:paragraph {"className":"hf-col__h"} -->
<p class="hf-col__h"><?php echo esc_html( hozue_foodfest_t( 'pr_sat' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hf-cell sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-ph hf-ph--32 hf-cell__img"} -->
<figure class="wp-block-image size-full hf-ph hf-ph--32 hf-cell__img"><img src="<?php echo hozue_foodfest_img( 'p1-market.webp' ); ?>" alt="<?php echo hozue_foodfest_a( 'alt_p1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hf-cell__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell__txt"><!-- wp:paragraph {"className":"hf-stamp"} -->
<p class="hf-stamp"><?php echo esc_html( hozue_foodfest_t( 'pr1_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hf-cell__t"} -->
<h3 class="wp-block-heading hf-cell__t"><?php echo esc_html( hozue_foodfest_t( 'pr1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hf-cell__d"} -->
<p class="hf-cell__d"><?php echo esc_html( hozue_foodfest_t( 'pr1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-cell sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-ph hf-ph--32 hf-cell__img"} -->
<figure class="wp-block-image size-full hf-ph hf-ph--32 hf-cell__img"><img src="<?php echo hozue_foodfest_img( 'p2-long-table.webp' ); ?>" alt="<?php echo hozue_foodfest_a( 'alt_p2' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hf-cell__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell__txt"><!-- wp:paragraph {"className":"hf-stamp"} -->
<p class="hf-stamp"><?php echo esc_html( hozue_foodfest_t( 'pr2_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hf-cell__t"} -->
<h3 class="wp-block-heading hf-cell__t"><?php echo esc_html( hozue_foodfest_t( 'pr2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hf-cell__d"} -->
<p class="hf-cell__d"><?php echo esc_html( hozue_foodfest_t( 'pr2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-cell sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-ph hf-ph--32 hf-cell__img"} -->
<figure class="wp-block-image size-full hf-ph hf-ph--32 hf-cell__img"><img src="<?php echo hozue_foodfest_img( 'p3-wine-tent.webp' ); ?>" alt="<?php echo hozue_foodfest_a( 'alt_p3' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hf-cell__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell__txt"><!-- wp:paragraph {"className":"hf-stamp"} -->
<p class="hf-stamp"><?php echo esc_html( hozue_foodfest_t( 'pr3_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hf-cell__t"} -->
<h3 class="wp-block-heading hf-cell__t"><?php echo esc_html( hozue_foodfest_t( 'pr3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hf-cell__d"} -->
<p class="hf-cell__d"><?php echo esc_html( hozue_foodfest_t( 'pr3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-col sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hf-col sp-stagger"><!-- wp:paragraph {"className":"hf-col__h"} -->
<p class="hf-col__h"><?php echo esc_html( hozue_foodfest_t( 'pr_sun' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hf-cell sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-ph hf-ph--32 hf-cell__img"} -->
<figure class="wp-block-image size-full hf-ph hf-ph--32 hf-cell__img"><img src="<?php echo hozue_foodfest_img( 'p4-sourdough.webp' ); ?>" alt="<?php echo hozue_foodfest_a( 'alt_p4' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hf-cell__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell__txt"><!-- wp:paragraph {"className":"hf-stamp"} -->
<p class="hf-stamp"><?php echo esc_html( hozue_foodfest_t( 'pr4_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hf-cell__t"} -->
<h3 class="wp-block-heading hf-cell__t"><?php echo esc_html( hozue_foodfest_t( 'pr4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hf-cell__d"} -->
<p class="hf-cell__d"><?php echo esc_html( hozue_foodfest_t( 'pr4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-cell sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-ph hf-ph--32 hf-cell__img"} -->
<figure class="wp-block-image size-full hf-ph hf-ph--32 hf-cell__img"><img src="<?php echo hozue_foodfest_img( 'p5-picnic.webp' ); ?>" alt="<?php echo hozue_foodfest_a( 'alt_p5' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hf-cell__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell__txt"><!-- wp:paragraph {"className":"hf-stamp"} -->
<p class="hf-stamp"><?php echo esc_html( hozue_foodfest_t( 'pr5_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hf-cell__t"} -->
<h3 class="wp-block-heading hf-cell__t"><?php echo esc_html( hozue_foodfest_t( 'pr5_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hf-cell__d"} -->
<p class="hf-cell__d"><?php echo esc_html( hozue_foodfest_t( 'pr5_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-cell sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-ph hf-ph--32 hf-cell__img"} -->
<figure class="wp-block-image size-full hf-ph hf-ph--32 hf-cell__img"><img src="<?php echo hozue_foodfest_img( 'p6-terrace.webp' ); ?>" alt="<?php echo hozue_foodfest_a( 'alt_p6' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hf-cell__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hf-cell__txt"><!-- wp:paragraph {"className":"hf-stamp"} -->
<p class="hf-stamp"><?php echo esc_html( hozue_foodfest_t( 'pr6_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hf-cell__t"} -->
<h3 class="wp-block-heading hf-cell__t"><?php echo esc_html( hozue_foodfest_t( 'pr6_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hf-cell__d"} -->
<p class="hf-cell__d"><?php echo esc_html( hozue_foodfest_t( 'pr6_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
