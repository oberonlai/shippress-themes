<?php
/**
 * Title: Header: split anchor menu
 * Slug: shoko-archives/header-main
 * Categories: shoko-archives
 * Inserter: no
 * Viewport Width: 1440
 * Description: Two rows: a utility row with hours, phone and the brick booking button, then one anchor menu split around the centred name.
 */
?>
<!-- wp:group {"align":"full","className":"sa-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sa-head"><!-- wp:group {"className":"sa-head__top","layout":{"type":"default"}} -->
<div class="wp-block-group sa-head__top"><!-- wp:paragraph {"className":"sa-head__util"} -->
<p class="sa-head__util"><?php echo esc_html( shoko_archives_t( 'hd_util' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sa-head__cta"} -->
<div class="wp-block-buttons sa-head__cta"><!-- wp:button {"className":"sa-btn"} -->
<div class="wp-block-button sa-btn"><a class="wp-block-button__link wp-element-button" href="/book-a-collection/"><?php echo esc_html( shoko_archives_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-head__bar","layout":{"type":"default"}} -->
<div class="wp-block-group sa-head__bar"><!-- wp:site-title {"level":0,"className":"sa-brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","className":"sa-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
