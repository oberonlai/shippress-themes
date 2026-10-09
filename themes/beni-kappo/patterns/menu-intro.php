<?php
/**
 * Title: Menu — page opening
 * Slug: beni-kappo/menu-intro
 * Categories: beni-kappo, banner
 * Keywords: menu, intro, courses, sake, header
 * Viewport Width: 1440
 * Description: The menu page head: a large title, how the menu works, and anchor links to the courses, tonight's order, the sake list and dietary notes, over a layered picture of the sashimi course.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bk-page-head is-style-lantern","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull bk-page-head is-style-lantern" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","className":"bk-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide bk-grid"><!-- wp:paragraph {"className":"is-style-kicker","style":{"layout":{"columnSpan":12}}} -->
<p class="is-style-kicker">The menu — autumn 2026</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"bk-page-head__title","style":{"layout":{"columnSpan":8,"columnStart":1}}} -->
<h1 class="wp-block-heading bk-page-head__title">Written each morning, <em>after the market</em></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"bk-page-head__note","style":{"layout":{"columnSpan":4,"columnStart":9},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bk-page-head__note"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Choose the length of your evening when you book. The dishes follow the season and the boats, so the order below is this week's.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bk-anchors"} -->
<p class="bk-anchors"><a href="#courses">Courses</a><a href="#tonight">This week's order</a><a href="#sake">Sake list</a><a href="#notes">Dietary notes</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"21/9","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"wide","className":"is-style-vignette bk-page-head__image","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<figure class="wp-block-image alignwide size-full is-style-vignette bk-page-head__image" style="margin-top:var(--wp--preset--spacing--50)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sashimi-plate.svg' ) ); ?>" alt="Three cuts of sashimi on a dark ceramic plate with a shiso leaf and a mound of fresh wasabi" style="aspect-ratio:21/9;object-fit:cover"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
