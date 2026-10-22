<?php
/**
 * Title: Home: prologue tile and photograph
 * Slug: hoshi-wealth-partners/front-prologue
 * Categories: hoshi-wealth-partners
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"hp-prologue","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hp-prologue"><!-- wp:group {"className":"hp-in hp-prologue__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hp-in hp-prologue__grid"><!-- wp:group {"className":"hp-prologue__l","layout":{"type":"default"}} -->
<div class="wp-block-group hp-prologue__l"><!-- wp:group {"className":"hp-prologue__top","layout":{"type":"default"}} -->
<div class="wp-block-group hp-prologue__top"><!-- wp:group {"className":"hp-tile","layout":{"type":"default"}} -->
<div class="wp-block-group hp-tile"><!-- wp:paragraph {"className":"hp-tile__t"} -->
<p class="hp-tile__t"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'tile_est' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-ph hp-ph--2x1"} -->
<figure class="wp-block-image size-full hp-ph hp-ph--2x1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03.webp' ) ); ?>" alt="<?php echo esc_attr( hoshi_wealth_partners_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"hp-label hp-label--sm"} -->
<p class="hp-label hp-label--sm"><?php echo esc_html( hoshi_wealth_partners_t( 'prologue_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"hp-prologue__cols","layout":{"type":"default"}} -->
<div class="wp-block-group hp-prologue__cols"><!-- wp:paragraph {"className":"hp-small"} -->
<p class="hp-small"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'pr_p1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-small"} -->
<p class="hp-small"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'pr_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-prologue__r sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hp-prologue__r sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"hp-h2"} -->
<h2 class="wp-block-heading hp-h2"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'pr_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"hp-body"} -->
<p class="hp-body"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'pr_p3' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-body"} -->
<p class="hp-body"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'pr_p4' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-go"} -->
<p class="hp-go"><a href="/about/"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'pr_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
