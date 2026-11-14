<?php
/**
 * Title: Home: cases
 * Slug: koori-coldstore/front-cases
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Description: A giant lowercase word, a short introduction and three photo cards with a bottom gradient, each linking to a case story.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"cases","className":"kc-sec kc-cases","layout":{"type":"default"}} -->
<section id="cases" class="wp-block-group alignfull kc-sec kc-cases"><!-- wp:group {"className":"kc-cases__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cases__head"><!-- wp:group {"className":"kc-title","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title"><!-- wp:heading {"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'cases_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'cases_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-intro"} -->
<p class="kc-intro"><?php echo esc_html( koori_coldstore_t( 'cases_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cases__row sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cases__row sp-stagger"><!-- wp:group {"className":"kc-case sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-case sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-case__photo"} -->
<figure class="wp-block-image size-full kc-case__photo"><img src="<?php echo koori_coldstore_img( 'case-cheese.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_s01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-case__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-case__text"><!-- wp:paragraph {"className":"kc-case__label"} -->
<p class="kc-case__label"><?php echo esc_html( koori_coldstore_t( 'case1_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kc-case__title"} -->
<h3 class="wp-block-heading kc-case__title"><a href="<?php echo koori_coldstore_url( '/cases/#case-1' ); ?>"><?php echo esc_html( koori_coldstore_t( 'case1_t' ) ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:html -->
<span class="kc-case__arrow" aria-hidden="true"><svg viewBox="0 0 20 20" width="20" height="20" focusable="false"><path d="M4 10h11M10.5 5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-case sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-case sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-case__photo"} -->
<figure class="wp-block-image size-full kc-case__photo"><img src="<?php echo koori_coldstore_img( 'case-fish.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_s02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-case__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-case__text"><!-- wp:paragraph {"className":"kc-case__label"} -->
<p class="kc-case__label"><?php echo esc_html( koori_coldstore_t( 'case2_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kc-case__title"} -->
<h3 class="wp-block-heading kc-case__title"><a href="<?php echo koori_coldstore_url( '/cases/#case-2' ); ?>"><?php echo esc_html( koori_coldstore_t( 'case2_t' ) ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:html -->
<span class="kc-case__arrow" aria-hidden="true"><svg viewBox="0 0 20 20" width="20" height="20" focusable="false"><path d="M4 10h11M10.5 5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-case sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-case sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-case__photo"} -->
<figure class="wp-block-image size-full kc-case__photo"><img src="<?php echo koori_coldstore_img( 'case-dough.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_s03' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-case__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-case__text"><!-- wp:paragraph {"className":"kc-case__label"} -->
<p class="kc-case__label"><?php echo esc_html( koori_coldstore_t( 'case3_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kc-case__title"} -->
<h3 class="wp-block-heading kc-case__title"><a href="<?php echo koori_coldstore_url( '/cases/#case-3' ); ?>"><?php echo esc_html( koori_coldstore_t( 'case3_t' ) ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:html -->
<span class="kc-case__arrow" aria-hidden="true"><svg viewBox="0 0 20 20" width="20" height="20" focusable="false"><path d="M4 10h11M10.5 5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-cases__note"} -->
<p class="kc-cases__note"><?php echo esc_html( koori_coldstore_t( 'cases_note' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
