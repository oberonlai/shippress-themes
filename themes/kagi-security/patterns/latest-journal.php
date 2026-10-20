<?php
/**
 * Title: Home: journal and contact
 * Slug: kagi-security/latest-journal
 * Categories: kagi-security
 * Keywords: journal, posts, latest
 * Viewport Width: 1440
 * Description: The latest journal heading and link, with the office details and the enquiry button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section"><!-- wp:group {"align":"wide","className":"ks-row-head ks-row-head--end","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-row-head ks-row-head--end"><!-- wp:group {"className":"ks-row-head__title","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row-head__title"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'latest_journal_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( kagi_security_t( 'latest_journal_02' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo wp_kses_post( kagi_security_t( 'latest_journal_03' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ks-posts"} -->
<div class="wp-block-query alignwide ks-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"ks-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ks-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( kagi_security_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ks-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
