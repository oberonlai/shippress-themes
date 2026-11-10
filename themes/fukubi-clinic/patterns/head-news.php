<?php
/**
 * Title: News page head
 * Slug: fukubi-clinic/head-news
 * Categories: fukubi-clinic
 * Keywords: clinic, news, page head
 * Viewport Width: 1440
 * Description: Wash band with the page label, title and lead at the left and a 320 px circular photograph with a smaller circle cut by the screen edge at the right, on a blurred halo.
 */
?>
<!-- wp:group {"align":"full","className":"fc-pagehead fc-pagehead--tri sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-pagehead fc-pagehead--tri sp-parallax"><!-- wp:html -->
<div class="fc-halo sp-parallax__layer" aria-hidden="true"></div>
<!-- /wp:html --><!-- wp:group {"className":"fc-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group fc-pagehead__in"><?php echo fc_label( fc_t( 'news_label' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- wp:heading {"level":1,"className":"fc-pagehead__h"} -->
<h1 class="wp-block-heading fc-pagehead__h"><?php echo esc_html( fc_t( 'news_h' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"fc-pagehead__lead"} -->
<p class="fc-pagehead__lead"><?php echo esc_html( fc_t( 'news_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"fc-pagehead__pics","layout":{"type":"default"}} -->
<div class="wp-block-group fc-pagehead__pics"><?php
echo fc_img( 'p17-report.webp', fc_t( 'alt_p17' ), 'fc-pc fc-pc--1' ) . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput
echo fc_img( 'p05-corridor.webp', fc_t( 'alt_p05' ), 'fc-pc fc-pc--2' ); // phpcs:ignore WordPress.Security.EscapeOutput
?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
