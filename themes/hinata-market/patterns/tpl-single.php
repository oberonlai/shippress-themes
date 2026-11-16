<?php
/**
 * Title: Single notice
 * Slug: hinata-market/tpl-single
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Inserter: no
 * Description: Notice title, date, featured image and text beside a small more-notices column.
 */
?>
<!-- wp:group {"tagName":"section","className":"hm-cols hm-single","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull hm-cols hm-single"><!-- wp:group {"className":"hm-col hm-col--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--mid"><!-- wp:post-title {"level":1,"className":"hm-h1"} /-->

<!-- wp:post-date {"format":"l j F Y","className":"hm-row__date"} /-->

<!-- wp:post-featured-image {"aspectRatio":"1.64","className":"hm-photo"} /-->

<!-- wp:post-content {"className":"hm-prose","layout":{"type":"default"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--right","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--right"><!-- wp:paragraph {"className":"hm-label hm-label--double"} -->
<p class="hm-label hm-label--double"><?php echo esc_html( hinata_market_t( 'more_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-navigation-link {"type":"previous","showTitle":true} /-->

<!-- wp:post-navigation-link {"showTitle":true} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
