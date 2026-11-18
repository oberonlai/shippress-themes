<?php
/**
 * Title: Template: journal list
 * Slug: kawa-dumplings/tpl-home
 * Categories: kawa-dumplings
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page and archive templates.
 */
?>
<!-- wp:group {"tagName":"main","className":"kd-main","layout":{"type":"default"}} -->
<main class="wp-block-group kd-main"><!-- wp:group {"tagName":"section","className":"kd-ph","layout":{"type":"default"}} -->
<section class="wp-block-group kd-ph"><!-- wp:group {"className":"kd-ph__paper kd-stage__paper","layout":{"type":"default"}} -->
<div class="wp-block-group kd-ph__paper kd-stage__paper"><!-- wp:html -->
<div class="kd-rim" aria-hidden="true"><i class="kd-rim__ln kd-rim__ln--o-t"></i><i class="kd-rim__ln kd-rim__ln--o-b"></i><i class="kd-rim__ln kd-rim__ln--o-l"></i><i class="kd-rim__ln kd-rim__ln--o-r"></i><i class="kd-rim__ln kd-rim__ln--i-t"></i><i class="kd-rim__ln kd-rim__ln--i-b"></i><i class="kd-rim__ln kd-rim__ln--i-l"></i><i class="kd-rim__ln kd-rim__ln--i-r"></i><svg class="kd-orn kd-orn--tl" viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="#82642A" stroke-width="1.25" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M4 20a10 10 0 0 1 20 0zM10.7 18.8L4.6 16.6M12.0 17.1L8.3 11.8M14.0 16.5L14.0 10.0M16.0 17.1L19.7 11.8M17.3 18.8L23.4 16.6"/></svg><svg class="kd-orn kd-orn--tr" viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="#82642A" stroke-width="1.25" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M4 20a10 10 0 0 1 20 0zM10.7 18.8L4.6 16.6M12.0 17.1L8.3 11.8M14.0 16.5L14.0 10.0M16.0 17.1L19.7 11.8M17.3 18.8L23.4 16.6"/></svg><svg class="kd-orn kd-orn--bl" viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="#82642A" stroke-width="1.25" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M4 20a10 10 0 0 1 20 0zM10.7 18.8L4.6 16.6M12.0 17.1L8.3 11.8M14.0 16.5L14.0 10.0M16.0 17.1L19.7 11.8M17.3 18.8L23.4 16.6"/></svg><svg class="kd-orn kd-orn--br" viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="#82642A" stroke-width="1.25" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M4 20a10 10 0 0 1 20 0zM10.7 18.8L4.6 16.6M12.0 17.1L8.3 11.8M14.0 16.5L14.0 10.0M16.0 17.1L19.7 11.8M17.3 18.8L23.4 16.6"/></svg><svg class="kd-orn kd-orn--t" viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="#82642A" stroke-width="1.25" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M4 20a10 10 0 0 1 20 0zM10.7 18.8L4.6 16.6M12.0 17.1L8.3 11.8M14.0 16.5L14.0 10.0M16.0 17.1L19.7 11.8M17.3 18.8L23.4 16.6"/></svg><svg class="kd-orn kd-orn--b" viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="#82642A" stroke-width="1.25" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M4 20a10 10 0 0 1 20 0zM10.7 18.8L4.6 16.6M12.0 17.1L8.3 11.8M14.0 16.5L14.0 10.0M16.0 17.1L19.7 11.8M17.3 18.8L23.4 16.6"/></svg><svg class="kd-orn kd-orn--l" viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="#82642A" stroke-width="1.25" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M4 20a10 10 0 0 1 20 0zM10.7 18.8L4.6 16.6M12.0 17.1L8.3 11.8M14.0 16.5L14.0 10.0M16.0 17.1L19.7 11.8M17.3 18.8L23.4 16.6"/></svg><svg class="kd-orn kd-orn--r" viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="#82642A" stroke-width="1.25" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M4 20a10 10 0 0 1 20 0zM10.7 18.8L4.6 16.6M12.0 17.1L8.3 11.8M14.0 16.5L14.0 10.0M16.0 17.1L19.7 11.8M17.3 18.8L23.4 16.6"/></svg></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kd-stage__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kd-stage__inner"><!-- wp:paragraph {"className":"kd-mark"} -->
<p class="kd-mark"><?php echo esc_html( kawa_dumplings_t( 'stage_mark' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kd-h1 kd-h1--page"} -->
<h1 class="wp-block-heading kd-h1 kd-h1--page"><?php echo esc_html( kawa_dumplings_t( 'jr_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-lede"} -->
<p class="kd-lede"><?php echo esc_html( kawa_dumplings_t( 'list_title' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-ph__index kd-index","layout":{"type":"default"}} -->
<div class="wp-block-group kd-ph__index kd-index"><!-- wp:paragraph {"className":"kd-ix__label"} -->
<p class="kd-ix__label"><?php echo esc_html( kawa_dumplings_t( 'ixl_journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"kd-ix__rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity kd-ix__rule"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"kd-ix__list","layout":{"type":"default"}} -->
<div class="wp-block-group kd-ix__list"><!-- wp:paragraph {"className":"kd-ix__row is-current"} -->
<p class="kd-ix__row is-current"><svg class="kd-ix__mark" viewBox="0 0 10 8" width="10" height="8" aria-hidden="true" focusable="false"><path d="M0 0h10L5 8z" fill="#5C4518"/></svg><a href="/journal/"><span class="kd-ix__n">01</span><span class="kd-ix__l"><?php echo esc_html( kawa_dumplings_t( 'ix_journal' ) ); ?></span><span class="kd-ix__d" aria-hidden="true"></span><span class="kd-ix__v"><?php echo esc_html( kawa_dumplings_t( 'ix_journal_v' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-ix__row"} -->
<p class="kd-ix__row"><a href="/category/kitchen-notes/"><span class="kd-ix__n">02</span><span class="kd-ix__l"><?php echo esc_html( kawa_dumplings_t( 'ix_kitchen' ) ); ?></span><span class="kd-ix__d" aria-hidden="true"></span><span class="kd-ix__v"><?php echo esc_html( kawa_dumplings_t( 'ix_kitchen_v' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-ix__row"} -->
<p class="kd-ix__row"><a href="/category/branch-notes/"><span class="kd-ix__n">03</span><span class="kd-ix__l"><?php echo esc_html( kawa_dumplings_t( 'ix_branchn' ) ); ?></span><span class="kd-ix__d" aria-hidden="true"></span><span class="kd-ix__v"><?php echo esc_html( kawa_dumplings_t( 'ix_branchn_v' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-ix__row"} -->
<p class="kd-ix__row"><a href="/steam-letter/"><span class="kd-ix__n">04</span><span class="kd-ix__l"><?php echo esc_html( kawa_dumplings_t( 'ix_letter' ) ); ?></span><span class="kd-ix__d" aria-hidden="true"></span><span class="kd-ix__v"><?php echo esc_html( kawa_dumplings_t( 'ix_letter_v' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-ticker","layout":{"type":"default"}} -->
<div class="wp-block-group kd-ticker"><!-- wp:paragraph {"className":"kd-ticker__label"} -->
<p class="kd-ticker__label"><?php echo esc_html( kawa_dumplings_t( 'ticker_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kd-ticker__track sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group kd-ticker__track sp-marquee"><!-- wp:group {"className":"kd-ticker__run","layout":{"type":"default"}} -->
<div class="wp-block-group kd-ticker__run"><!-- wp:paragraph -->
<p><?php echo esc_html( kawa_dumplings_t( 'ticker_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="wp-block-group kd-ticker__run" aria-hidden="true"><p><?php echo esc_html( kawa_dumplings_t( 'ticker_text' ) ); ?></p>
</div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-ph__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kd-ph__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kd-ph__img"} -->
<figure class="wp-block-image size-full kd-ph__img"><img src="<?php echo esc_url( kawa_dumplings_img( 'steamer-open.webp' ) ); ?>" alt="<?php echo esc_attr( kawa_dumplings_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kd-sec kd-listing kd-wide","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-listing kd-wide"><!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"kd-cards"} -->
<!-- wp:group {"className":"kd-card","layout":{"type":"default"}} -->
<div class="wp-block-group kd-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kd-card__img"} /-->

<!-- wp:group {"className":"kd-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group kd-card__body"><!-- wp:post-date {"format":"j M Y","className":"kd-card__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"kd-card__t"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"className":"kd-card__x"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kd-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( kawa_dumplings_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
