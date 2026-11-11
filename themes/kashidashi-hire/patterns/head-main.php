<?php
/**
 * Title: Header
 * Slug: kashidashi-hire/head-main
 * Categories: kashidashi-hire
 * Inserter: no
 * Description: Slant-cut pine logo tab, anchor menu and the square Request dates button.
 */
?>
<!-- wp:group {"align":"full","className":"kh-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kh-header"><!-- wp:group {"className":"kh-header__tab","layout":{"type":"default"}} -->
<div class="wp-block-group kh-header__tab"><!-- wp:site-title {"level":0,"className":"kh-brand"} /-->

<!-- wp:paragraph {"className":"kh-header__sub"} -->
<p class="kh-header__sub"><?php echo esc_html( kashidashi_hire_t( 'hd_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","className":"kh-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->

<!-- wp:paragraph {"className":"kh-header__cta"} -->
<p class="kh-header__cta"><a href="/request/"><?php echo esc_html( kashidashi_hire_t( 'hd_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
