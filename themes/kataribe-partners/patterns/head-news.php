<?php
/**
 * Title: Inner head: news photo band with docked card
 * Slug: kataribe-partners/head-news
 * Categories: kataribe-partners
 * Keywords: header, news
 * Viewport Width: 1440
 * Description: Photo band with a two-line left statement and a docked card with a Notes / Stories toggle, a summary line and the request pill.
 */
$e = 'kataribe_partners_e';
$i = 'kataribe_partners_img';
$home = is_home() || is_front_page();
?>
<!-- wp:cover {"url":"<?php echo $i( 'h01-press-list-table.webp' ); ?>","alt":"<?php echo esc_attr( kataribe_partners_t( 'alt_news_head' ) ); ?>","dimRatio":0,"isDark":false,"align":"full","className":"kp-ihead sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light kp-ihead sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kataribe_partners_t( 'alt_news_head' ) ); ?>" src="<?php echo $i( 'h01-press-list-table.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"kp-ihead__title"} -->
<h1 class="wp-block-heading kp-ihead__title"><?php echo kataribe_partners_lines( 'nh_title' ); ?></h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"kp-idock","layout":{"type":"default"}} -->
<div class="wp-block-group kp-idock"><!-- wp:html -->
<nav class="kp-tab kp-itab" aria-label="<?php echo $e( 'nh_title' ); ?>"><a href="/category/notes/"><?php echo $e( 'nh_tab1' ); ?></a><a href="/category/stories/"><?php echo $e( 'nh_tab2' ); ?></a></nav>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kp-idock__sum"} -->
<p class="kp-idock__sum"><?php echo $e( 'nh_sum' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kp-idock__cta"} -->
<div class="wp-block-buttons kp-idock__cta"><!-- wp:button {"className":"kp-pill"} -->
<div class="wp-block-button kp-pill"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo $e( 'cta' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
