<?php
/**
 * Title: Inner head: archive band with docked card
 * Slug: kataribe-partners/head-archive
 * Categories: kataribe-partners
 * Keywords: header, archive
 * Viewport Width: 1440
 * Inserter: no
 * Description: Photo band with the archive title as the left statement and the docked card with summary and the request pill.
 */
$e = 'kataribe_partners_e';
$i = 'kataribe_partners_img';
?>
<!-- wp:cover {"url":"<?php echo $i( 'h01-press-list-table.webp' ); ?>","alt":"<?php echo esc_attr( kataribe_partners_t( 'alt_news_head' ) ); ?>","dimRatio":0,"isDark":false,"align":"full","className":"kp-ihead sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light kp-ihead sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kataribe_partners_t( 'alt_news_head' ) ); ?>" src="<?php echo $i( 'h01-press-list-table.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"archive","level":1,"showPrefix":false,"className":"kp-ihead__title"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"kp-idock","layout":{"type":"default"}} -->
<div class="wp-block-group kp-idock"><!-- wp:paragraph {"className":"kp-idock__sum"} -->
<p class="kp-idock__sum"><?php echo $e( 'ah_sum' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kp-idock__cta"} -->
<div class="wp-block-buttons kp-idock__cta"><!-- wp:button {"className":"kp-pill"} -->
<div class="wp-block-button kp-pill"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo $e( 'cta' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
