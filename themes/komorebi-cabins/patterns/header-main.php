<?php
/**
 * Title: Header: mark, menu, reserve button and Menu box
 * Slug: komorebi-cabins/header-main
 * Categories: komorebi-cabins
 * Inserter: no
 * Viewport Width: 1440
 * Description: Split header: wordmark, one menu, a divider, the terracotta reserve button and the white Menu box.
 */
?>
<!-- wp:group {"align":"full","className":"kc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-header"><!-- wp:group {"className":"kc-header__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-header__in"><!-- wp:group {"className":"kc-header__l","layout":{"type":"default"}} -->
<div class="wp-block-group kc-header__l"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"/","className":"kc-mark"} -->
<figure class="wp-block-image size-full kc-mark"><a href="/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/mark.svg' ) ); ?>" alt="Komorebi Cabins"/></a></figure>
<!-- /wp:image -->

<!-- wp:site-title {"level":0,"isLink":true,"className":"kc-header__brand"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"greige","overlayTextColor":"ink","className":"kc-nav","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} /-->

<!-- wp:group {"className":"kc-header__r","layout":{"type":"default"}} -->
<div class="wp-block-group kc-header__r"><!-- wp:group {"className":"kc-header__rule","layout":{"type":"default"}} -->
<div class="wp-block-group kc-header__rule"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-header__reserve"} -->
<p class="kc-header__reserve"><a href="/reserve/"><span class="kc-long">Hold a weekend</span><span class="kc-short">Reserve</span><span class="kc-chev" aria-hidden="true"></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-header__menu"} -->
<p class="kc-header__menu"><a href="#site-index">Menu<span class="kc-dots" aria-hidden="true"></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
