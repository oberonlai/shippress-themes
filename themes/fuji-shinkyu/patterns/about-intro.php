<?php
/**
 * Title: About — a small room for slow care
 * Slug: fuji-shinkyu/about-intro
 * Categories: fuji-shinkyu, featured
 * Keywords: about, clinic, introduction, story
 * Viewport Width: 1440
 * Description: The about page opening: an airy title, a lead, and the treatment room in a wide soft frame below.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"fs-page-head is-style-halo","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull fs-page-head is-style-halo" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","className":"fs-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide fs-grid"><!-- wp:paragraph {"className":"is-style-point-label","style":{"layout":{"columnSpan":12}}} -->
<p class="is-style-point-label">About the clinic</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"fs-page-head__title","style":{"layout":{"columnSpan":8,"columnStart":1}}} -->
<h1 class="wp-block-heading fs-page-head__title">A small room <em>for slow care</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead fs-page-head__note","style":{"layout":{"columnSpan":4,"columnStart":9}}} -->
<p class="is-style-lead fs-page-head__note">Fujinami has been a two-room clinic on the second floor above the wisteria since 2011. Three practitioners, one kettle, no rush.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"21/9","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"wide","className":"is-style-soft-frame fs-page-head__wide"} -->
<figure class="wp-block-image alignwide size-full is-style-soft-frame fs-page-head__wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/treatment-room.svg' ) ); ?>" alt="A treatment room with a low bed, a folded blanket, a round paper lamp and a window with a lattice of fine lines" style="aspect-ratio:21/9;object-fit:cover"/><figcaption class="wp-element-caption">Room one, mid-morning. The window opens onto the trellis.</figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
