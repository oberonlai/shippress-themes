<?php
/**
 * Title: Template: single post
 * Slug: hisui-clinic/tpl-single
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: Single post: slim window, date and category pill, featured image and two-tone H2 rules.
 * Inserter: no
 */
?>
<!-- wp:group {"className":"hc-window hc-window--slim sp-parallax","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-window hc-window--slim sp-parallax"><!-- wp:html -->
<figure class="hc-window__pic"><img src="<?php echo hisui_clinic_img( 'A1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_A1' ) ); ?>" width="1568" height="220" decoding="async" fetchpriority="high"/></figure><span class="hc-window__rule" aria-hidden="true"></span>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-pagehead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-pagehead"><!-- wp:group {"className":"hc-wrap hc-wrap--read","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--read"><!-- wp:group {"className":"hc-postrow__meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hc-postrow__meta"><!-- wp:post-date {"className":"hc-date"} /--><!-- wp:post-terms {"term":"category","className":"hc-pill-tag"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"hc-h1"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--read","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--read"><!-- wp:post-featured-image {"sizeSlug":"large","className":"hc-single__img"} /-->

<!-- wp:post-content {"className":"hc-prose hc-single","layout":{"type":"default"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
