<?php
/**
 * Title: Home: notes
 * Slug: yoru-bar/front-notes
 * Categories: yoru-bar
 * Keywords: bar, journal, news
 * Viewport Width: 1440
 * Description: Near-black section: a struck display word, the three latest posts as hairline rows (date, title, round chevron) and a ghost-disc link.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-notes"><!-- wp:group {"className":"yb-notes__head sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yb-notes__head sp-stagger"><!-- wp:heading {"fontSize":"xx-large","className":"yb-struck sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yb-struck sp-reveal sp-reveal--up has-xx-large-font-size"><?php echo esc_html( yoru_bar_t( 'nt_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yb-notes__lead"} -->
<p class="yb-notes__lead"><?php echo esc_html( yoru_bar_t( 'nt_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"yb-rows yb-rows--notes sp-reveal sp-reveal--up"} -->
<div class="wp-block-query yb-rows yb-rows--notes sp-reveal sp-reveal--up"><!-- wp:post-template -->
<!-- wp:group {"className":"yb-row yb-row--note","layout":{"type":"default"}} -->
<div class="wp-block-group yb-row yb-row--note"><!-- wp:post-date {"format":"Y-m-d","className":"yb-row__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"yb-row__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<?php echo yoru_bar_more( 'nt_more', '/notes/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></section>
<!-- /wp:group -->
