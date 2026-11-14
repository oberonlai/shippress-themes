<?php
/**
 * Title: Header: mark, centred menu and Book tea
 * Slug: yoake-patisserie/header-main
 * Categories: yoake-patisserie
 * Inserter: no
 * Viewport Width: 1440
 * Description: Transparent header over the wash: mark and wordmark left, one centred menu, a Book tea link at the right.
 */
?>
<!-- wp:group {"align":"full","className":"yk-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yk-header"><!-- wp:group {"className":"yk-header__in","layout":{"type":"default"}} -->
<div class="wp-block-group yk-header__in"><!-- wp:group {"className":"yk-header__l","layout":{"type":"default"}} -->
<div class="wp-block-group yk-header__l"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"/","className":"yk-mark"} -->
<figure class="wp-block-image size-full yk-mark"><a href="/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/mark.svg' ) ); ?>" alt="Yoake Patisserie"/></a></figure>
<!-- /wp:image -->

<!-- wp:site-title {"level":0,"isLink":true,"className":"yk-header__brand"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"dawn-pale","overlayTextColor":"cocoa","className":"yk-nav","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} /-->

<!-- wp:paragraph {"className":"yk-header__book"} -->
<p class="yk-header__book"><a href="/afternoon-tea/#book">Book tea</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
