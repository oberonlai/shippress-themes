<?php
/**
 * Title: Template: updates list
 * Slug: shizuku-filter/tpl-updates
 * Categories: shizuku-filter
 * Keywords: water filter, crowdfunding, landing
 * Viewport Width: 1440
 * Description: Updates list: photograph, crosshair lead and post pills.
 * Inserter: no
 */
?>
<!-- wp:cover {"url":"<?php shizuku_filter_img( '10-story-studio-pantry.webp' ); ?>","dimRatio":0,"className":"sf-phero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover sf-phero"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php shizuku_filter_a( 'alt_upd' ); ?>" src="<?php shizuku_filter_img( '10-story-studio-pantry.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->
<!-- wp:group {"tagName":"section","align":"full","className":"sf-sec ","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sf-sec ">
<!-- wp:paragraph {"className":"sf-rail"} -->
<p class="sf-rail"><span><?php shizuku_filter_e( 'upd_label' ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sf-body ","layout":{"type":"default"}} -->
<div class="wp-block-group sf-body ">
<!-- wp:group {"className":"sf-xh sp-reveal sp-reveal--wipe sf-wipe","layout":{"type":"default"}} -->
<div class="wp-block-group sf-xh sp-reveal sp-reveal--wipe sf-wipe">
<!-- wp:paragraph {"className":"sf-mk"} -->
<p class="sf-mk"><?php shizuku_filter_e( 'updates_intro' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"sf-posts"} --><div class="wp-block-query sf-posts"><!-- wp:post-template --><!-- wp:group {"className":"sf-post","layout":{"type":"default"}} --><div class="wp-block-group sf-post"><!-- wp:post-date {"format":"j M Y","className":"sf-post__d"} /--><!-- wp:post-title {"isLink":true,"level":3,"className":"sf-post__t"} /--><!-- wp:paragraph {"className":"sf-go sf-go--post"} --><p class="sf-go sf-go--post"><span aria-hidden="true">→</span></p><!-- /wp:paragraph --></div><!-- /wp:group --><!-- /wp:post-template --><!-- wp:query-pagination --><!-- wp:query-pagination-previous /--><!-- wp:query-pagination-next /--><!-- /wp:query-pagination --><!-- wp:query-no-results --><!-- wp:paragraph --><p><?php shizuku_filter_e( 'upd_none' ); ?></p><!-- /wp:paragraph --><!-- /wp:query-no-results --></div><!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"sf-cta","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sf-cta">
<!-- wp:paragraph {"className":"sf-cta__t"} -->
<p class="sf-cta__t"><?php shizuku_filter_e( 'cta_h1' ); ?><br><?php shizuku_filter_e( 'cta_h2' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sf-back__cta","layout":{"type":"default"}} -->
<div class="wp-block-group sf-back__cta">
<!-- wp:paragraph {"className":"sf-go sf-go--lg"} -->
<p class="sf-go sf-go--lg"><a href="/#rewards" aria-label="<?php shizuku_filter_a( 'cta' ); ?>">→</a></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sf-btn"} -->
<div class="wp-block-button sf-btn"><a class="wp-block-button__link wp-element-button" href="/#rewards"><?php shizuku_filter_e( 'cta_btn' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
