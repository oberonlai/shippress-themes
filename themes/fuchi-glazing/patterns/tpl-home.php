<?php
/**
 * Title: Template: news ledger
 * Slug: fuchi-glazing/tpl-home
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list for the posts page, archive, category, tag and search templates: dated ledger rows.
 */
?>
<!-- wp:group {"align":"full","className":"fg-crumbrow","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fg-crumbrow">
<!-- wp:html -->
<p class="fg-crumb"><a href="/"><?php echo esc_html( fuchi_glazing_t( 'crumb_home' ) ); ?></a><svg width="8" height="12" viewBox="0 0 8 12" fill="none" stroke="currentColor" aria-hidden="true" focusable="false"><path d="M2 1l5 5-5 5"/></svg><span aria-current="page"><?php echo esc_html( fuchi_glazing_t( 'crumb_news' ) ); ?></span></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"fg-phead fg-phead--plain","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fg-phead fg-phead--plain">
<!-- wp:group {"className":"fg-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group fg-phead__panel">
<!-- wp:heading {"level":1,"className":"fg-phead__h1"} -->
<h1 class="wp-block-heading fg-phead__h1"><?php echo esc_html( fuchi_glazing_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-phead__lead"} -->
<p class="fg-phead__lead"><?php echo esc_html( fuchi_glazing_t( 'list_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"fg-sec fg-sec--list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fg-sec fg-sec--list">
<!-- wp:group {"className":"fg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap">
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"fg-list"} -->
<!-- wp:group {"className":"fg-listrow","layout":{"type":"default"}} -->
<div class="wp-block-group fg-listrow">
<!-- wp:post-date {"format":"j M Y","className":"fg-listrow__d"} /-->
<!-- wp:post-terms {"term":"category","className":"fg-listrow__c"} /-->
<!-- wp:group {"className":"fg-listrow__b","layout":{"type":"default"}} -->
<div class="wp-block-group fg-listrow__b">
<!-- wp:post-title {"isLink":true,"level":3,"className":"fg-listrow__t"} /-->
<!-- wp:post-excerpt {"excerptLength":24,"className":"fg-listrow__x"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"className":"fg-pager-nav"} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( fuchi_glazing_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
