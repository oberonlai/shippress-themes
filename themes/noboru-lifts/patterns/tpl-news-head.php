<?php
/**
 * Title: Template: News head
 * Slug: noboru-lifts/tpl-news-head
 * Categories: noboru-lifts
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nl-head-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nl-head-sec"><!-- wp:group {"className":"nl-head","layout":{"type":"default"}} -->
<div class="wp-block-group nl-head"><!-- wp:group {"className":"nl-head__t","layout":{"type":"default"}} -->
<div class="wp-block-group nl-head__t"><!-- wp:paragraph {"className":"nl-eyebrow"} -->
<p class="nl-eyebrow"><?php echo wp_kses_post( noboru_lifts_t( 'news_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"nl-pagehead__h1"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nl-note","layout":{"type":"default"}} -->
<div class="wp-block-group nl-note"><!-- wp:paragraph {"className":"nl-vtab nl-vtab--note"} -->
<p class="nl-vtab nl-vtab--note"><?php echo wp_kses_post( noboru_lifts_t( 'news_tab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nl-note__photo","layout":{"type":"default"}} -->
<div class="wp-block-group nl-note__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nl-note__img"} -->
<figure class="wp-block-image size-full nl-note__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-corridor.webp' ) ); ?>" alt="<?php echo esc_attr( noboru_lifts_t( 'news_alt' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nl-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group nl-note__text"><!-- wp:paragraph {"className":"nl-note__k"} -->
<p class="nl-note__k"><?php echo wp_kses_post( noboru_lifts_t( 'news_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nl-note__v"} -->
<p class="nl-note__v"><a href="<?php echo esc_url( home_url( '/#book' ) ); ?>"><?php echo wp_kses_post( noboru_lifts_t( 'news_v' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nl-note__arrow"} -->
<p class="nl-note__arrow" aria-hidden="true"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
