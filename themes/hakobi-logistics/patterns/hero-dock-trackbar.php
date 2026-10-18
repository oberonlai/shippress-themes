<?php
/**
 * Title: Home: full-bleed dock photo and tracking bar
 * Slug: hakobi-logistics/hero-dock-trackbar
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Description: One unframed full-bleed film-grain photograph of a loading dock at dusk with a two-line white headline in the top third, then a solid navy info bar across the full width: tracking input, hub count, next-day coverage and a Get a quote button.
 */
?>
<!-- wp:group {"tagName":"section","className":"hg-dock","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hg-dock"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-dock__photo"} -->
<figure class="wp-block-image size-full hg-dock__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dock.webp' ) ); ?>" alt="<?php echo esc_attr( hakobi_logistics_t( 'alt_dock' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hg-dock__copy","layout":{"type":"default"}} -->
<div class="wp-block-group hg-dock__copy"><!-- wp:heading {"level":1,"className":"hg-dock__title"} -->
<h1 class="wp-block-heading hg-dock__title"><?php echo esc_html( hakobi_logistics_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-trackbar","layout":{"type":"default"}} -->
<div class="wp-block-group hg-trackbar"><!-- wp:html -->
<form class="hg-track" action="/quote/" method="get"><label class="hg-track__label" for="hg-track-no"><?php echo esc_html( hakobi_logistics_t( 'track_label' ) ); ?></label><span class="hg-track__row"><input class="hg-track__input" id="hg-track-no" name="tracking" type="text" autocomplete="off" placeholder="<?php echo esc_attr( hakobi_logistics_t( 'track_ph' ) ); ?>"/><button class="hg-track__go" type="submit" aria-label="<?php echo esc_attr( hakobi_logistics_t( 'track_btn' ) ); ?>">&rarr;</button></span></form>
<!-- /wp:html -->

<!-- wp:group {"className":"hg-trackbar__fig","layout":{"type":"default"}} -->
<div class="wp-block-group hg-trackbar__fig"><!-- wp:paragraph {"className":"hg-trackbar__n"} -->
<p class="hg-trackbar__n"><?php echo esc_html( hakobi_logistics_t( 'hubs_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-trackbar__l"} -->
<p class="hg-trackbar__l"><?php echo esc_html( hakobi_logistics_t( 'hubs_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-trackbar__fig","layout":{"type":"default"}} -->
<div class="wp-block-group hg-trackbar__fig"><!-- wp:paragraph {"className":"hg-trackbar__n"} -->
<p class="hg-trackbar__n"><?php echo esc_html( hakobi_logistics_t( 'cov_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-trackbar__l"} -->
<p class="hg-trackbar__l"><?php echo esc_html( hakobi_logistics_t( 'cov_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"hg-trackbar__btns"} -->
<div class="wp-block-buttons hg-trackbar__btns"><!-- wp:button {"className":"hg-trackbar__btn"} -->
<div class="wp-block-button hg-trackbar__btn"><a class="wp-block-button__link wp-element-button" href="/quote/"><?php echo esc_html( hakobi_logistics_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
