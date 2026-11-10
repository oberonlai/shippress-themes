<?php
/**
 * Title: Home: slanted triptych cover
 * Slug: genba-diary/front-hero
 * Categories: genba-diary
 * Keywords: construction, site diary, landing
 * Viewport Width: 1440
 * Description: Left column with the promise, proof figures and the request button; at the right one photograph in three slanted slices (middle one lower), a round badge, a square and a banner strip.
 */
?>
<!-- wp:group {"className":"gd-hero","layout":{"type":"default"},"tagName":"section","anchor":"top","align":"full"} -->
<section id="top" class="wp-block-group alignfull gd-hero"><!-- wp:group {"className":"gd-hero__in","layout":{"type":"default"}} -->
<div class="wp-block-group gd-hero__in"><!-- wp:group {"className":"gd-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group gd-hero__text"><!-- wp:heading {"level":1,"className":"gd-hero__h1"} -->
<h1 class="wp-block-heading gd-hero__h1"><?php echo genba_diary_lines( 'h1' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-hero__sub"} -->
<p class="gd-hero__sub"><?php echo genba_diary_lines( 'sub' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gd-proof","layout":{"type":"default"}} -->
<div class="wp-block-group gd-proof"><!-- wp:group {"className":"gd-proof__a","layout":{"type":"default"}} -->
<div class="wp-block-group gd-proof__a"><!-- wp:paragraph {"className":"gd-ruled"} -->
<p class="gd-ruled"><?php echo genba_diary_lines( 'ruled' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-big"} -->
<p class="gd-big"><?php echo esc_html( genba_diary_t( 'big' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-proof__b","layout":{"type":"default"}} -->
<div class="wp-block-group gd-proof__b"><!-- wp:paragraph {"className":"gd-fig"} -->
<p class="gd-fig"><span><?php echo esc_html( genba_diary_t( 'fig1' ) ); ?></span><b>6</b></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-fig"} -->
<p class="gd-fig"><span><?php echo esc_html( genba_diary_t( 'fig2' ) ); ?></span><b>17:00</b></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"gd-cta-wrap"} -->
<div class="wp-block-buttons gd-cta-wrap"><!-- wp:button {"className":"gd-cta gd-cta--note"} -->
<div class="wp-block-button gd-cta gd-cta--note"><a class="wp-block-button__link wp-element-button" href="/request/"><?php echo esc_html( genba_diary_t( 'cta' ) ); ?><br><small><?php echo esc_html( genba_diary_t( 'cta_note' ) ); ?></small></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"gd-hero__note"} -->
<p class="gd-hero__note"><?php echo esc_html( genba_diary_t( 'hero_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="gd-kv"><div class="gd-slices"><figure class="gd-slice gd-slice--1"><img src="<?php echo genba_diary_img( 'kv-1.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g01' ) ); ?>" width="226" height="492" fetchpriority="high"/></figure><figure class="gd-slice gd-slice--2"><img src="<?php echo genba_diary_img( 'kv-2.webp' ); ?>" alt="" width="226" height="492" /></figure><figure class="gd-slice gd-slice--3"><img src="<?php echo genba_diary_img( 'kv-3.webp' ); ?>" alt="" width="226" height="492" /></figure><span class="gd-square" aria-hidden="true"></span></div><div class="gd-tags"><p class="gd-badge"><?php echo genba_diary_lines( 'badge' ); ?></p><p class="gd-strip"><b>06:40</b> <?php echo esc_html( genba_diary_t( 'strip' ) ); ?></p></div></div>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
