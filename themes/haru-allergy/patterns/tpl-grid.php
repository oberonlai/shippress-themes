<?php
/**
 * Title: Template: case-note grid
 * Slug: haru-allergy/tpl-grid
 * Categories: haru-allergy
 * Keywords: tpl-grid
 * Viewport Width: 1440
 * Description: The slate band with translucent case-note cards, used by the case notes page, archives, categories and tags.
 */
?>
<!-- wp:group {"className":"ha-notes","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ha-notes"><!-- wp:group {"className":"ha-notes__in","layout":{"type":"default"}} -->
<div class="wp-block-group ha-notes__in"><!-- wp:paragraph {"className":"ha-notes__label"} -->
<p class="ha-notes__label"><?php echo esc_html( haru_allergy_t( 'ca_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ha-notes__h sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading ha-notes__h sp-reveal sp-reveal--mask"><?php echo esc_html( haru_allergy_t( 'cn_band_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":22,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ha-notes__q"} -->
<div class="wp-block-query ha-notes__q"><!-- wp:post-template {"className":"ha-notes__list"} -->
<!-- wp:group {"className":"ha-card","layout":{"type":"default"}} -->
<div class="wp-block-group ha-card"><!-- wp:post-featured-image {"isLink":true,"width":"256px","height":"199px","className":"ha-card__thumb"} /-->

<!-- wp:group {"className":"ha-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group ha-card__body"><!-- wp:post-title {"level":3,"isLink":true,"className":"ha-card__title"} /-->

<!-- wp:post-excerpt {"excerptLength":25,"className":"ha-card__excerpt"} /-->

<!-- wp:read-more {"content":"<?php echo esc_attr( haru_allergy_t( 'ca_read' ) ); ?>","className":"ha-card__more"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"ha-notes__pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"ha-notes__foot"} -->
<p class="ha-notes__foot"><?php echo esc_html( haru_allergy_t( 'ca_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
