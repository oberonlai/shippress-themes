<?php
/**
 * Title: Template: archive
 * Slug: utsushi-films/tpl-archive
 * Categories: utsushi-films
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"uf-main uf-main--head","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull uf-main uf-main--head"><!-- wp:group {"align":"full","className":"uf-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull uf-head"><!-- wp:group {"className":"uf-head__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group uf-head__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/crew-dark.webp' ) ); ?>" alt="<?php echo esc_attr( utsushi_films_t( 'aaf8a8bc0' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uf-head__line","layout":{"type":"default"}} -->
<div class="wp-block-group uf-head__line"><!-- wp:paragraph {"className":"uf-head__home"} -->
<p class="uf-head__home"><a href="/"><?php echo wp_kses_post( utsushi_films_t( 'k208a670f' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"uf-head__name"} -->
<p class="uf-head__name"><?php echo wp_kses_post( utsushi_films_t( 'k6b2b5614' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uf-head__text","layout":{"type":"default"}} -->
<div class="wp-block-group uf-head__text"><!-- wp:heading {"level":1,"className":"uf-head__title"} -->
<h1 class="wp-block-heading uf-head__title"><?php echo wp_kses_post( utsushi_films_t( 'k6b2b5614' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"uf-head__meta"} -->
<p class="uf-head__meta"><?php echo wp_kses_post( utsushi_films_t( 'k3f030077' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uf-narrow uf-leadwrap","layout":{"type":"default"}} -->
<div class="wp-block-group uf-narrow uf-leadwrap"><!-- wp:paragraph {"className":"uf-lead"} -->
<p class="uf-lead"><?php echo wp_kses_post( utsushi_films_t( 'k217ded85' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"uf-section uf-journal","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull uf-section uf-journal"><!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"uf-query","layout":{"type":"default"}} -->
<div class="wp-block-query uf-query"><!-- wp:post-template {"className":"uf-postlist","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"uf-postrow","layout":{"type":"default"}} -->
<div class="wp-block-group uf-postrow"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"uf-postthumb"} /-->

<!-- wp:post-date {"className":"uf-label"} /-->

<!-- wp:post-title {"isLink":true,"level":2} /-->

<!-- wp:post-excerpt {"excerptLength":24} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"uf-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( utsushi_films_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
