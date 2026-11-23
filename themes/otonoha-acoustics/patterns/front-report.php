<?php
/**
 * Title: Home: report feed on a white sheet
 * Slug: otonoha-acoustics/front-report
 * Categories: otonoha-acoustics
 * Viewport Width: 1440
 * Description: A pale label column at the left and a white sheet that starts a third of the way across and runs off the right edge, holding a sideways feed of the four report parts with round slate arrow discs and hairline dividers.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-report","anchor":"report","layout":{"type":"default"}} -->
<section id="report" class="wp-block-group alignfull oto-report"><!-- wp:group {"className":"oto-report__grid","layout":{"type":"default"}} -->
<div class="wp-block-group oto-report__grid"><!-- wp:group {"className":"oto-report__label sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group oto-report__label sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"oto-title"} -->
<h2 class="wp-block-heading oto-title"><?php echo esc_html( otonoha_acoustics_t( 'rp_label' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"oto-report__sub"} -->
<p class="oto-report__sub"><?php echo esc_html( otonoha_acoustics_t( 'rp_sub' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-report__desc"} -->
<p class="oto-report__desc"><?php echo esc_html( otonoha_acoustics_t( 'rp_desc' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-report__sheet sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group oto-report__sheet sp-reveal sp-reveal--up"><!-- wp:group {"className":"oto-feed","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed"><!-- wp:group {"className":"oto-feed__item","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed__item"><!-- wp:group {"className":"oto-feed__ph","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed__ph"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-feed__img oto-feed__img--portrait"} -->
<figure class="wp-block-image size-large oto-feed__img oto-feed__img--portrait"><img src="<?php echo otonoha_acoustics_img( 'p07-laptop-hall.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"oto-feed__m"} -->
<p class="oto-feed__m"><?php echo esc_html( otonoha_acoustics_t( 'rp_1_m' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"oto-feed__row","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed__row"><!-- wp:paragraph {"className":"oto-feed__t"} -->
<p class="oto-feed__t"><a href="<?php echo esc_url( home_url( '/report/#part-1' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'rp_1_t' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:html -->
<a class="oto-disc" href="<?php echo esc_url( home_url( '/report/#part-1' ) ); ?>" aria-label="<?php echo esc_attr( otonoha_acoustics_t( 'rp_1_t' ) ); ?>"><svg viewBox="0 0 16 16" width="16" height="16" aria-hidden="true" focusable="false"><path d="M1 8h13M9 3l5 5-5 5" fill="none" stroke="#fff" stroke-width="1.6"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-feed__item","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed__item"><!-- wp:group {"className":"oto-feed__ph","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed__ph"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-feed__img oto-feed__img--landscape"} -->
<figure class="wp-block-image size-large oto-feed__img oto-feed__img--landscape"><img src="<?php echo otonoha_acoustics_img( 'p08-vent-grille.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"oto-feed__m"} -->
<p class="oto-feed__m"><?php echo esc_html( otonoha_acoustics_t( 'rp_2_m' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"oto-feed__row","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed__row"><!-- wp:paragraph {"className":"oto-feed__t"} -->
<p class="oto-feed__t"><a href="<?php echo esc_url( home_url( '/report/#part-2' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'rp_2_t' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:html -->
<a class="oto-disc" href="<?php echo esc_url( home_url( '/report/#part-2' ) ); ?>" aria-label="<?php echo esc_attr( otonoha_acoustics_t( 'rp_2_t' ) ); ?>"><svg viewBox="0 0 16 16" width="16" height="16" aria-hidden="true" focusable="false"><path d="M1 8h13M9 3l5 5-5 5" fill="none" stroke="#fff" stroke-width="1.6"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-feed__item","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed__item"><!-- wp:group {"className":"oto-feed__ph","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed__ph"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-feed__img oto-feed__img--portrait"} -->
<figure class="wp-block-image size-large oto-feed__img oto-feed__img--portrait"><img src="<?php echo otonoha_acoustics_img( 'p09-speaker-wall.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"oto-feed__m"} -->
<p class="oto-feed__m"><?php echo esc_html( otonoha_acoustics_t( 'rp_3_m' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"oto-feed__row","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed__row"><!-- wp:paragraph {"className":"oto-feed__t"} -->
<p class="oto-feed__t"><a href="<?php echo esc_url( home_url( '/report/#part-3' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'rp_3_t' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:html -->
<a class="oto-disc" href="<?php echo esc_url( home_url( '/report/#part-3' ) ); ?>" aria-label="<?php echo esc_attr( otonoha_acoustics_t( 'rp_3_t' ) ); ?>"><svg viewBox="0 0 16 16" width="16" height="16" aria-hidden="true" focusable="false"><path d="M1 8h13M9 3l5 5-5 5" fill="none" stroke="#fff" stroke-width="1.6"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-feed__item","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed__item"><!-- wp:group {"className":"oto-feed__ph","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed__ph"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-feed__img oto-feed__img--landscape"} -->
<figure class="wp-block-image size-large oto-feed__img oto-feed__img--landscape"><img src="<?php echo otonoha_acoustics_img( 'p10-samples.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"oto-feed__m"} -->
<p class="oto-feed__m"><?php echo esc_html( otonoha_acoustics_t( 'rp_4_m' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"oto-feed__row","layout":{"type":"default"}} -->
<div class="wp-block-group oto-feed__row"><!-- wp:paragraph {"className":"oto-feed__t"} -->
<p class="oto-feed__t"><a href="<?php echo esc_url( home_url( '/report/#part-4' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'rp_4_t' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:html -->
<a class="oto-disc" href="<?php echo esc_url( home_url( '/report/#part-4' ) ); ?>" aria-label="<?php echo esc_attr( otonoha_acoustics_t( 'rp_4_t' ) ); ?>"><svg viewBox="0 0 16 16" width="16" height="16" aria-hidden="true" focusable="false"><path d="M1 8h13M9 3l5 5-5 5" fill="none" stroke="#fff" stroke-width="1.6"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
