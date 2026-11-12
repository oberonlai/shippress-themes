<?php
/**
 * Title: Header slab
 * Slug: homura-safety/head-bar
 * Categories: homura-safety
 * Inserter: no
 * Description: White header slab with the anchor menu and two hanging cells: a chestnut Book cell and a black language cell.
 */
?>
<!-- wp:group {"align":"full","className":"hs-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hs-head"><!-- wp:group {"align":"wide","className":"hs-head__bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-head__bar"><!-- wp:group {"className":"hs-head__slab","layout":{"type":"default"}} -->
<div class="wp-block-group hs-head__slab"><!-- wp:site-title {"level":0,"className":"hs-brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","className":"hs-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-head__cells","layout":{"type":"default"}} -->
<div class="wp-block-group hs-head__cells"><!-- wp:paragraph {"className":"hs-cell hs-cell--book"} -->
<p class="hs-cell hs-cell--book"><a href="/#book"><?php echo esc_html( homura_safety_t( 'hd_book' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-cell hs-cell--lang"} -->
<p class="hs-cell hs-cell--lang"><a href="/"><?php echo esc_html( homura_safety_t( 'hd_lang' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
