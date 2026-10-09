<?php
/**
 * Title: About — page opening
 * Slug: ikebana-kyoshitsu/about-intro
 * Categories: ikebana-kyoshitsu, header, about
 * Keywords: about, school, story, intro, page header
 * Viewport Width: 1440
 * Description: The about page head: vertical label, an off-axis title, a lead and an arched camellia illustration that overlaps the title's column.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ik-page-head is-style-petal-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ik-page-head is-style-petal-light" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"ik-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide ik-grid"><!-- wp:paragraph {"className":"is-style-vertical-label","style":{"layout":{"columnSpan":1}}} -->
<p class="is-style-vertical-label">About the school</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"layout":{"columnSpan":7,"columnStart":2},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"is-style-off-axis"} -->
<h1 class="wp-block-heading is-style-off-axis">A small school<br><em>by the canal.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Hanaomoi began in 1989 at a kitchen table, with three neighbours and a bucket of narcissus. It is still small on purpose: six tables, four teachers, and flowers bought the same morning.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-leaf-arch ik-page-head__image","style":{"layout":{"columnSpan":4,"columnStart":9}}} -->
<figure class="wp-block-image size-full is-style-leaf-arch ik-page-head__image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/camellia-bamboo.svg' ) ); ?>" alt="A single camellia and one leafy stem in a bamboo vase" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
