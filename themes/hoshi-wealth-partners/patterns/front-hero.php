<?php
/**
 * Title: Home: mixed-type headline over two framed photographs
 * Slug: hoshi-wealth-partners/front-hero
 * Categories: hoshi-wealth-partners
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"hp-hero","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hp-hero">
<!-- wp:heading {"level":1,"className":"hp-h1"} -->
<h1 class="wp-block-heading hp-h1"><span class="hp-line hp-line--1"><span class="hp-w hp-w--serif"><?php echo esc_html( hoshi_wealth_partners_t( 'h1_w1' ) ); ?></span> <span class="hp-w hp-w--sans"><?php echo esc_html( hoshi_wealth_partners_t( 'h1_w2' ) ); ?></span></span> <span class="hp-line hp-line--2"><span class="hp-w hp-w--sans hp-w--noisy"><?php echo esc_html( hoshi_wealth_partners_t( 'h1_w3' ) ); ?></span> <span class="hp-w hp-w--sans"><?php echo esc_html( hoshi_wealth_partners_t( 'h1_w4' ) ); ?></span></span> <span class="hp-line hp-line--3"><span class="hp-w hp-w--sans"><?php echo esc_html( hoshi_wealth_partners_t( 'h1_w5' ) ); ?></span> <span class="hp-w hp-w--serif"><?php echo esc_html( hoshi_wealth_partners_t( 'h1_w6' ) ); ?></span></span></h1>
<!-- /wp:heading -->
<!-- wp:group {"className":"hp-hero__row","layout":{"type":"default"}} -->
<div class="wp-block-group hp-hero__row"><!-- wp:group {"className":"hp-hero__a","layout":{"type":"default"}} -->
<div class="wp-block-group hp-hero__a"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-ph hp-ph--2x1"} -->
<figure class="wp-block-image size-full hp-ph hp-ph--2x1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01.webp' ) ); ?>" alt="<?php echo esc_attr( hoshi_wealth_partners_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"hp-cap"} -->
<p class="hp-cap"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'cap_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-hero__b","layout":{"type":"default"}} -->
<div class="wp-block-group hp-hero__b"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-ph hp-ph--1x1"} -->
<figure class="wp-block-image size-full hp-ph hp-ph--1x1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02.webp' ) ); ?>" alt="<?php echo esc_attr( hoshi_wealth_partners_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"hp-cap hp-cap--r"} -->
<p class="hp-cap hp-cap--r"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'cap_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
