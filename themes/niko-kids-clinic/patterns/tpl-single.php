<?php
/**
 * Title: Note
 * Slug: niko-kids-clinic/tpl-single
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "nk-section nk-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull nk-section nk-article"><!-- wp:group {"className": "nk-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-article__head"><!-- wp:post-terms {"term":"category","className":"nk-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"nk-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"nk-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"nk-photo"} /-->

<!-- wp:post-content {"className":"nk-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "nk-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"nk-tags"} /-->

<!-- wp:group {"className": "nk-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( niko_kids_clinic_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( niko_kids_clinic_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
