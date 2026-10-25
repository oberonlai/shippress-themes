<?php
/**
 * Title: Front page: stadium window over the giant wordmark
 * Slug: kiban-structural/front-hero
 * Categories: kiban-structural
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"kb-hero","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull kb-hero"><!-- wp:html -->
<div class="kb-hero__word sp-marquee" aria-hidden="true"><div class="kb-hero__track"><span>KIBAN ·</span><span>KIBAN ·</span><span>KIBAN ·</span></div><div class="kb-hero__track" aria-hidden="true"><span>KIBAN ·</span><span>KIBAN ·</span><span>KIBAN ·</span></div></div>
<!-- /wp:html --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kb-hero__win"} -->
<figure class="wp-block-image size-full kb-hero__win"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kb-hero-drawing.webp' ) ); ?>" alt="<?php echo esc_attr( kiban_structural_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:heading {"level":1,"className":"kb-hero__tag"} -->
<h1 class="wp-block-heading kb-hero__tag"><?php foreach ( explode( ' ', kiban_structural_t( 'hero_tag' ) ) as $kb_w ) { echo '<span>' . esc_html( $kb_w ) . '</span>'; } ?></h1>
<!-- /wp:heading --><!-- wp:group {"className":"kb-hero__info","layout":{"type":"default"}} -->
<div class="wp-block-group kb-hero__info"><!-- wp:paragraph {"className":"kb-hero__facts"} -->
<p class="kb-hero__facts"><span><?php echo esc_html( kiban_structural_t( 'hero_f1' ) ); ?></span><span><?php echo esc_html( kiban_structural_t( 'hero_f2' ) ); ?></span><span><?php echo esc_html( kiban_structural_t( 'hero_f3' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"kb-hero__scroll"} -->
<p class="kb-hero__scroll"><a href="#process"><?php echo esc_html( kiban_structural_t( 'hero_scroll' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
