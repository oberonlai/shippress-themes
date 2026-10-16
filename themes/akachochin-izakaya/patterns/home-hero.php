<?php
/**
 * Title: Home: vermilion field with vertical banners and the cut-out lantern
 * Slug: akachochin-izakaya/home-hero
 * Categories: akachochin-izakaya
 * Keywords: izakaya, yakitori, sake
 * Viewport Width: 1440
 * Description: A full vermilion field: a tall sumi banner with the shop name set vertically, a tall documentary photograph of the lantern alley as a second banner, the title beside them, and the cut-out red lantern hanging from the top edge over both banners.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ak-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ak-hero"><!-- wp:group {"className": "ak-hero__banners", "layout": {"type": "default"}} -->
<div class="wp-block-group ak-hero__banners"><!-- wp:group {"className": "ak-nobori", "layout": {"type": "default"}} -->
<div class="wp-block-group ak-nobori"><!-- wp:paragraph {"className": "ak-nobori__ja"} -->
<p class="ak-nobori__ja"><span lang="ja">&#36196;&#25552;&#28783;</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ak-nobori__en"} -->
<p class="ak-nobori__en">Yakitori &#183; sake &#183; small plates</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-hero__photo"} -->
<figure class="wp-block-image size-full ak-hero__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/alley.webp' ) ); ?>" alt="Documentary photograph of a narrow back alley at dusk lined with tiny izakaya doors and glowing red lanterns"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-hero__lantern"} -->
<figure class="wp-block-image size-full ak-hero__lantern"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lantern-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ak-hero__type", "layout": {"type": "default"}} -->
<div class="wp-block-group ak-hero__type"><!-- wp:paragraph {"className": "ak-eyebrow"} -->
<p class="ak-eyebrow">Izakaya &#183; Chochin-yokocho &#183; since 1978</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "ak-hero__title"} -->
<h1 class="wp-block-heading ak-hero__title">When the lantern is lit, the counter is open.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ak-hero__lead"} -->
<p class="ak-hero__lead">Twelve seats at a wooden counter, skewers over binchotan charcoal, small plates from a chalk board and sake warmed to your liking.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ak-hero__cta"} -->
<div class="wp-block-buttons ak-hero__cta"><!-- wp:button {"className": "ak-book"} -->
<div class="wp-block-button ak-book"><a class="wp-block-button__link wp-element-button" href="/contact/">Reserve a seat</a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/menu/">See the menu</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
