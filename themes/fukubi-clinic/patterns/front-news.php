<?php
/**
 * Title: Home: news
 * Slug: fukubi-clinic/front-news
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: Pale rounded container: label and a View all link at the left; the latest three posts as white dated rows with a category pill and a chevron.
 */
?>
<!-- wp:group {"align":"full","className":"fc-sec fc-sec--white fc-sec--news","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-sec fc-sec--white fc-sec--news"><!-- wp:group {"className":"fc-newsbox","layout":{"type":"default"}} -->
<div class="wp-block-group fc-newsbox"><!-- wp:columns {"className":"fc-newscols","style":{"spacing":{"blockGap":{"left":"48px"}}}} -->
<div class="wp-block-columns fc-newscols"><!-- wp:column {"width":"26%"} -->
<div class="wp-block-column" style="flex-basis:26%"><?php echo fc_label( fc_t( 'news_label' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- wp:paragraph {"className":"fc-more"} -->
<p class="fc-more"><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>"><?php echo esc_html( fc_t( 'news_all' ) ); ?></a><?php echo fc_chev(); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --><!-- wp:column {"width":"74%"} -->
<div class="wp-block-column" style="flex-basis:74%"><!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"fc-nlist"} -->
<div class="wp-block-query fc-nlist"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"fc-nrow","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group fc-nrow"><!-- wp:group {"className":"fc-nrow__date","layout":{"type":"default"}} -->
<div class="wp-block-group fc-nrow__date"><!-- wp:post-date {"format":"Y","className":"fc-nrow__y"} /-->
<!-- wp:post-date {"format":"m.d","className":"fc-nrow__d"} /--></div>
<!-- /wp:group --><!-- wp:post-terms {"term":"category","className":"fc-nrow__cat"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"fc-nrow__t"} /--><!-- wp:html -->
<?php echo fc_chev(); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
