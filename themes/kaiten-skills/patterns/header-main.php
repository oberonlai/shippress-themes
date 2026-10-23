<?php
/**
 * Title: Header: blob plate, menu and account links
 * Slug: kaiten-skills/header-main
 * Categories: kaiten-skills
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ks-head","layout":{"type":"default"}} -->
<div class="wp-block-group ks-head"><!-- wp:group {"className":"ks-blob","layout":{"type":"default"}} -->
<div class="wp-block-group ks-blob"><!-- wp:paragraph {"className":"ks-mark"} -->
<p class="ks-mark"><a href="/">Kaiten Skills</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-tag"} -->
<p class="ks-tag"><?php echo wp_kses_post( kaiten_skills_t( 'k6dae6ee9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-head__nav","layout":{"type":"default"}} -->
<div class="wp-block-group ks-head__nav"><!-- wp:navigation {"overlayMenu":"mobile","className":"ks-nav","layout":{"type":"flex","justifyContent":"right"}} /-->

<!-- wp:paragraph {"className":"ks-acct"} -->
<p class="ks-acct"><a href="/my-courses/"><?php echo wp_kses_post( kaiten_skills_t( 'kced5b6ba' ) ); ?></a><a class="ks-cart" href="<?php echo esc_url( kaiten_skills_shop_url( 'cart' ) ); ?>" aria-label="<?php echo esc_attr( kaiten_skills_t( 'ka85eba4c' ) ); ?>"></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
