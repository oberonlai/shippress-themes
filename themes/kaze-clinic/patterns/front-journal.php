<?php
/**
 * Title: Home: from the journal
 * Slug: kaze-clinic/front-journal
 * Categories: kaze-clinic
 * Keywords: posts, journal
 * Viewport Width: 1440
 * Description: The three latest posts as 3:2 thumbnails with date and title, each in a staggered fade-up.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kz-sec kz-journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-sec kz-journal"><!-- wp:group {"className":"kz-wrap kz-wrap--list","layout":{"type":"default"}} -->
<div class="wp-block-group kz-wrap kz-wrap--list"><!-- wp:paragraph {"className":"kz-label"} -->
<p class="kz-label"><?php echo esc_html( kaze_clinic_t( 'jo_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kz-h2"} -->
<h2 class="wp-block-heading kz-h2"><?php echo esc_html( kaze_clinic_t( 'jo_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":31,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"kz-posts"} -->
<div class="wp-block-query kz-posts"><!-- wp:post-template {"className":"kz-posts__t"} -->
<!-- wp:group {"className":"kz-post sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kz-post sp-reveal sp-reveal--up"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kz-post__img"} /-->

<!-- wp:post-date {"format":"j M Y","className":"kz-post__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kz-post__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"kz-link"} -->
<p class="kz-link"><a href="/journal/"><?php echo esc_html( kaze_clinic_t( 'jo_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
