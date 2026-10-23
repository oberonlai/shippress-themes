<?php
/**
 * Title: Home: parallax strip and investment approach
 * Slug: hoshi-wealth-partners/front-approach
 * Categories: hoshi-wealth-partners
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"hp-strip sp-parallax","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hp-strip sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-strip__img"} -->
<figure class="wp-block-image size-full hp-strip__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08.webp' ) ); ?>" alt="<?php echo esc_attr( hoshi_wealth_partners_t( 'alt_p08' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"hp-chip","layout":{"type":"default"}} -->
<div class="wp-block-group hp-chip"><!-- wp:paragraph {"className":"hp-chip__t"} -->
<p class="hp-chip__t"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'chip_count' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-approach","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hp-approach"><!-- wp:group {"className":"hp-in hp-approach__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hp-in hp-approach__grid"><!-- wp:group {"className":"hp-approach__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hp-approach__l sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"hp-h2 hp-h2--dark"} -->
<h2 class="wp-block-heading hp-h2 hp-h2--dark"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'ap_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"hp-body hp-body--dark"} -->
<p class="hp-body hp-body--dark"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'ap_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-approach__r","layout":{"type":"default"}} -->
<div class="wp-block-group hp-approach__r"><!-- wp:buttons {"className":"hp-btns"} -->
<div class="wp-block-buttons hp-btns"><!-- wp:button {"className":"hp-btn hp-btn--band"} -->
<div class="wp-block-button hp-btn hp-btn--band"><a class="wp-block-button__link wp-element-button" href="/approach/"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'btn_approach' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
