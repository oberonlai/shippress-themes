<?php
/**
 * Title: Footer: facts and index
 * Slug: yukishiro-chalet/footer-main
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Dark footer with the chalet facts, a write block, the page index and the snow letter link.
 */
?>
<!-- wp:group {"className":"yk-foot","layout":{"type":"default"}} -->
<div class="wp-block-group yk-foot"><!-- wp:group {"className":"yk-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group yk-foot__in"><!-- wp:paragraph {"className":"yk-foot__logo"} -->
<p class="yk-foot__logo"><?php echo esc_html( yukishiro_chalet_t( 'foot_logo' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yk-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group yk-foot__cols"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"className":"yk-foot__h"} -->
<h3 class="wp-block-heading yk-foot__h"><?php echo esc_html( yukishiro_chalet_t( 'foot_chalet' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( yukishiro_chalet_t( 'foot_address' ) ); ?><br><?php echo esc_html( yukishiro_chalet_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"className":"yk-foot__h"} -->
<h3 class="wp-block-heading yk-foot__h"><?php echo esc_html( yukishiro_chalet_t( 'foot_write' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="mailto:stay@yukishiro-chalet.example">stay@yukishiro-chalet.example</a><br>+41 00 555 01 18</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"className":"yk-foot__h"} -->
<h3 class="wp-block-heading yk-foot__h"><?php echo esc_html( yukishiro_chalet_t( 'foot_pages' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-foot__index"} -->
<p class="yk-foot__index" id="site-index"><a href="/packages/"><?php echo esc_html( yukishiro_chalet_t( 'nav_packages' ) ); ?></a> · <a href="/lift-pass/"><?php echo esc_html( yukishiro_chalet_t( 'nav_lift' ) ); ?></a> · <a href="/rooms/"><?php echo esc_html( yukishiro_chalet_t( 'nav_rooms' ) ); ?></a> · <a href="/summer/"><?php echo esc_html( yukishiro_chalet_t( 'nav_summer' ) ); ?></a> · <a href="/journal/"><?php echo esc_html( yukishiro_chalet_t( 'nav_journal' ) ); ?></a> · <a href="/contact/"><?php echo esc_html( yukishiro_chalet_t( 'nav_contact' ) ); ?></a> · <a href="/privacy/"><?php echo esc_html( yukishiro_chalet_t( 'foot_privacy' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"className":"yk-foot__h"} -->
<h3 class="wp-block-heading yk-foot__h"><?php echo esc_html( yukishiro_chalet_t( 'foot_letter' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="/snow-letter/"><?php echo esc_html( yukishiro_chalet_t( 'foot_letter_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yk-foot__legal"} -->
<p class="yk-foot__legal"><?php echo esc_html( yukishiro_chalet_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
