<?php
/**
 * Title: Home: text left, art right
 * Slug: kokeshi-kobo/home-opening
 * Categories: kokeshi-kobo
 * Keywords: kokeshi, wooden dolls, craft shop
 * Viewport Width: 1440
 * Description: Matcha hero: headline, lead and buttons on the left; on the right an isometric workshop illustration framed on a kokeshi pattern panel, with a cut-out kokeshi that breaks out of the frame and the hero.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kk-hero", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kk-hero"><!-- wp:group {"align": "wide", "className": "kk-hero__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kk-hero__grid"><!-- wp:group {"className": "kk-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-hero__text"><!-- wp:paragraph {"className": "is-style-label kk-hero__kicker"} -->
<p class="is-style-label kk-hero__kicker">Kokeshi turners since 1952 &#183; Hotaru-cho</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kk-hero__title"} -->
<h1 class="wp-block-heading kk-hero__title">Turned on a lathe.<br><em>Painted in one breath.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "is-style-lead kk-hero__lead"} -->
<p class="is-style-lead kk-hero__lead">Kokeshi Kobo turns kokeshi dolls from mizuki and cherry on a foot lathe and paints each face with a single brush. Round heads, straight bodies, red chrysanthemums: the same shapes our grandparents sold to hot-spring guests.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kk-hero__cta"} -->
<div class="wp-block-buttons kk-hero__cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/">Shop the kokeshi</a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/the-workshop/">How a doll is made</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kk-hero__art", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-hero__art"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kk-hero__frame"} -->
<figure class="wp-block-image size-full kk-hero__frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/workshop.webp' ) ); ?>" alt="An isometric kokeshi workshop with a lathe, shelves of blanks and paint pots"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "kk-hero__tate"} -->
<p class="kk-hero__tate"><span lang="ja">&#12371;&#12369;&#12375;&#24037;&#25151;</span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kk-hero__doll"} -->
<figure class="wp-block-image size-full kk-hero__doll"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kokeshi-cutout.webp' ) ); ?>" alt="A tall kokeshi doll painted with red chrysanthemums"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
