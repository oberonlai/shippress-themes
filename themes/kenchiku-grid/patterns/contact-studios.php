<?php
/**
 * Title: Contact — two studios with maps
 * Slug: kenchiku-grid/contact-studios
 * Categories: kenchiku-grid, contact
 * Keywords: contact, address, map, studio, office, hours
 * Viewport Width: 1400
 * Description: Contact page opening with a display title and two studio modules side by side — abstract map, address, hours, telephone and access.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-page-head","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-page-head" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid"><!-- wp:paragraph {"className":"is-style-mono-label kg-hero__kicker","style":{"layout":{"columnSpan":2}}} -->
<p class="is-style-mono-label kg-hero__kicker">(05) Contact<br>Mon — Fri<br>10:00 — 18:00 JST</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"is-style-display-tight","style":{"layout":{"columnSpan":10}}} -->
<h1 class="wp-block-heading is-style-display-tight">Two studios, one conversation.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead","style":{"layout":{"columnSpan":5,"columnStart":3}}} -->
<p class="is-style-lead">Write first, then visit. Every new project begins with an afternoon on site — wherever the site is — before we draw a line.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:group {"className":"kg-studio","style":{"layout":{"columnSpan":6}},"layout":{"type":"default"}} -->
<div class="wp-block-group kg-studio"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-grid-frame"} -->
<figure class="wp-block-image size-full is-style-grid-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/map-tokyo.svg' ) ); ?>" alt="Abstract map of Kiyosumi, Tokyo, with the studio marked" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kg-card__meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group kg-card__meta"><!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">T — Tokyo studio</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">35.6812° N 139.7980° E</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"kg-card__title"} -->
<h3 class="wp-block-heading kg-card__title">Kiyosumi, Koto-ku</h3>
<!-- /wp:heading -->

<!-- wp:table {"className":"is-style-spec-sheet kg-studio__info"} -->
<figure class="wp-block-table is-style-spec-sheet kg-studio__info"><table><tbody><tr><td>Address</td><td>4F, 2-11-6 Kiyosumi, Koto-ku, Tokyo 135-0024</td></tr><tr><td>Telephone</td><td>+81 3 0000 6100</td></tr><tr><td>Access</td><td>Kiyosumi-shirakawa Stn., exit A3, four minutes on foot</td></tr><tr><td>Lead</td><td>Ren Tohyama</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kg-studio","style":{"layout":{"columnSpan":6}},"layout":{"type":"default"}} -->
<div class="wp-block-group kg-studio"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-grid-frame"} -->
<figure class="wp-block-image size-full is-style-grid-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/map-kyoto.svg' ) ); ?>" alt="Abstract map of Shimogamo, Kyoto, with the studio marked" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kg-card__meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group kg-card__meta"><!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">K — Kyoto studio</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-mono-label"} -->
<p class="is-style-mono-label">35.0453° N 135.7720° E</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"kg-card__title"} -->
<h3 class="wp-block-heading kg-card__title">Shimogamo, Sakyo-ku</h3>
<!-- /wp:heading -->

<!-- wp:table {"className":"is-style-spec-sheet kg-studio__info"} -->
<figure class="wp-block-table is-style-spec-sheet kg-studio__info"><table><tbody><tr><td>Address</td><td>18 Shimogamo Miyazaki-cho, Sakyo-ku, Kyoto 606-0802</td></tr><tr><td>Telephone</td><td>+81 75 000 6100</td></tr><tr><td>Access</td><td>Demachiyanagi Stn., twelve minutes north along the Kamo</td></tr><tr><td>Lead</td><td>Aiko Morishita</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
