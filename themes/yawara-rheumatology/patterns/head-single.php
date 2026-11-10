<?php
/**
 * Title: Page head: article
 * Slug: yawara-rheumatology/head-single
 * Categories: yawara-rheumatology
 * Inserter: no
 * Description: Featured photo strip with a caption tab, date chip and title.
 */
?>
<!-- wp:group {"align":"full","className":"yw-ph yw-ph--post"} -->
<div class="wp-block-group alignfull yw-ph yw-ph--post"><!-- wp:group {"className":"yw-ph__strip yw-ph__strip--one"} -->
<div class="wp-block-group yw-ph__strip yw-ph__strip--one"><!-- wp:group {"className":"yw-cell yw-cell--wide2"} -->
<div class="wp-block-group yw-cell yw-cell--wide2"><!-- wp:post-featured-image {"aspectRatio":"auto","className":"yw-cell__img"} /-->

<!-- wp:paragraph {"className":"yw-caption"} -->
<p class="yw-caption"><?php echo esc_html( yawara_rheumatology_t( 'article_caption' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-ph__white yw-split"} -->
<div class="wp-block-group yw-ph__white yw-split"><!-- wp:group {"className":"yw-split__l"} -->
<div class="wp-block-group yw-split__l"><!-- wp:paragraph {"className":"yw-crumb"} -->
<p class="yw-crumb"><a href="/"><?php echo esc_html( yawara_rheumatology_t( 'crumb_home' ) ); ?></a> / <a href="/journal/"><?php echo esc_html( yawara_rheumatology_t( 'crumb_journal' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-split__r"} -->
<div class="wp-block-group yw-split__r"><!-- wp:post-date {"format":"Y.m.d","className":"yw-chip"} /-->

<!-- wp:post-title {"level":1} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
