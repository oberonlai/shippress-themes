<?php
/**
 * Title: Home: journal cards
 * Slug: shiosai-resort/front-journal
 * Categories: shiosai-resort
 * Keywords: resort, hotel, seaside
 * Viewport Width: 1440
 * Description: The three latest stories as a three-column row of 3:2 photo cards: photo, date and category, title.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ss-sec ss-journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec ss-journal"><!-- wp:group {"className":"ss-journal__in","layout":{"type":"default"}} -->
<div class="wp-block-group ss-journal__in"><!-- wp:paragraph {"className":"ss-eyebrow"} -->
<p class="ss-eyebrow"><?php echo wp_kses_post( shiosai_resort_t( 'kceae5c6f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ss-journal__q","layout":{"type":"default"}} -->
<div class="wp-block-query ss-journal__q"><!-- wp:post-template {"className":"ss-journal__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"ss-journal__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ss-journal__row sp-reveal sp-reveal--up"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ss-journal__img"} /-->

<!-- wp:group {"className":"ss-journal__meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ss-journal__meta"><!-- wp:post-date {"format":"<?php echo esc_attr( shiosai_resort_t( 'date_fmt' ) ); ?>","className":"ss-journal__d"} /-->

<!-- wp:post-terms {"term":"category","className":"ss-journal__c"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ss-journal__t ss-lc"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
