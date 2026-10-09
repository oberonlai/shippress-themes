<?php
/**
 * Title: About — page opening
 * Slug: beni-kappo/about-intro
 * Categories: beni-kappo, banner, about
 * Keywords: about, intro, story, restaurant, header
 * Viewport Width: 1440
 * Description: The about page head: a stacked title with the chef's short introduction, over a full-width, lantern-lit picture of the alley outside.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bk-page-head is-style-lantern","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull bk-page-head is-style-lantern" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","className":"bk-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide bk-grid"><!-- wp:paragraph {"className":"is-style-kicker","style":{"layout":{"columnSpan":12}}} -->
<p class="is-style-kicker">About Beniya</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"bk-page-head__title","style":{"layout":{"columnSpan":8,"columnStart":1}}} -->
<h1 class="wp-block-heading bk-page-head__title">Two lanterns, <em>a plank of hinoki</em> and a fire</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead bk-page-head__note","style":{"layout":{"columnSpan":4,"columnStart":9}}} -->
<p class="is-style-lead bk-page-head__note">Beniya opened in 2014 in a former sweet shop at the top of a stone alley. Beni is the red of the lanterns over our door, and of the safflower dye our grandmothers called by the same name.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"21/9","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"wide","className":"is-style-vignette bk-page-head__image","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<figure class="wp-block-image alignwide size-full is-style-vignette bk-page-head__image" style="margin-top:var(--wp--preset--spacing--50)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lantern-alley.svg' ) ); ?>" alt="A narrow stone alley at night lined with wooden houses, red paper lanterns glowing over the doorways" style="aspect-ratio:21/9;object-fit:cover"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
