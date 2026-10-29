<?php
/**
 * Title: Head: journal
 * Slug: tsuya-jewellers/head-journal
 * Categories: tsuya-jewellers
 * Keywords: jeweller, jewellery, store
 * Viewport Width: 1440
 * Description: Inner page head with the bench photograph, the page title at the left and the intro at the right.
 */
?>
<!-- wp:group {"className":"ts-head","layout":{"type":"default"}} -->
<div class="wp-block-group ts-head"><!-- wp:group {"className":"ts-head__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ts-head__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-ring-tray.webp' ) ); ?>" alt="A single plain gold band rests on a linen tray on a dark bench."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ts-head__strip","layout":{"type":"default"}} -->
<div class="wp-block-group ts-head__strip"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Journal</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Notes, technical records, and stories from our workshop on Wexley Street. We document the pieces we draw, carve, and finish at the bench.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
