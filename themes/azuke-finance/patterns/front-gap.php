<?php
/**
 * Title: Home: the cash gap
 * Slug: azuke-finance/front-gap
 * Categories: azuke-finance
 * Keywords: invoice funding, factoring, landing
 * Viewport Width: 1440
 * Description: ALEX overlay box on a full-bleed photograph, then one calm account of a late payment.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"az-gap","layout":{"type":"default"},"anchor":"gap"} -->
<section id="gap" class="wp-block-group alignfull az-gap"><!-- wp:group {"className":"az-gap__photo","layout":{"type":"default"}} -->
<div class="wp-block-group az-gap__photo"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h06.webp' ) ); ?>","dimRatio":0,"className":"az-gap__cover sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover az-gap__cover sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( azuke_finance_t( 'alt_h06' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h06.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"az-gap__box sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group az-gap__box sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"az-gap__tag"} -->
<p class="az-gap__tag"><?php echo esc_html( azuke_finance_t( 'g_tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-gap__stmt"} -->
<p class="az-gap__stmt"><?php echo esc_html( azuke_finance_t( 'g_stmt' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-gap__text","layout":{"type":"default"}} -->
<div class="wp-block-group az-gap__text"><!-- wp:paragraph {"className":"az-label"} -->
<p class="az-label"><?php echo esc_html( azuke_finance_t( 'g_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"az-gap__col","layout":{"type":"default"}} -->
<div class="wp-block-group az-gap__col"><!-- wp:paragraph {"className":"az-body"} -->
<p class="az-body"><?php echo esc_html( azuke_finance_t( 'g_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-body"} -->
<p class="az-body"><?php echo esc_html( azuke_finance_t( 'g_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
