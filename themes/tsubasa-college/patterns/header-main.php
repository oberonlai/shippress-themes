<?php
/**
 * Title: Header: two tiers, wordmark and centred menu
 * Slug: tsubasa-college/header-main
 * Categories: tsubasa-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: A thin utility row (phone, office hours, language) over the main row: wordmark left, the single uppercase menu centred, a 1px grey hairline below.
 */
?>
<!-- wp:group {"align":"full","className":"tc-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tc-head"><!-- wp:group {"align":"full","className":"tc-head__util","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tc-head__util"><!-- wp:group {"align":"wide","className":"tc-head__utilin","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tc-head__utilin"><!-- wp:paragraph {"className":"tc-util"} -->
<p class="tc-util"><?php echo esc_html( tsubasa_college_t( 'hd_phone' ) ); ?> · <?php echo esc_html( tsubasa_college_t( 'hd_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tc-util tc-util--lang"} -->
<p class="tc-util tc-util--lang"><a href="/"><?php echo esc_html( tsubasa_college_t( 'hd_lang' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"tc-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tc-head__main"><!-- wp:group {"align":"wide","className":"tc-head__row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tc-head__row"><!-- wp:site-title {"level":0,"className":"tc-brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","className":"tc-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->

<!-- wp:group {"className":"tc-head__end","layout":{"type":"default"}} -->
<div class="wp-block-group tc-head__end"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
