<?php
/**
 * Title: Home: notes list
 * Slug: seiwa-furniture/front-notes
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: Three latest notes as hairline rows: date, outline category pill, title.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sw-sec sw-notes-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sw-sec sw-notes-sec"><!-- wp:group {"className":"sw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sw-wrap"><!-- wp:group {"className":"sw-label","layout":{"type":"default"}} -->
<div class="wp-block-group sw-label"><!-- wp:paragraph {"className":"sw-label__w"} -->
<p class="sw-label__w"><?php echo esc_html( seiwa_furniture_t( 'notes_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-label__c"} -->
<p class="sw-label__c"><?php echo esc_html( seiwa_furniture_t( 'notes_cap' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"sw-notes sp-reveal sp-reveal--up"} -->
<div class="wp-block-query sw-notes sp-reveal sp-reveal--up"><!-- wp:post-template {"className":"sw-notes__list","layout":{"type":"default"}} -->
<!-- wp:group {"className":"sw-note","layout":{"type":"default"}} -->
<div class="wp-block-group sw-note"><!-- wp:post-date {"format":"j F Y","className":"sw-note__d"} /-->

<!-- wp:post-terms {"term":"category","className":"sw-note__c"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sw-note__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( seiwa_furniture_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"sw-more"} -->
<p class="sw-more"><a href="/notes/"><?php echo esc_html( seiwa_furniture_t( 'notes_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
