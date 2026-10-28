<?php
/**
 * Title: Home: Friday
 * Slug: kura-wine/front-friday
 * Categories: kura-wine
 * Keywords: wine, shop, merchant
 * Viewport Width: 1440
 * Description: Centered text block about the Friday case opening and a wide 21:9 photograph of the table.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"friday","className":"kw-sec kw-friday","layout":{"type":"default"}} -->
<section id="friday" class="wp-block-group alignfull kw-sec kw-friday"><!-- wp:group {"className":"kw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kw-wrap"><!-- wp:group {"className":"kw-friday__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kw-friday__text sp-stagger"><!-- wp:paragraph {"className":"kw-label sp-reveal sp-reveal--up"} -->
<p class="kw-label sp-reveal sp-reveal--up"><?php echo esc_html( kura_wine_t( 'fr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-catch sp-reveal sp-reveal--up"} -->
<p class="kw-catch sp-reveal sp-reveal--up"><?php echo esc_html( kura_wine_t( 'fr_catch' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( kura_wine_t( 'fr_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( kura_wine_t( 'fr_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo kura_wine_more( 'fr_more', '/tastings/', 'sp-reveal sp-reveal--up' ); ?></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kw-ph kw-ph--k12 kw-friday__wide sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full kw-ph kw-ph--k12 kw-friday__wide sp-reveal sp-reveal--mask"><img src="<?php echo esc_url( kura_wine_img( 'K12' ) ); ?>" alt="<?php echo esc_attr( kura_wine_t( 'alt_K12' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
